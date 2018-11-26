<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
  
    public function deleteImage(Request $request)
    {
        $image_path = $request->name;  // Value is not URL but directory file path
        if(File::exists($image_path)) {           
            File::delete($image_path);
        }
        return redirect()->back();
    }
}
