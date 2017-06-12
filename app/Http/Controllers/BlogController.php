<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
//       echo  route('index');
    }

    public function list()
    {
        return view('blog.list');
    }
    public function login()
    {
//       echo url('blog/login');
//       echo route('login111');
        return view('blog.login');
    }
    public function show()
    {
        return view('blog.show');
    }

}
