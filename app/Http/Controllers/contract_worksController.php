<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contract_works_images;
class contract_worksController extends Controller
{
    
      public function contractworks()
      {
       $images= contract_works_images::get()->toArray();
        return view("contractWorks.contractWorks",compact('images')) ;
      }
      public function metal_works()
      {
       $images= contract_works_images::get()->toArray();
       return view("contractWorks.metal_works",compact('images')) ;
      }
      public function gybsum_works()
      {
       $images= contract_works_images::get()->toArray();
       return view("contractWorks.gybsum",compact('images')) ;
      }
      public function sanitary_works()
      {
       $images= contract_works_images::get()->toArray();
       return view("contractWorks.sanitary",compact('images')) ;
      }
      public function electrical_works()
      {
       $images= contract_works_images::get()->toArray();
       return view("contractWorks.electrical",compact('images')) ;
      }    
    
    }
  

