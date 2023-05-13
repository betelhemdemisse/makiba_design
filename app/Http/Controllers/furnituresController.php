<?php

namespace App\Http\Controllers;
use App\Models\furniture_works_images;
use Illuminate\Http\Request;

class furnituresController extends Controller
{
  public function Bed()
  {
   $images= furniture_works_images::get()->toArray();
    return view("furnitures.bed",compact('images')) ;
  }
  public function Sofa()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.sofa",compact('images')) ;
  }
  public function Wardrop()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.wardrop",compact('images')) ;
  }
  public function Dinning_Table()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.dinning_table",compact('images')) ;
  }
  public function Tv_Stand()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.tv_stand",compact('images')) ;
  }
  public function Coffee_table()
  {
   $images= furniture_works_images::get()->toArray();
    return view("furnitures.coffee_table",compact('images')) ;
  }
  public function Shelf()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.shelf",compact('images')) ;
  }
  public function Office_Table()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.office_table",compact('images')) ;
  }
  public function Kitchen_Cabinet()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.kitchen_cabinet",compact('images')) ;
  }
  public function Order_Custom_Makiba_Furnitures()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.order_custom",compact('images')) ;
  }
  public function Furnitures()
  {
   $images= furniture_works_images::get()->toArray();
   return view("furnitures.furniture",compact('images')) ;
  }
}
