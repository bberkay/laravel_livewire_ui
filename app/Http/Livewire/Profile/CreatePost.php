<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class CreatePost extends Component
{   
    use WithFileUploads;

    public $title;
    public $description;
    public $type;
    public $post_type;
    public $author;
    public $photo;

    protected $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:3',
        'type' => 'required|min:3',
        'author' => 'required|min:3',
        'photo' => 'image|max:1024', // 1MB Max
    ];

    public function updated($field)
    {
        // Update the validation whenever a field is updated
        $this->validateOnly($field, $this->rules);
    }

    public function submit(){

        try{
            $this->validate($this->rules); // Validate the form

            $this->photo->store('public'); // Store the photo

            Post::create([
                'user_id' => Auth::user()->id,
                'title' => $this->title,
                'description' => $this->description,
                'author' => $this->author,
                'type' => $this->type,
                'post_type' => $this->post_type,
                'image' => $this->photo->hashName(),
            ]); // Save the contact form
            
            session()->flash('success', __('profile.success_post_message')); // Flash success message

        } catch (\Exception $e) {
            session()->flash('error', __('profile.error_post_message')); // Flash error message
        }
        finally{
            $this->reset(); // Reset the form
        }
    }

    public function render()
    {
        return view('livewire.profile.create-post');
    }
}
