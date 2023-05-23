@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('auth.verify') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('auth.verifyLink') }}
                        </div>
                    @endif

                    {{ __('auth.checkEmail') }}
                    {{ __('auth.notReceive') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('auth.anotherRequest') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
