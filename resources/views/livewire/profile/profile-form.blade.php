<form method="POST" wire:submit.prevent="submit" action="route('edit-profile')">
    @csrf
    <div class="mx-auto col-4">
        <div class="card">
            <div class="card-header bg-dark text-light">{{ __('profile.profile') }}</div>
            <div class="card-body pt-1">
                <!-- Flash Messages -->
                @if (session()->has('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('success') }}
                </div>
                @elseif (session()->has('error'))
                <div class="alert alert-danger mt-3" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <div class="d-flex flex-column">
                    <div>
                        <!-- Email -->
                        <label for="email" class="col-form-label text-md-end">{{ __('auth.email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" wire:model="email" @if (!$editMode) readonly @endif>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class = "mt-1">   
                        <!-- Name -->
                        <label for="name" class="col-form-label text-md-end">{{ __('auth.name') }}</label>
                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" wire:model="name" @if (!$editMode) readonly @endif>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Operation Buttons -->
                    @if (!$editMode)
                        <!-- Edit Button -->
                        <button class = "btn btn-dark mt-3" type = "button" wire:click="$set('editMode', true)">
                            {{ __('profile.edit_button') }}
                        </button>
                        <hr>
                        <!-- Change Password -->
                        <button class = "btn btn-primary" type = "button" wire:click="changePasswordMode">
                            {{ __('profile.change_password') }}
                        </button>
                    @else
                        <!-- Save Button, if there is no error -->
                        @if (!$errors->any())
                            <button class = "btn btn-primary mt-3" type = "submit">
                                {{ __('profile.save_button') }}
                            </button>
                        @else
                            <button class = "btn btn-primary mt-3" disabled>
                                {{ __('profile.save_button') }}
                            </button>
                        @endif
                        <!-- Cancel Button -->
                        <button class = "btn btn-danger mt-3" type = "button" wire:click="$set('editMode', false)">
                            {{ __('profile.cancel_button') }}
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
