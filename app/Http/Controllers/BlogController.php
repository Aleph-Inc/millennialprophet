<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

	/**
	 * Get all blog articles
	 */
    public function all(){


    	   return view('pages/blog');

    }


    /**
	 * Get each blog articles
	 */
    public function getEach($id){


    	   return view('pages/article');

    }
    
}
