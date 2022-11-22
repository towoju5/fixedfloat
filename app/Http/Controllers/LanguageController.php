<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($locale)
    {
        // available language in template array
        $availLocale = ['en', 'fr', 'de', 'pt', 'es'];
        // check for existing language
        if (in_array($locale, $availLocale)) {
            app()->setLocale($locale);
            session()->put('locale', $locale);
            return redirect()->back()->with('message', __('Language update successfully'));
        }
        return redirect()->back()->with('message', __('Unable to switch language'));
    }
}
