<x-app-layout>
{{ $user->name }}
    @foreach($posts as $post)
        <div class="mb-4">
            @include('posts.post_card')
        </div>
    @endforeach
</x-app-layout>
