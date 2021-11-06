<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Models\Publisher;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangas = Manga::all();
        return view('manga', [
            "title" => 'Manga',
            "pageTitle" => 'Manga Collection'
        ], compact('mangas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $publishers = Publisher::all();
        $title = "Add Manga";
        $pageTitle = "Add Manga";
        return view('mangacreate', compact('title', 'pageTitle', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Manga::create([
            'manga_code' => "mng_".$request->manga_code,
            'manga_title' => $request->manga_title,
            'manga_kanji' => $request->manga_kanji,
            'manga_author' => $request->manga_author,
            'manga_release_date' => $request->manga_release_date,
            'published_at' => $request->published_at
        ]);
        return redirect(route('mangatachi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        //
        $mangas = Manga::where('manga_code', $code)->first();
        $title = "Manga Detail";
        $pageTitle = $mangas->manga_title."'s Detail";

        return view('mangadesc', compact('mangas', 'title', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        //
        $manga = Manga::findOrFail($code);
        $publishers = Publisher::all();
        $title = "Edit Manga";
        $pageTitle = "Edit ".$manga->manga_title;
        return view('mangaedit', compact('title', 'pageTitle', 'manga', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        //
        $manga = Manga::where('manga_code', $code)->first();
        $manga->update([
            'manga_code' => $request->manga_code,
            'manga_title' => $request->manga_title,
            'manga_kanji' => $request->manga_kanji,
            'manga_author' => $request->manga_author,
            'manga_release_date' => $request->manga_release_date,
            'published_at' => $request->published_at
        ]);
        return redirect(route('mangatachi.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        //
        $manga = Manga::findOrFail($code);
        $manga->delete();
        return redirect(route('mangatachi.index'));
    }
}
