<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Video;

class TestimonialController extends Controller
{
     /**
     * [this will view all the testimonial articles ]
     * @return [view] [testimonial_articles]
     */
     public function getArticles(Article $article)
     {
          $articles = $article->all();
          return response()->json(['success' => true, 'testimonial' => $articles]);
     }
     
     /**
     * [this will view all the testimonial articles ]
     * @return [view] [testimonial_articles]
     */
     public function getVideos(Video $video)
     {
          $videos = $video->all();
          return response()->json(['success' => true, 'testimonial' => $videos]);
     }
}
