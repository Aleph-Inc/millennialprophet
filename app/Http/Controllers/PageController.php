<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Video;
use DB;
use Carbon\Carbon;

class PageController extends Controller
{
    

	/**
     * Get the fields for the home page by the resource.
     *
     * @param 
     * @return home view
     */
    public function home(Event $event){

    

        $event = $event->where('date', '>', date('Y-m-d'))->first();

        $eventdate = Carbon::parse($event->date);

        $diff = $eventdate->diffInDays();
        
        return view('pages/home',compact('event','diff'));

    
    }

    /**
     * Get the fields for the about page by the resource.
     *
     * @param 
     * @return about view
     */

     public function about(){


        return view('pages/about');
    
    }

     /**
     * Get the fields for the resources page by the resource.
     *
     * @param 
     * @return about resource
     */

     public function resources(Video $video){

        $videos = $video->orderBy('id','DESC')->get();;
        return view('pages/resource',compact('videos'));
    
    }


	/**
     * Get the fields for the minstry page by the resource.
     *
     * @param 
     * @return ministry view
     */

     public function ministries(){


        return view('pages/ministry');
    
    }

	/**
     * Get the fields for the event page by the resource.
     *
     * @param 
     * @return event view
     */

     public function events(Event $event){

        $events = $event->where('date', '>', date('Y-m-d'))->get();
        $active = 'live';
        return view('pages/event',compact('events','active'));

    }

      public function eventsPast(Event $event){

        $events = $event->where('date', '<', date('Y-m-d'))->get();
        $active ='past';
        return view('pages/event',compact('events','active'));

    }

    

    /**
     * Get the fields for the testimonials page by the resource.
     *
     * @param 
     * @return testimonial view
     */

     public function testimonials(){


        return view('pages/testimonial');
    
    }

     /**
     * Get the fields for the jesus page by the resource.
     *
     * @param 
     * @return jesus view
     */

     public function jesus(){


        return view('pages/jesus');
    
    }

     /**
     * Get the fields for the jesus page by the resource.
     *
     * @param 
     * @return jesus view
     */

     public function connect(){


        return view('pages/connect');
    
    }


     /**
     * Get the fields for the prayer_request page by the resource.
     *
     * @param 
     * @return prayer_request view
     */

     public function PrayerRequest(){


        return view('pages/prayer_request');
    
    }



     /**
     * Get the fields for the send_testimoney page by the resource.
     *
     * @param 
     * @return send_testimoney view
     */

     public function SendTestimoney(){


        return view('pages/send_testimoney');
    
    }



     /**
     * Get the fields for the donation page by the resource.
     *
     * @param 
     * @return donation view
     */

     public function donation(){


        return view('pages/donation');
    
    }



     /**
     * Get the fields for the build_chruch page by the resource.
     *
     * @param 
     * @return build_chruch view
     */

     public function BuildChruch(){


        return view('pages/build_chruch');
    
    }



     /**
     * Get the fields for the FreeWebsite page by the resource.
     *
     * @param 
     * @return free_website view
     */

     public function FreeWebsite(){


        return view('pages/free_website');
    
    }


     /**
     * Get the fields for the DigitalTraining page by the resource.
     *
     * @param 
     * @return digital_trainning view
     */

     public function DigitalTraining(){


        return view('pages/digital-training');
    
    }



     /**
     * Get the fields for the DigitalTraining page by the resource.
     *
     * @param 
     * @return digital_trainning view
     */

     public function Partner(){


        return view('pages/partner');
    
    }



     /**
     * Get the fields for the DigitalTraining page by the resource.
     *
     * @param 
     * @return digital_trainning view
     */

     public function Monthly(){


        return view('pages/monthly');
    
    }


     /**
     * Get the fields for the DigitalTraining page by the resource.
     *
     * @param 
     * @return digital_trainning view
     */

     public function Onetime(){


        return view('pages/one_time');
    
    }




}
