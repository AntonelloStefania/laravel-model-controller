<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comics;

class PageController extends Controller
{
    public function index(){
        $comics = Comics::all();
        return view('comics.home', compact('comics'));
    }

    public function comic($id){
        $comic = Comics::find($id);

        return view('comics.comics', compact('comic'));
    }
}

