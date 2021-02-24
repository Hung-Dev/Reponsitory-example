<h1>DANH SÁCH BÀI VIẾT</h1>
<a href="{{ route('see.create') }}">Tao bai viet</a>
@foreach($articles as $article)
        <div>
        <a href="#"> {{ $article -> id }} </a>
        {{ $article -> tenbaiviet }}
        </div>
@endforeach
        <div>{{ $articles->links() }}</div>