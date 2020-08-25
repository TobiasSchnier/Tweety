<?php

use Illuminate\Support\Facades\Route;
// richtig gutes Tool, um zu gucken, was die Datenbankabfrage tut
// DB::listen(function($query){var_dump($query->sql, $query->bindings);});

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
    return view('welcome');
});

Route::middleware('auth')->group(function(){
  Route::get('/tweets', 'TweetsController@index')->name('home');
  Route::post('/tweets', 'TweetsController@store');

  Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
  Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');
  Route::test('/tweets/{tweet}/like', 'TweetLikesController@destroy');


  Route::post('/profiles/{user:username}/follow', 'FollowsController@store')->name('follow');
  Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')
    ->middleware('can:edit,user');

  Route::patch('/profiles/{user:username}', 'ProfilesController@update')
    ->middleware('can:edit,user');

  Route::get('/explore', 'ExploreController');

  Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');


Auth::routes();
