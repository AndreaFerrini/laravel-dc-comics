@extends( "layouts.app")

@section("title")
    laravel dc comics | Comics Show
@endsection

@section("content")
    <h1>Singolo Fumetto</h1>

    <div>
        <h3>{{ $comic->title }}</h3>
    </div>

@endsection