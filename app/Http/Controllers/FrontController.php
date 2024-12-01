<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        return view('front.index',[
            'title' => 'Home',
            'categories' => Category::take(12)->get()
        ]);
    }
}
