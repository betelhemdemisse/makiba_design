<?php

namespace App\Http\Controllers;
use App\Models\home_images;
use Illuminate\Http\Request;
use App\Models\portfolio_images;
use DB;
class HomePageController extends Controller
{
    public function home()
    {
     $images= home_images::get()->toArray();
     //dd($images);
        return view("home",compact('images')) ;
    }
    public function contact()
    {
        return view("contact");
    }
    public function portfolio()
    { 
        $images= portfolio_images::get()->toArray(); 
        return view("portfolio",compact('images')) ;

    }
}
