<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontenhomeController extends Controller
{
     public function home(){
        $allPost  = Post::all();
        // dd($allPost);
        return view('frontend.homepage',compact('allPost'));
     }
}
