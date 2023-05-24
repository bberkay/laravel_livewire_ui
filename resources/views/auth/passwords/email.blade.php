@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('passwords.reset') }}</div>

                <div class="card-body pt-1">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="col-12">
                            <label for="email" class="col-form-label text-md-end">{{ __('auth.email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-dark form-control">
                                {{ __('passwords.resetLink') }}
                            </button>
                        </div>
                    </form>
                    <!-- Warning -->
                    <div class = "text-center mt-1">
                        <small>This form is example, please edit <a target="_blank" href="https://github.com/bberkay/laravel_livewire_ui/blob/main/.env.example">.env </a> file for run.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
