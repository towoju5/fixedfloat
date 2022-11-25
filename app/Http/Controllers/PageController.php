<?php

namespace App\Http\Controllers;

use App\Models\Page;
use BinshopsBlog\Models\BinshopsLanguage;
use BinshopsBlog\Models\BinshopsPost;
use BinshopsBlog\Models\BinshopsPostTranslation;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page($page)
    {
        $data = Page::where('title', $page)->first();
        if(empty($data)){
            $data = [
                'title' =>  $page,
                'body'  =>  'Page Not Found!'
            ];
        }
        return view('about', compact('data'));
    }

    public function blog()
    {
        $getLangId = BinshopsLanguage::where('locale', session('locale'))->first();
        $lang = $getLangId->id ?? 1;
        $data = BinshopsPostTranslation::where('lang_id', 1)->paginate(12);
        return view('blog', compact('data'));
    }
}
