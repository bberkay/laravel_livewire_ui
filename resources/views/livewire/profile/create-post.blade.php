<form method="POST" wire:submit.prevent="submit" action="route('create-post')">
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

    <div class="mx-auto col-4">
        <div class="card">
            <div class="card-header bg-dark text-light">{{ __('profile.create_post') }}</div>
            <div class="card-body pt-1">
                <div class="d-flex flex-column">
                    <div>
                        <!-- Title -->
                        <label for="title" class="col-form-label text-md-end">{{ __('profile.title') }}</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" wire:model="title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class = "mt-1">
                        <!-- Description -->
                        <label for="description" class="col-form-label text-md-end">{{ __('profile.description') }}</label>
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" wire:model="description">
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <!-- Author -->
                        <label for="author" class="col-form-label text-md-end">{{ __('profile.author') }}</label>
                        <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" wire:model="author">
                        @error('author')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <!-- Type -->
                        <label for="type" class="col-form-label text-md-end">{{ __('profile.type') }}</label>
                        <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" wire:model="type">
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <!-- Post Type -->
                        <label for="post_type" class="col-form-label text-md-end">{{ __('profile.post_type') }}</label>
                        <select class="form-select" aria-label="Default select example" name="post_type" wire:model="post_type">
                            <option selected value = "game">{{ __('profile.game') }}</option>
                            <option value="book">{{ __('profile.book') }}</option>
                            <option value="song">{{ __('profile.song') }}</option>
                            <option value="movie">{{ __('profile.movie') }}</option>
                        </select>
                    </div>
                    <div class = "mt-1">
                        <!-- Photo -->
                        <label for="photo" class="col-form-label text-md-end">{{ __('profile.image') }}</label>
                        <input class="form-control" type="file" id="photo" wire:model="photo">
                        @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if ($photo)
                        <!-- Preview -->
                        <div class="mt-1">
                            <label for="photo" class="col-form-label text-md-end">{{ __('profile.preview') }}</label>
                            <br>
                            <img src="{{ $photo->temporaryUrl() }}" width = "180px" height = "200px">                 
                        </div>
                    @endif

                    <!-- Create Post Button -->
                    <button class = "btn btn-dark mt-3" type = "submit">
                        {{ __('profile.create_post') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>