<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Template;
use Laravel\Nova\Fields\Textarea;

class Jesus extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            
            Textarea::make('What jesus did to us', 'whatjesus'),

            Textarea::make('Middle text', 'middle'),


            Textarea::make('His Heart To Heal You', 'hisheal'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }
}