@extends( "layouts.app")

@section("title")
    laravel dc comics | Comics Index
@endsection

@section("content")
    <h1>Tutti i fumetti</h1>

    @forelse ($comics as $elem)
        <h6>{{ $elem->title }}</h6>
    @empty
        <h2>Non ci sono risultati nel Database</h2>
    @endforelse

    
@endsection