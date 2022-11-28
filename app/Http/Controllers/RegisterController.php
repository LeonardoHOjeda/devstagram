<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
      return view('auth.register');
    }

    public function store(Request $request)
    {
      // Validacion
      $this->validate($request, [
        'name' => 'required|max:30',
        'username' => '',
      ]);
    }
}
