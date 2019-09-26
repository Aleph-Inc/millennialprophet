<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class ResourceController extends Controller
{
    

    /**
     * [this will get all the videos per catergory]
     * @return [int] [videoid]
     */
    public function getResource($cat , Video $video){




    	   $videos = $video->where('category' , $cat )->orderBy('id','DESC')->get();

    	   $latest = $video->where('category' , $cat )->orderBy('id','DESC')->first();



    	   return view('pages/resource_each',compact('videos','latest'));

	}    
}
