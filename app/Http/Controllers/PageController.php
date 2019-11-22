<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Video;
use App\Home;
use App\About;
use App\Jesus;
use App\Partner;
use App\BuildChruch;
use App\FreeWebsite;
use App\DigitalTraining;
use DB;
use Mail;
use Carbon\Carbon;

use App\Mail\SendMailable;

class PageController extends Controller
{
    

	/**
     * Get the fields for the home page by the resource.
     *
     * @param 
     * @return home view
     */
    public function home(Event $event, Home $home){

        $home = $home->first();

        $event = $event->where('date', '>', date('Y-m-d'))->first();

        if ($event == null) {
            
        $diff = 0;  


        }else{

        $eventdate = Carbon::parse($event->date);

        $diff = $eventdate->diffInDays();
        }

       
        
        return view('pages/home',compact('event','diff','home'));

    
    }

    /**
     * Get the fields for the about page by the resource.
     *
     * @param 
     * @return about view
     */

     public function about(About $about){

        $about = $about->first();

        return view('pages/about',compact('about'));
    
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

    public function eventsNew(Event $event){

        $events = $event->where('date', '>', date('Y-m-d'))->get();
        $active ='new';
        return response()->json(['success' => true, 'events' => $events, 'active' => $active]);

    }

    public function eventsPast(Event $event){

        $events = $event->where('date', '<', date('Y-m-d'))->get();
        $active ='past';
        return response()->json(['success' => true, 'events' => $events, 'active' => $active]);

    }

    

    /**
     * Get the fields for the testimonials page by the resource.
     *
     * @param 
     * @return testimonial view
     */

     public function testimonials(){

        $testimonials = Video::all();
        return view('pages/testimonial', compact('testimonials'));
    
    }

     /**
     * Get the fields for the jesus page by the resource.
     *
     * @param 
     * @return jesus view
     */

     public function jesus(Jesus $jesus){

        $jesus = $jesus->first();

        return view('pages/jesus',compact('jesus'));
    
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

     public function BuildChruch(BuildChruch $buildChruch){

        $buildChruch = $buildChruch->first();
        
        return view('pages/build_chruch',compact('buildChruch'));
    
    }



     /**
     * Get the fields for the FreeWebsite page by the resource.
     *
     * @param 
     * @return free_website view
     */

     public function FreeWebsite(FreeWebsite $freeWebsite){

        $freeWebsite = $freeWebsite->first();

        return view('pages/free_website',compact('freeWebsite'));
    
    }


     /**
     * Get the fields for the DigitalTraining page by the resource.
     *
     * @param 
     * @return digital_trainning view
     */

     public function DigitalTraining(DigitalTraining $digitalTraining){

        $digitalTraining = $digitalTraining->first();

        return view('pages/digital-training',compact('digitalTraining'));
    
    }



     /**
     * Get the fields for the DigitalTraining page by the resource.
     *
     * @param 
     * @return digital_trainning view
     */

     public function Partner(Partner $partner){

        $partner = $partner->first();

        return view('pages/partner',compact('partner'));
    
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


     /**
     * Get the fields for the inquires page by the resource.
     *
     * @param 
     * @return inquires view
     */

     public function inquires(){


        return view('pages/general_inquires');
    
    }

    /**
     * Get the fields for the inquires page by the resource.
     *
     * @param 
     * @return inquires view
     */

     public function confess(){


        return view('pages/confess');
    
    }

    /**
     * Get the fields for the inquires page by the resource.
     *
     * @param 
     * @return inquires view
     */

    

      public function sendMail(Request $request)
    {
        if($request->get('type') == 'testi'){

            $subject = "Testimonials!";

        }
        if($request->get('type') == 'prayer'){
            
            $subject = "Prayer Request!";

        }
        if($request->get('type') == 'general'){
            
            $subject = "General inquires!";

        }

            $details = $request->all();

            Mail::send('email.newemail',['details' => $details ,'subject' =>$subject ], function ($m) use ($details,$subject){
            $m->from($details['email'], $subject);
            $m->to('ruchira@sevensigns.lk', 'Millennial Prophet Ministries')->subject($subject);
        });

        return response()->json(['success'=>'Email sent successfully!']);

    }

}
