<div class="mx-auto col-4">
    <div class="card">
        <div class="card-header bg-dark text-light">{{ __('profile.profile') }}</div>
        <div class="card-body pt-1">
            <div class="d-flex flex-column">
                <div>
                    <!-- Email -->
                    <label for="email" class="col-form-label text-md-end">{{ __('auth.email') }}</label>
                    <div class="input-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" readonly>
                        <button class = "btn btn-dark" type = "button"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class = "mt-1">   
                    <!-- Name -->
                    <label for="name" class="col-form-label text-md-end">{{ __('auth.name') }}</label>
                    <div class="input-group">
                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" readonly>
                        <button class = "btn btn-dark" type = "button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Change Password -->
                <button class = "btn btn-dark mt-3" type = "button">
                    {{ __('profile.change_password') }}
                </button>
            </div>
        </div>
    </div>
</div>