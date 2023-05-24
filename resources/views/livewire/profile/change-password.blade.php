<form method="POST" wire:submit.prevent="submit" action="route('change-password')">
    @csrf
    <div class="mx-auto col-4">
        <div class="card">
            <div class="card-header bg-dark text-light">{{ __('profile.change_password') }}</div>
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
                    <!-- Old Password -->
                    <label for="old_password" class="col-form-label mt-1">{{ __('profile.old_password') }}</label>
                    <div class="input-group">
                        <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" wire:model="old_password" aria-describedby="button-addon2">
                    </div>
                    @error('old_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- New Password -->
                    <label for="new_password" class="col-form-label mt-1">{{ __('profile.new_password') }}</label>
                    <div class="input-group">
                          <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" wire:model="new_password">
                    </div>
                    @error('new_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- Confirm -->
                    <label for="confirm_password" class="col-form-label mt-1">{{ __('profile.confirm_password') }}</label>
                    <div class = "input-group">         
                        <input id="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" wire:model="confirm_password">
                    </div>
                    @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- Change Password -->
                    <button class = "btn btn-primary mt-3" type="submit">
                        {{ __('profile.change_password') }}
                    </button>
                    <!-- Cancel Button -->
                    <button class = "btn btn-danger mt-3" type="button" wire:click="changeEditMode">
                        {{ __('profile.cancel_button') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>