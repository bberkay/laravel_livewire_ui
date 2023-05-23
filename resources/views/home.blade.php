@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mt-3">
            <div class="row">
                <div class="col-md-6 col-12">
                    <!-- All Posts -->
                    <x-post.post-card name="test" title="Bilmem ne Filmi" description="Lorem ipsum dolar sit amet." type="Sci-Fi" author="By Nolan" card-type="song" image="https://picsum.photos/180/200"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
