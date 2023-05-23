<div>
    <div class="row">
        <!-- Get Posts of user with user_id -->
        @foreach ($posts as $post)
            <div class="col-md-6 col-12">
                <x-post.post-card name="{{ Auth::user()->name }}" title="{{ $post->title }}" description="{{ $post->description }}" type="{{ $post->type }}" author="{{ $post->author }}" card-type="{{ $post->post_type }}" image="{{ asset('storage/'.$post->image) }}" date="{{$post->created_at->format('Y-m-d H:i:s')}}"/>
            </div>
        @endforeach
    </div>
</div>