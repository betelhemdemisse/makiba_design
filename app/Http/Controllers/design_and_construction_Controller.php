<?php

namespace App\Http\Controllers;
use App\Models\design_and_construction_works_images;
use Illuminate\Http\Request;

class design_and_construction_Controller extends Controller
{
    public function Residential_Design()
    {
     $images= design_and_construction_works_images::get()->toArray();
    return view("design_and_construction.residential_design",compact('images')) ;
    }
    public function Commercial_Design()
    {
     $images= design_and_construction_works_images::get()->toArray();
    return view("design_and_construction.commercial_design",compact('images')) ;
    }
    public function Modeling_Rendering()
    {
     $images= design_and_construction_works_images::get()->toArray();
    return view("design_and_construction.3d_modeling_rendering",compact('images')) ;
    }
    public function design_and_construction()
    {
     $images= design_and_construction_works_images::get()->toArray();
    return view("design_and_construction.design_and_construction",compact('images')) ;
    }
   
}
