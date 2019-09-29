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
    public function getResource($cat , Video $video)
    {
        if($cat == 'all')
        {
            $videos = $video->orderBy('id','DESC')->get();
            $latest = $video->orderBy('id','DESC')->first();
        }
        else
        {
            $videos = $video->where('category' , $cat )->orderBy('id','DESC')->get();
            $latest = $video->where('category' , $cat )->orderBy('id','DESC')->first();
        }

        return response()->json(['success' => true, 'videos' => $videos, 'latest' => $latest]);
	}    
}
