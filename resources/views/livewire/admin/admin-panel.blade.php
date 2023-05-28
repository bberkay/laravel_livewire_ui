<div>
    <!-- Flash Messages -->
    @if (session()->has('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('success') }}
    </div>
    @elseif (session()->has('error'))
    <div class="alert alert-danger mt-3" role="alert">
        {{ session('error') }}
    </div>
    @endif        

    <!-- Buttons -->
    <div class="d-flex justify-content-center mb-5">
        <div class = "hstack gap-3">
            <button class = "btn btn-success" wire:click = "showAnswered">{{ __('admin.show_answered') }}</button>
            <button class = "btn btn-primary" wire:click = "showUnanswered">{{ __('admin.show_unanswered') }}</button>
        </div>
    </div>  

    <!-- Search -->

    <!-- Show Contact Table -->
    <livewire:admin.contact-table/>
    
    <!-- Modals -->
    <livewire:admin.modals.show-message-modal/>
    <livewire:admin.modals.give-answer-modal/>

    <!-- Pagination -->
</div>
