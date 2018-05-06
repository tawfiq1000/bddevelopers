<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class postsController extends Controller
{
    public function index()
    {

    	return view('frontend.index');
    }

    public function show($id=null)
    {

    	return view('frontend.show');
    }
}
