<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Clients;
use App\Models\News;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Slider;
use App\Models\TeamWork;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index(){
        $sliders = Slider::where('status', '0')->get();
        $aboutus = AboutUs::first();
        $services = Services::where('status', '0')->take(3)->get();
        $teamwork = TeamWork::take(3)->get();
        $portfolio = Portfolio::take(8)->get();
        $news = News::take(6)->get();

        $testimonials = Testimonials::take(5)->get();
        $clients = Clients::take(8)->get();



        return view('welcome',compact('clients','sliders', 'aboutus', 'services', 'teamwork' , 'portfolio' ,'news', 'testimonials'));
     
    }


}
