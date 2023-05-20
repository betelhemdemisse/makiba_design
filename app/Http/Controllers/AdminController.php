<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Closure;
use Cache;
use App\Models\Admin;
use \Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\home_images;
use App\Models\portfolio_images;
use App\Models\contract_works_images;
use App\Models\design_and_construction_works_images;
use App\Models\furniture_works_images;

class AdminController extends Controller
{
   public function index()
   {
    return view("Admin.login");
   }
      
   public function home(){
   if(Auth::guard('admin')->check()){
   
     return redirect()->route("admin.portfolio");
           }
      else{
          return redirect()->route("admin.portfolio");
     }
}
public function setting()
{
  if(Auth::guard('admin')->check()){
    return view("Admin.change_new_password");
  }
}
public function change(Request $request)
{
 //dd($request);
    $request->validate([
        'password'=>'required|min:4|max:30',
       'newpassword'=>'required|min:4|max:30',
        'confirmpassword'=>'same:newpassword',
   ],[
       'password.required'=>"Please insert Password",
      'newpassword.required'=>"Please insert Password",
       'confirmpassword.required'=>"Please insert Password",
   ]);
$auth=auth()->user()->password;
dd($auth);
   if(!Hash::check($request->password, auth()->user()->password)){
    return redirect()->route("admin.setting"); 
}
Admin::whereId(auth()->user()->id)->update([
  'password' => Hash::make($request->newpassword)
]);
    }
 
 
public function logout()
{
   Auth::guard('admin')->logout();
    return redirect()->route("admin.home");
}
public function login(Request $request)
   {
     //  dd($request);
       $request->validate([
           'email'=>'required|min:7|max:30|exists:admins,email',
           'password'=>'required|min:4|max:30',
       ],
       ['email.required'=>"Please insert email.",
       'password.required'=>"Please insert Password.",
       'email.exists'=>"email or Password is error.",    
   ]);
       $creds=$request->only("email","password");
       //dd($creds);
        if(Auth::guard("admin")->attempt($creds)){
      //dd($creds);
        return redirect()->route("admin.portfolio");
        }
       return redirect()->route("admin.index")->with("fail","Admin or password error"); 
   }
   public function contractworks()
   {
    $images= contract_works_images::get()->toArray();
     return view("Admin.contractWorks",compact('images')) ;
   }
   public function metal_works()
   {
    $images= contract_works_images::get()->toArray();
    return view("Admin.metal_works",compact('images')) ;
   }
   public function gybsum_works()
   {
    $images= contract_works_images::get()->toArray();
    return view("Admin.gybsum",compact('images')) ;
   }
   public function sanitary_works()
   {
    $images= contract_works_images::get()->toArray();
    return view("Admin.sanitary",compact('images')) ;
   }
   public function electrical_works()
   {
    $images= contract_works_images::get()->toArray();
    return view("Admin.electrical",compact('images')) ;
   }  
   public function Residential_Design()
   {
    $images= design_and_construction_works_images::get()->toArray();
   return view("Admin.residential_design",compact('images')) ;
   }
   public function construction()
   {
    $images= design_and_construction_works_images::get()->toArray();
    return view("Admin.design_and_construction",compact('images')) ;
   }
   
   public function Commercial_Design()
   {
    $images= design_and_construction_works_images::get()->toArray();
   return view("Admin.commercial_design",compact('images')) ;
   }
   public function Modeling_Rendering()
   {
    $images= design_and_construction_works_images::get()->toArray();
   return view("Admin.3d_modeling_rendering",compact('images')) ;
   }
 
   public function Bed()
   {
    $images= furniture_works_images::get()->toArray();
     return view("Admin.bed",compact('images')) ;
   }
   public function Sofa()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.sofa",compact('images')) ;
   }
   public function Wardrop()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.wardrop",compact('images')) ;
   }
   public function Dinning_Table()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.dinning_table",compact('images')) ;
   }
   public function Tv_Stand()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.tv_stand",compact('images')) ;
   }
   public function Coffee_table()
   {
    $images= furniture_works_images::get()->toArray();
     return view("Admin.coffee_table",compact('images')) ;
   }
   public function Shelf()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.shelf",compact('images')) ;
   }
   public function Office_Table()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.office_table",compact('images')) ;
   }
   public function Kitchen_Cabinet()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.kitchen_cabinet",compact('images')) ;
   }
   public function Order_Custom_Makiba_Furnitures()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.order_custom",compact('images')) ;
   }
   public function Furnitures()
   {
    $images= furniture_works_images::get()->toArray();
    return view("Admin.furniture",compact('images')) ;
   }
  //  public function home()
  //   {
  //    $images= home_images::get()->toArray(); 
  // // dd($images);
  //    return view("Admin.home",compact('images')) ;
  //   }
    public function contact()
    {
        return view("Admin.contact");
    }
    public function portfolio()
    {
     $images= portfolio_images::get()->toArray(); 
     //dd($images);
        return view("Admin.portfolio",compact('images')) ;

    }
  
    public function change_home_image(Request $request)
    {
        //dd($request);
        if($request->hasFile('image'))
         {
             $image =time().'.'.$request->image->extension();
             $path=$request->file('image')->storeAs('public\images',$image);                
        }
        $id=$request->image_id;
       // dd($image);
          home_images::where('id','=',$id)->update([
         'image'=>$image
          ]);
    return back();
    }
    public function change_portfolio_image(Request $request)
    {
       // dd($request);
        if($request->hasFile('image'))
         {
             $image ='portfolio'.time().'.'.$request->image->extension();
             $path=$request->file('image')->storeAs('public\images',$image);                
        }
        $id=$request->image_id;
       // dd($image);
       portfolio_images::where('id','=',$id)->update([
         'image'=>$image
          ]);
    return back();
    }
    public function change_contract_image(Request $request)
    {
        //dd($request);
        if($request->hasFile('image'))
         {
             $image ='contract_image'.time().'.'.$request->image->extension();
             $path=$request->file('image')->storeAs('public\images',$image);                
        }
        $id=$request->image_id;
       // dd($image);
       contract_works_images::where('id','=',$id)->update([
         'image'=>$image
          ]);
    return back();
    }
    public function change_furnitures_image(Request $request)
    {
        //dd($request);
        if($request->hasFile('image'))
         {
             $image ='furnitures'.'.'.time().$request->image->extension();
             $path=$request->file('image')->storeAs('public\images',$image);                
        }
        $id=$request->image_id;
       //dd($image);
       furniture_works_images::where('id','=',$id)->update([
         'image'=>$image
          ]);
    return back();
    }
    public function change_design_and_construction_image(Request $request)
    {
        //dd($request);
        if($request->hasFile('image'))
         {
             $image ='design_and_construction'.time().'.'.$request->image->extension();
             $path=$request->file('image')->storeAs('public\images',$image);                
        }
        $id=$request->image_id;
       // dd($image);
       design_and_construction_works_images::where('id','=',$id)->update([
         'image'=>$image
          ]);
    return back();
    }
}