<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\Gallery;
use App\Model\Question;
class HomeController extends Controller
{
    public function index()
    {
        $pageTitle = "الصفحه الرئيسيه" ;
        
        $news = News::all()->sortByDesc("id")->take(3);

        return view('front-end.index', compact(
            'news',
            'pageTitle'
           
        ));
    }
    public function news($id= null)
    {
        if($id == null )
        $news = News::paginate(8);
        else
        $news = News::findorfail($id);
        $pageTitle = "خبر المشروع" ;
       
        // return $news;
        if($id == null )
        return view('front-end.news', compact(
            'news',
            'pageTitle'
          
        ));
        else
        {
            return view('front-end.show_news', compact(
                'news',
                'pageTitle'
             
            ));
        }
    }
    public function show_news($id)
    {
        
        $news = News::findorfail($id);
        $pageTitle = "الصفحه الرئيسيه" ;
        return view('front-end.show_news', compact(
            'news',
            'pageTitle'
         
        ));
    }
    public function about()
    {
        $pageTitle = "عن المشروع" ;
        return view('front-end.about', compact(
            'news',
            'pageTitle'
         
        ));
    }
    public function timeline ()
    {
        $pageTitle = "الجدول الزمني" ;
        return view('front-end.timeline', compact(
            'news',
            'pageTitle'
         
        ));
    }
    public function gallery()
    {
        $image = Gallery::all()->sortByDesc("id")->take(1)->first();
       
        $images = Gallery::where('id' , '!=' , $image->id)->orderBy('id', 'DESC')->get();
        
        $pageTitle = "معرض الصور" ;
        return view('front-end.gallery', compact(
            'images',
            'image',
            'pageTitle'
         
        ));
    }
    public function faq ()
    {
        $faqs = Question::all()->sortByDesc("id");
        $pageTitle = "الاسئله الشائعه" ;
        return view('front-end.faq', compact(
            'faqs',
            'pageTitle'
         
        ));
    }
    public function not_found()
    {
        $pageTitle = "خطأ" ;
        return view('front-end.404', compact(
            'faqs',
            'pageTitle'
         
        ));
    }
}
