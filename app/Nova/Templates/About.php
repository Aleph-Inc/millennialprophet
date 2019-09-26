<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Template;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Trix;

use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;

class About extends Template {

    use HasFlexible;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {


        return [
            Text::make('Title of the page', 'title'),

            Trix::make('Who We are', 'whoweare'),

            Trix::make('What jesus did to us', 'whatjesus'),

            Trix::make('His Heart To Heal You', 'hisheal'),

            Trix::make('Ministries', 'ministries'),


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