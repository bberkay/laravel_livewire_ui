<div>
    <div class="row">
        <div class="w-50 mx-auto">
            <!-- Realtime Search -->
            <input type="text" wire:model="search" class="form-control" placeholder="{{ __('profile.search_post') }}" style="background-color:#fff">
        </div>    
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-12 mt-3">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-6 col-12">
                    <!-- All Posts -->
                    <x-post.post-card userid="{{ $post->user_id }}" title="{{ $post->title }}" description="{{ $post->description }}" type="{{ $post->type }}" author="{{ $post->author }}" card-type="{{ $post->post_type }}" image="{{ asset('storage/'.$post->image) }}" date="{{$post->created_at->format('Y-m-d H:i:s')}}"/>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
    <!-- Realtime Pagination -->
    <div class="row mt-3">
        <div class="d-flex justify-content-center">
        {{ $posts->links() }}
        </div>
    </div>
</div>