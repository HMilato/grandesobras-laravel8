<h1>Good good</h1>

<a href="{{ route('posts.create')}}"><button class="btn-novo-post">Novo Post</button></a>

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach