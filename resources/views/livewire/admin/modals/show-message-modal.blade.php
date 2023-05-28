<div class="modal fade" tabindex="-1" id = "showMessageModal" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark pt-2 pb-2">
        <h5 class="modal-title text-light">
          {{ $title }}
        </h5> 
        <button type="button" class = "btn btn-dark" data-bs-dismiss="modal" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
        </button>
      </div>
      <div class="modal-body">
        {{ $content }}
      </div>
      <div class="modal-footer pt-1 pb-1">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{ __('admin.close') }}</button>
      </div>
    </div>
  </div>
</div>  