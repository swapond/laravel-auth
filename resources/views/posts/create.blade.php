<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="body" placeholder="Body"></textarea>
    <button type="submit">Create</button>
</form>