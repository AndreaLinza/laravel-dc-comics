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
            return view('comics.index', ['comics'=>$dati]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dati = Comic::findOrFail($id);

        return view('comics.show', ['comics' => $dati]);

    }

}
