<div>
    <div class="d-flex justify-content-center mb-5">
        <div class = "hstack gap-3">
            <button class = "btn btn-success" wire:click = "showAnswered">{{ __('admin.show_answered') }}</button>
            <button class = "btn btn-primary" wire:click = "showUnanswered">{{ __('admin.show_unanswered') }}</button>
        </div>
    </div>

    <!-- FIXME: second parameter not pass -->
    <livewire:admin.contact-messages :data="$data"/>
</div>
