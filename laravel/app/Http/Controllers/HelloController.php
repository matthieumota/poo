<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($name, Request $request)
    {
        dump($name, $request, $request->filter);

        return view('hello', [
            'name' => ucfirst($name),
        ]);
    }
}
