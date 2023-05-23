@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('contact.contact') }}</div>
                <div class="card-body pt-0">
                    <!-- Contact Form -->
                    <livewire:contact.contact-form />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
