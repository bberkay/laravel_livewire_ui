@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            @if (Auth::check())
                <p>{{ __('home.logged_in') }}</p>
            @endif
        </div>
        <div class="col-12 mt-3">
            <div class="row">
                <div class="col-md-6 col-12">
                    <x-home.test message="test"/>
                    <x-home.home-card user_name = "John Doe" user_image = "https://picsum.photos/20/20" card_type = "movie" title = "Special title treatment" description = "With supporting text below as a natural lead-in to additional content." author = "By Nolan" type = "Sci-Fi" image = "https://picsum.photos/180/200"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
