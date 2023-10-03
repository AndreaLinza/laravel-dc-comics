<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dati = Comic::all();
        return view('comics.index', ['comics' => $dati]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dati = Comic::findOrFail($id);

        return view('comics.show', ['comics' => $dati]);
    }


    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();


        $data = $request->validate ([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "required|string",
            "price" => "required|decimal:0,2",
            "series" => "required|string",
            "sale_date" => "required|date",
            "type" => "required|string",
            "artists" => "required|string",
            "writers" => "required|string",
        ]);
        $data["artists"] = json_encode([$data["artists"]]);
        $data["writers"] = json_encode([$data["writers"]]);

        $newComic = new Comic();

        // $newComic ['title'] = $data['title'];
        // $newComic ['description'] = $data['description'];
        // $newComic ['thumb'] = $data['thumb'];
        // $newComic ['price'] = $data['price'];
        // $newComic ['series'] = $data['series'];
        // $newComic ['sale_date'] = $data['sale_date'];
        // $newComic ['type'] = $data['type'];
        // $newComic ['artists'] = $data['artists'];
        // $newComic ['writers'] = $data['writers'];



        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('comics.index');
    }


    public function edit($id){
        $dati = Comic::findOrFail($id);
        return view('comics.edit', ['comics' => $dati]);
    }

    public function update(Request $request, $id){
        $dati = Comic::findOrFail($id);
        


        $data = $request->validate ([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "required|string",
            "price" => "required|decimal:0,2",
            "series" => "required|string",
            "sale_date" => "required|date",
            "type" => "required|string",
            "artists" => "required|string",
            "writers" => "required|string",
        ]);
        $data["artists"] = json_encode($data["artists"]);
        $data["writers"] = json_encode($data["writers"]);

        $dati->update($data);

        return redirect()->route('comics.show', $dati->id);

    }

    public function destroy($id){
        $dati = Comic::findorFail($id);

        $dati->delete();
        return redirect()->route('comics.index');
    }
}
