@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('admin.login') }}</div>
                <div class="card-body pt-1 pb-1">
                    <form method="POST" action="route('admin-login')" wire:submit.prevent="submit" >
                        @csrf
                        <!-- Username -->
                        <label for="username" class="col-form-label text-md-end">{{ __('admin.username') }}</label>
                        <div class="input-group">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        </div>  
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- Password -->
                        <label for="password" class="col-form-label">{{ __('admin.password') }}</label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- Login -->
                        <div class="col-12 mt-3 mb-2">
                            <button type="submit" class="btn btn-dark form-control">
                                {{ __('admin.login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
