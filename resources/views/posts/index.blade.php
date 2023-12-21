<!-- resources/views/posts/index.blade.php -->

<h1>Posts</h1>

<a href="{{ route('posts.create') }}">Create Post</a>

<ul>
    @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </li>
    @endforeach
</ul>
