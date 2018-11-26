<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $homeslider = [];      
    $files = \File::files('img/home_slider');
    $lowestheight = 0;
    foreach ($files as $index => $path) {
        
        list($width, $height) = getimagesize($path);
        if($index === 0) {
            $lowestheight = $height;
        } else {
            $lowestheight = ($lowestheight > $height ? $height : $lowestheight);
        }
        $homeslider[] = pathinfo($path);
    }

    return view('welcome', compact('homeslider', 'lowestheight'));
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('overons', function () {
    return view('overons');
});
Route::get('workshops', function () {
    return view('workshops');
});
Route::get('naam', function () {
    return view('naam');
});
Route::get('bedrijfslogo', function () {
    return view('bedrijfslogo');
});
Route::get('custom', function () {
    return view('custom');
});

Route::get('projecten', 'ProjectController@all')->name('projecten');
Route::get('artiesten', 'ArtistController@all')->name('artiesten');
Route::get('project/{project}', 'ProjectController@single')->name('project');
Route::get('artist/{artist}', 'ArtistController@single')->name('artist');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('projects', 'ProjectController')->middleware('auth');
Route::resource('artists', 'ArtistController')->middleware('auth');
Route::post('delete/image', 'HomeController@deleteImage')->name('delete.image');