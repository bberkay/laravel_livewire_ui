<form method="POST" wire:submit.prevent="submit" action="route('contact-form')">
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

    <!-- Form -->
    @csrf
    <div class="col-12">
        <!-- Name -->
        <label for="name" class="col-form-label text-md-end">{{ __('auth.name') }}</label>
        @if(Auth::check())
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" readonly>
        @else
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" wire:model = "name" autofocus>
        @endif
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-12">
        <!-- Email -->
        <label for="email" class="col-form-label text-md-end">{{ __('auth.email') }}</label>
        @if(Auth::check())
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" readonly>
        @else
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" wire:model = "email" autofocus>
        @endif
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>     
    <div class="col-12">
        <!-- Subject -->
        <label for="subject" class="col-form-label text-md-end">{{ __('contact.subject') }}</label>
        <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" autocomplete="subject" wire:model = "subject" autofocus>
        @error('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-12">
        <!-- Message -->
        <label for="message" class="col-form-label text-md-end">{{ __('contact.message') }}</label>
        <textarea class="form-control @error('subject') is-invalid @enderror" name="message" id="message" rows="3" autocomplete="message" autofocus wire:model = "message">{{ old('message') }}</textarea>
        @error('message')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-12 mt-3">
        <!-- Submit Button -->
        <button type="submit" class="btn btn-dark form-control">
            {{ __('contact.send') }}
        </button>
    </div>  
    <!-- Warning -->
    <div class = "text-center mt-1">
        <small>This form is example, please edit <a target="_blank" href="https://github.com/bberkay/laravel_livewire_ui/blob/main/.env.example">.env </a> file for run.</small>
    </div>
</form>