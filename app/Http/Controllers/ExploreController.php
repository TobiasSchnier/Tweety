<?php

namespace App\Http\Controllers;

use App\User;

class ExploreController extends Controller
{
    public function __invoke() // if there is only one thing in the controller, invoke it, you dont have to use @index in the routes file
    {
      return view('explore', [
        'users'=>User::paginate(5)
      ]);
    }
}
