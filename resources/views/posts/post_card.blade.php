<x-card>
    <div class="flex justify-between py-2">
        <div class="flex">
            <img
                class="w-10 h-10 rounded-full mr-2"
                src="https://www.gravatar.com/avatar/{{ md5($post->user->email) }}">
            <div>
                <div class="text-xl">
                    <a href="{{ route('profile', $post->user) }}">
                    {{ $post->user->name }}
                    </a>
                </div>
                <div class="text-xs mt-0">{{ $post->created_at->diffForHumans() }}</div>
            </div>
        </div>
        <div class="text-sm">...</div>
    </div>
    <article>
        {{ $post->body }}
    </article>
    <footer>
        <div class="flex justify-between px-4 py-2">
            <div>Likes: 5</div>
            <div>7 comments</div>
        </div>
        <div class="flex justify-between py-2 px-4 border-t border-gray-400">
            <div>Like</div>
            <div>Comment</div>
            <div>Share</div>
        </div>
    </footer>
</x-card>
