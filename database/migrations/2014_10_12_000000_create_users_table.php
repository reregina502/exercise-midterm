<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebControl extends Controller
{
    public function index()
    {
        return view ('home');
    }

    public function tampil($category = "")
    {
        if ($category == 'Technology') {
            $result = DB::select("SELECT * from posts where category = 'Technology'");
        } elseif ($category == 'Gaming') {
            $result = DB::select("SELECT * from posts where category = 'Gaming'");
        } elseif ($category == 'Life') {
            $result = DB::select("SELECT * from posts where category = 'Life'");
        } else {
            $result = DB::select("SELECT * from posts");
        }

        return view('home', ['posts' => $result]);
    }

    public function post($id = "")
    {
        $result = DB::select("select * from posts where id = $id");

        return view('post', ['posts' => $result]);
    }
}
