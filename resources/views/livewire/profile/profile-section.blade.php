<div>
    <div class="d-flex justify-content-center">
        <div class="hstack gap-3">
            <button class = "btn btn-dark" wire:click="toggleProfile">{{ __('profile.show_profile') }}</button>
            <div class="vr"></div>
            <button class = "btn btn-primary" wire:click="toggleCreatePost">{{ __('profile.create_post') }}</button>
            <button class = "btn btn-warning" wire:click="togglePosts">{{ __('profile.show_posts') }}</button>
        </div>
    </div>
    <div class="mt-5">
        @if ($showPosts)
            <x-profile.show-posts />
        @elseif ($showCreatePost)
            <livewire:profile.create-post />
        @elseif ($showProfile)
            <livewire:profile.profile-form />
        @endif
    </div>
</div>