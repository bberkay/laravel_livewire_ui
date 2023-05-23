@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('contact.contact') }}</div>
                <div class="card-body pt-0">
                    <!-- Contact Form -->
                    <livewire:contact-form />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
