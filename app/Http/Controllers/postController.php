<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($conn=null,$subcat=null)
    {
        $subcat=str_replace('-','?',$subcat);
        //return $subcat;
        $data=category::where(['category'=>'mobile'])->get();
        $data2=category::where(['category'=>'miscallenious'])->get();
        $data3=category::where(['category'=>'jobs'])->get();
        $data4=category::where(['category'=>'service'])->get();
        $data5=category::where(['category'=>'cars'])->get();
        $data6=category::all();
        if ($subcat == '') {
            $post=post::where(['country'=>$conn,'aproval'=>'yes'])->get();
            $postCount=post::where(['country'=>$conn , 'aproval'=>'yes'])->count();
        }
        else{
            $post=post::where(['country'=>$conn,'sub_category'=>$subcat , 'aproval'=>'yes'])->get();
            $postCount=post::where(['country'=>$conn,'sub_category'=>$subcat, 'aproval'=>'yes'])->count();
        }
        
        return view('post',['postCount'=>$postCount,'postData'=>$post,'mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3,'allData'=>$data6]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=category::where(['category'=>'mobile'])->get();
        $data2=category::where(['category'=>'miscallenious'])->get();
        $data3=category::where(['category'=>'jobs'])->get();
        $data4=category::where(['category'=>'service'])->get();
        $data5=category::where(['category'=>'cars'])->get();
        $data6=category::all();
        return view('create',['mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3,'allData'=>$data6]);
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'content'=>'required',
            'phone'=>'required',
            'whatsapp'=>'required',
            'img'=>'required',

        ]);
        if ($request->hasFile('img')){
            $mainImg=time().'.'.$request->file('img')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img')->move($dest,$mainImg);
        }

        if ($request->hasFile('img2')){
            $Img2=time().'.'.$request->file('img2')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img2')->move($dest,$Img2);
        }
        else{
            $Img2="na";
        }

        if ($request->hasFile('img3')){
            $image=$request->img3;
            $Img3=time().'.'.$request->file('img3')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img3')->move($dest,$Img3);
        }
        else{
            $Img3="na";
        }
        if ($request->hasFile('img4')){
            $image=$request->img4;
            $Img4=time().'.'.$request->file('img4')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img4')->move($dest,$Img4);
        }
        else{
            $Img4="na";
        }

        if ($request->hasFile('img5')){
            $image=$request->img5;
            $Img3=time().'.'.$request->file('img5')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img5')->move($dest,$Img5);
        }
        else{
            $Img5="na";
        }

        $post= new post;
        $post->title=$request->title;
        $post->phone=$request->phone;
        $post->whatsapp=$request->whatsapp;
        $post->country=$request->country;
        $post->author=$request->author;
        $post->category=$request->category;
        $post->content=$request->content;
        $post->img=$mainImg;
        $post->img2=$Img2;
        $post->img3=$Img3;
        $post->img4=$Img4;
        $post->img5=$Img5;
        $post->save();
        return redirect('/post/show')->with('success','Post added and sent for approval .It will be live after getting approved');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=category::where(['category'=>'mobile'])->get();
        $data2=category::where(['category'=>'miscallenious'])->get();
        $data3=category::where(['category'=>'jobs'])->get();
        $data4=category::where(['category'=>'service'])->get();
        $data5=category::where(['category'=>'cars'])->get();
        $data6=category::all();
        if(session('userData')){
        $post=post::where(['author'=>session('userData')->name])->get();
        $postCount=post::where(['author'=>session('userData')->name])->count();    
        }
        else{
            $post=post::all();
            $postCount=post::where(['author'=>'03341226089'])->count(); 
        }
        return view('my_post',['postData'=>$post,'postCount'=>$postCount,'mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3,'allData'=>$data6]);
     
      
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=post::find($id);
        return view('update',['post'=>$post]);
     
    }
    public function adminEdit($id)
    {
        $post=post::find($id);
        return view('admin.aproval',['post'=>$post]);
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'content'=>'required',
              'phone'=>'required',
            'whatsapp'=>'required',
            'img'=>'required',
        ]);
        if ($request->hasFile('img')){
            $mainImg=time().'.'.$request->file('img')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img')->move($dest,$mainImg);
        }
        else{
            $mainImg="na";
        }

        if ($request->hasFile('img2')){
            $Img2=time().'.'.$request->file('img2')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img2')->move($dest,$Img2);
        }
        else{
            $Img2="na";
        }

        if ($request->hasFile('img3')){
            $image=$request->img3;
            $Img3=time().'.'.$request->file('img3')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img3')->move($dest,$Img3);
        }
        else{
            $Img3="na";
        }
        if ($request->hasFile('img4')){
            $image=$request->img4;
            $Img4=time().'.'.$request->file('img4')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img4')->move($dest,$Img4);
        }
        else{
            $Img4="na";
        }

        if ($request->hasFile('img5')){
            $image=$request->img5;
            $Img3=time().'.'.$request->file('img5')->getClientOriginalExtension();
            $dest=public_path('/img');
            $request->file('img5')->move($dest,$Img5);
        }
        else{
            $Img5="na";
        }

        $post= post::find($id);
        $post->title=$request->title;
         $post->phone=$request->phone;
        $post->whatsapp=$request->whatsapp;
        $post->country=$request->country;
        $post->author=$request->author;
        $post->category=$request->category;
        $post->content=$request->content;
        $post->img=$mainImg;
        $post->img2=$Img2;
        $post->img3=$Img3;
        $post->img4=$Img4;
        $post->img5=$Img5;
        $post->save();
        return redirect('/post/show')->with('success','Post added');

    }

    public function adminUpdate(Request $request, $id)
    {
        $request->validate([
            'aproval'=>'required',
           
        ]);
        $post= post::find($id);
        $post->aproval=$request->aproval;
        $post->save();
        return redirect('admin/dashboard')->with('success','Post Approved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where(['id'=>$id])->delete();
        return back();
   
    }
    public function ads($id)
    {
        $data=category::where(['category'=>'mobile'])->get();
        $data2=category::where(['category'=>'miscallenious'])->get();
        $data3=category::where(['category'=>'jobs'])->get();
        $data4=category::where(['category'=>'service'])->get();
        $data5=category::where(['category'=>'cars'])->get();
        $data6=post::where(['id'=>$id])->get();
        return view('ad',['mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3,'postData'=>$data6]);
     
    }
    public function search(Request $request)
    {
        $search=$request->get('search');
        $data=category::where(['category'=>'mobile'])->get();
        $data2=category::where(['category'=>'miscallenious'])->get();
        $data3=category::where(['category'=>'jobs'])->get();
        $data4=category::where(['category'=>'service'])->get();
        $data5=category::where(['category'=>'cars'])->get();
        $data6=category::all();
            $post=post::where('content','LIKE','%'.$search.'%')->get();
            $postCount=post::where('content','LIKE','%'.$search.'%')->count();
      
        
        return view('search',['postCount'=>$postCount,'postData'=>$post,'mobData'=>$data,'misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3,'allData'=>$data6]);
     
    }
}
