@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('auth.confirm') }}</div>

                <div class="card-body pt-1">
                    {{ __('passwords.confirmMessage') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <!-- Password -->
                        <label for="password" class="col-form-label text-md-end">{{ __('auth.password') }}</label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- Submit -->
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-dark form-control">
                                {{ __('auth.confirm') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('auth.forgot') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
