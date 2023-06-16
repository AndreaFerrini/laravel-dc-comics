@extends( "layouts.app")

@section("title")
    laravel dc comics | Comics Edit
@endsection

@section("content")
    <h1>Modifica il Fumetto</h1>

    <form action=" {{ route( 'comics.update', $comic ) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group mt-3">
            <label class="form-label" for="">title</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') ?? $comic->title }}">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description') ?? $comic->description }}"</textarea>
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">thumb</label>
            <input class="form-control" type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">price</label>
            <input class="form-control" type="number" name="price" value="{{ old('price') ?? $comic->price }}">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">series</label>
            <input class="form-control" type="text" name="series" value="{{ old('series') ?? $comic->series }}">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">sale_date</label>
            <input class="form-control" type="date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">type</label>
            <input class="form-control" type="text" name="type" value="{{ old('type') ?? $comic->type }}">
        </div>

        <button type="submit" class="btn btn-success mt-3">Conferma</button>
    </form>
@endsection