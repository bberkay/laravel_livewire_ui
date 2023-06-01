<div class="modal fade" id="giveAnswerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" wire:submit.prevent="submit">
            <div class="modal-header bg-dark pt-2 pb-2">
                <h5 class="modal-title text-light">
                    {{ __('admin.give_answer') }}
                </h5> 
                <button type="button" class = "btn btn-dark" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body" id = "modal-content">
                <div class="form-group">
                    <!-- Answer -->
                    <label for="answer">{{ __('admin.answer') }}</label>
                    <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" rows="3" name="answer" value="{{ old('answer') }}" wire:model="answer"></textarea>
                    @error('answer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Warning -->
                <div class = "text-center mt-1">
                    <small>This form is example, please edit <a target="_blank" href="https://github.com/bberkay/laravel_livewire_ui/blob/main/.env.example">.env </a> file for run.</small>
                </div>
            </div>
            <div class="modal-footer pt-1 pb-1">
                <!-- Submit Button -->
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('admin.cancel') }}</button>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
        </div>
    </div>
</div>  