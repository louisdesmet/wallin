<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $artists = Artist::all();
        return view('artist.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $artist = new Artist;
        $artist->title = $request->title;
        $artist->text = $request->text;
        $artist->save();
        return redirect()->route('artists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist) {
        $images = [];
        $path = 'img/artists/' . $artist->id;
        $filenames = [];
        if(\File::exists($path)) {
            $files = \File::files($path);
            
            foreach ($files as $index => $path) {
                $images[] = pathinfo($path);
                $filenames[$images[$index]['basename']] = $images[$index]['basename'];

            }
        }
        return view('artist.edit', compact('artist', 'images', 'filenames')); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist) {
        $validatedData = $request->validate([
            'title' => 'required|max:255'
        ]);
        
        
        $new = Artist::findOrFail($artist->id);     
        $new->title = $request->title;
        $new->text = $request->text;
       
        $new->featured_image = $request->featured_image[0];
        
        if($files = $request->file('file')) {
            $destinationPath = 'img/artists/' . $artist->id;
            foreach($files as $file) {
                $file->move($destinationPath, $file->getClientOriginalName());
            }
        }
        $new->save();
        return redirect()->route('artists.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist) {
        //
    }

    public function all() {
        $artists = Artist::all();
        return view('artiesten', compact('artists'));
    }
    
    public function single(Artist $artist) {   
        $firstblocks = [];
        $secondblocks = [];
        $firstblockamount;
        if(strlen($artist->text) < 400) {
            $firstblockamount = 2;
        } else if(strlen($artist->text) < 800) {
            $firstblockamount = 4;
        } else {
            $firstblockamount = 6;
        }
        $files = \File::files('img/artists/' . $artist->id);
        foreach ($files as  $index => $path) {
            if($index < $firstblockamount) {
                $firstblocks[] = pathinfo($path);
            } else {
                $secondblocks[] = pathinfo($path);
            }
            
        }
        return view('artist', compact('artist', 'firstblocks', 'secondblocks'));       
    }

}
