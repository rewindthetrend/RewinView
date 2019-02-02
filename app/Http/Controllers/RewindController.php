<?php

namespace App\Http\Controllers;
use App\Post;
use App\Sports;
use Illuminate\Http\Request;

class RewindController extends Controller
{
    public function index()
    {
        $sports = Sports::all();
        $posts = Post::all();
        return view('frontend.index')->withSports($sports)->withPosts($posts);
    }
    public function blog()
    {
      $sports = Sports::all();
      return view('frontend.blog')->withSports($sports);
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function single($id)
    {
        $sports = Sports::find($id);
        return view('frontend.single')->withSports($sports);
    }
    public function technology()
    {
        return view('frontend.technology');
    }

    public function cryptoz()
    {
        return view('frontend.crypto');
    }
    public function gadjet()
    {
        return view('frontend.gadjet');
    }
    public function sportz()
    {
      $sports = Sports::all();
      $posts = Post::all();
      return view('frontend.sports')->withSports($sports)->withPosts($posts);
    }
}
