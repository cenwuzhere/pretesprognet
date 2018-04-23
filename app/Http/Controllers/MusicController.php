<?php

namespace App\Http\Controllers;

use App\music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics=music::all();
        return view('music.index',compact('musics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(music $music)
    {
        $musics = music::find($music->id);
        return view('music.edit',compact('musics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, music $music)
    {
        $data = [
            'title' => $request->title,
            'genre' => $request->genre,
            'singer' => $request->singer,
            'song_writer' => $request->song_writer,
            'updated_at' => date("Y-m-d H:i:s")
        ];
        music::where('id', $music->id)->update($data);
        return redirect('music');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(music $music)
    {
        //
    }
}
