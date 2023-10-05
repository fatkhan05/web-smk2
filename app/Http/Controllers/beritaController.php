<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => berita::all()
        ]);
    }
    public function find($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => berita::find($slug)
            ]);
           
    }
}
