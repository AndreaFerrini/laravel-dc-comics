@extends( "layouts.app")

@section("title")
    laravel dc comics | Comics Index
@endsection

@section("content")
    <h1>Tutti i fumetti</h1>

    @forelse ($comics as $elem)
    <a href="{{ route( 'comics.show', [ 'comic' => $elem->id ] ) }}">
        <h6>{{ $elem->title }}</h6>
    </a>
    <a href="{{ route( 'comics.edit', $elem) }}" class="btn btn-danger">Edit</a>
    @empty
        <h2>Non ci sono risultati nel Database</h2>
    @endforelse


@endsection