<?php

namespace App\Http\Controllers;

use App\Application;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Laravel',
            'applications' => [
                new Application('A', 'active'),
                new Application('B', 'inactive'),
            ],
            'cars' => Car::paginate(10),
        ]);
    }
}
