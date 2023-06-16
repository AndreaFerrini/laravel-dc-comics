@extends( "layouts.app")

@section("title")
    laravel dc comics | Comics Index
@endsection

@section("content")
    <h1>Tutti i fumetti</h1>

    @if(Session::has("success"))
        <div class="alert alert-success text-center">
            {!! Session::get( "success" ) !!}
        </div>
    @endif

    @forelse ($comics as $elem)
    <a href="{{ route( 'comics.show', [ 'comic' => $elem->id ] ) }}">
        <h6>{{ $elem->title }}</h6>
    </a>
    <a href="{{ route( 'comics.edit', $elem) }}" class="btn btn-success">Edit</a>
    <form action="{{ route('comics.destroy', $elem )}}" method="POST">
        @csrf
        @method("DELETE")

        <button type="submit" class="btn btn-danger">Cancel</button>
    </form>
    @empty
        <h2>Non ci sono risultati nel Database</h2>
    @endforelse


@endsection