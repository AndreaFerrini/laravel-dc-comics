<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::All();

        return view( "pages.comics.index", compact("comics") );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( "pages.comics.create" );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "title" => "required|max:40|unique:comics",
                "series" => "required"
            ],
            [
                "title.required" => "Il campo :attribute :input è richiesto",
                "title.max" => "Il campo title non deve superare i 40 caratteri",
                "title.unique" => "Il campo title non può avere il titolo di uno già esistente",
                "series.required" => "Il campo :attribute :input è richiesto",
            ]
        );


        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->fill($form_data);
     
        $newComic->save();

        return redirect()->route("comics.index")->with("success", "Congratulazioni hai creato un fumetto");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail( $id );

        return view( "pages.comics.show", compact("comic") );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view( 'pages.comics.edit', compact( 'comic' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update( $form_data);

        return redirect()->route( "comics.show", ["comic" => $comic->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
