<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortUserController extends Controller
{
    public function index()
    {
        $links = auth()->user()->shortUrls;
        return view('links.index',compact('links'));
    }
}
