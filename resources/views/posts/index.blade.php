@foreach ($posts as $post)
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
@endforeach

@can('create-post')
    <a href="{{ route('posts.create') }}">Create Post</a>
@endcan