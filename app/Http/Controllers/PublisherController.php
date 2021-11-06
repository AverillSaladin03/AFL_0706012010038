<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publishers = Publisher::all();
        return view('publisher', [
            "title" => 'Publisher',
            "pageTitle" => 'Publisher Data'
        ], compact('publishers'));
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
        $title = "Add Publisher";
        $pageTitle = "Add Publisher";
        return view('publishercreate', compact('title', 'pageTitle', 'publishers'));
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
        Publisher::create([
            'publisher_code' => "pbl_".$request->publisher_code,
            'publisher_name' => $request->publisher_name,
            'publisher_kanji' => $request->publisher_kanji,
            'publisher_romaji' => $request->publisher_romaji,
            'publisher_address' => $request->publisher_address,
            'publisher_site' => $request->publisher_site,
            'publisher_created_date' => $request->publisher_created_date,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return redirect(route('publishers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $publishers = Publisher::where('publisher_code', $code)->first();
        $title = "Publisher Detail";
        $pageTitle = $publishers->publisher_name."'s Details";
        return view('publisherdesc', compact('title', 'pageTitle', 'publishers'));
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
        $publishers = Publisher::findOrFail($code);
        $title = "Edit Publisher";
        $pageTitle = "Edit ". $publishers->publisher_name ."'s Data";
        return view('publisheredit', compact('title', 'pageTitle', 'publishers'));
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
        $publishers = Publisher::where('publisher_code', $code);

        $publishers->update([
            'publisher_code' => $request->publisher_code,
            'publisher_name' => $request->publisher_name,
            'publisher_kanji' => $request->publisher_kanji,
            'publisher_romaji' => $request->publisher_romaji,
            'publisher_address' => $request->publisher_address,
            'publisher_site' => $request->publisher_site,
            'publisher_created_date' => $request->publisher_created_date,
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return redirect(route('publishers.index'));

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
        $publishers = Publisher::findOrFail($code);
        $publishers->delete();
        return redirect(route('publishers.index'));
    }
}
