@extends( "layouts.app")

@section("title")
    laravel dc comics | Comics Create
@endsection

@section("content")
    <h1>Crea il Fumetto</h1>

    <form action=" {{ route( 'comics.store' ) }}" method="POST">
        @csrf

        <div class="form-group mt-3">
            <label class="form-label" for="">title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">thumb</label>
            <input class="form-control" type="text" name="thumb">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">price</label>
            <input class="form-control" type="number" name="price">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">series</label>
            <input class="form-control" type="text" name="series">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">sale_date</label>
            <input class="form-control" type="date" name="sale_date">
        </div>
        <div class="form-group mt-3">
            <label class="form-label" for="">type</label>
            <input class="form-control" type="text" name="type">
        </div>

        <button type="submit" class="btn btn-warning mt-3">Crea Fumetto</button>
    </form>
@endsection