<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{

    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $posts = Post::latest()->paginate($this->perPage);

        return view('livewire.post-list', [
            'posts' => $posts
        ]);
    }
}
