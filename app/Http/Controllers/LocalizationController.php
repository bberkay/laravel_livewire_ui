<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // 
    }

    /**
     * Set the application locale.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function setLanguage($locale = null)
    {
        // Set the locale
        if ($locale && in_array($locale, config('app.available_locales'))){ // If the locale is set and it is in the available_locales array
            session()->put('locale', $locale);
        }
        else if (session()->has('locale')){ // If the locale is not set, but the session has a locale
            $locale = session()->get('locale');
        }
        else{ // If the locale is not set and the session does not have a locale
            $locale = config('app.fallback_locale');
            session()->put('locale', $locale);
        }
            
        return redirect()->back(); // Redirect back to the previous page
    }
}
