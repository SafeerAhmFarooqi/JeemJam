<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CatController extends Controller
{
    public function mob()
    {
        $data=category::where(['category'=>'mobile'])->get();
        return view('Categories.mobile',['mobData'=>$data]);
    }
    public function ser()
    {
        $data=category::where(['category'=>'service'])->get();
        return view('Categories.service',['serData'=>$data]);
    }
    public function car()
    {
        $data=category::where(['category'=>'cars'])->get();
        return view('Categories.car',['carData'=>$data]);
    }
    public function job()
    {
        $data=category::where(['category'=>'jobs'])->get();
        return view('Categories.job',['jobData'=>$data]);
    }
    public function mis()
    {
        $data=category::where(['category'=>'jobs'])->get();
        return view('Categories.mis',['misData'=>$data]);
    }
}
