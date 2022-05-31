<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\User;
use App\Models\post;

class categoryController extends Controller
{
   public function setting()
   {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();
       if (session('userData')) {
           $user=user::where(['name'=>session('userData')->name])->get();
     # code...
       }
       $user=user::all();
       session()->forget(['mob']);
        return view('profile',['mobData'=>$data],['user'=>$user,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3]);
    
   }
    public function settingMob()
   {
    
       if (session('userData')) {
           $user=user::where(['name'=>session('userData')->name])->get();
     # code...
       }
       $user=user::all();
        return view('Mob.setting',['user'=>$user]);
    
   }
    public function Home()
    {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();
       session()->forget(['mob']);
       return view('welcome',['mobData'=>$data],['misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3]);
    }
      public function Homemob()
    {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();
       return view('Mob.index',['mobData'=>$data],['misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3]);
    }
    public function Hom()
    {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();
      
       return view('about',['mobData'=>$data],['misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3]);
    }
    public function contact()
    {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();
      
       return view('contact',['mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3]);
    }
    public function privacy()
    {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();

       return view('privacy',['mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3]);
    }

    public function blog()
    {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();

       return view('blog',['mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3]);
    }
    public function category($cat=null)
    {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();
       if (session('cat')) {
         session()->forget(['cat']);
         session(['cat'=>$cat]);
       }
       else{
          session(['cat'=>$cat]);
       }
        $count=post::where(['country'=>$cat,'aproval'=>'yes'])->count(); 
        $mobileAdds=post::where(['country'=>$cat,'aproval'=>'yes'])
        ->where('category','mobile')
        ->get();
        $carsAdds=post::where(['country'=>$cat,'aproval'=>'yes'])
        ->where('category','cars')
        ->get();
        $servicesAdds=post::where(['country'=>$cat,'aproval'=>'yes'])
        ->where('category','service')
        ->get();
        $miscellaneousAdds=post::where(['country'=>$cat,'aproval'=>'yes'])
        ->where('category','miscallenious')
        ->get();
        $jobsAdds=post::where(['country'=>$cat,'aproval'=>'yes'])
        ->where('category','jobs')
        ->get();
        session()->forget(['mob']);
       return view('category',[
       'mobData'=>$data,
       'misData'=>$data2,
       'serData'=>$data4,
       'carData'=>$data5,
       'jobData'=>$data3,
       'count'=>$count,
       'mobileAdds'=>$mobileAdds,
       'carsAdds'=>$carsAdds,
       'servicesAdds'=>$servicesAdds,
       'miscellaneousAdds'=>$miscellaneousAdds,
       'jobsAdds'=>$jobsAdds,
      ]);
    }
     public function categoryMob($cat=null)
    {
       $data=category::where(['category'=>'mobile'])->get();
       $data2=category::where(['category'=>'miscallenious'])->get();
       $data3=category::where(['category'=>'jobs'])->get();
       $data4=category::where(['category'=>'service'])->get();
       $data5=category::where(['category'=>'cars'])->get();
       if (session('cat')) {
         session()->forget(['cat']);
         session(['cat'=>$cat]);
       }
       else{
          session(['cat'=>$cat]);
       }
        $count=post::where(['country'=>$cat])->count(); 

       return view('Mob.categoryMob',['mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3,'count'=>$count]);
    }
    public function subcategory($sub)
    {
       $data=category::where(['category'=>$sub])->get(); 
       $posts=post::where(['country'=>session('cat'),'category'=>$sub,'aproval'=>'yes'])->get(); 
        session()->forget(['mob']);
       return view('subcategory',['subData'=>$data,'posts'=>$posts]);
    }
      public function subcategoryMob($sub)
    {
       $data=category::where(['category'=>$sub])->get(); 
       $count=post::where(['country'=>session('cat')])->count();
        session(['mob'=>'yes']);
       return view('Mob.subcategoryMob',['subData'=>$data,'count'=>$count]);
    }
    
}
