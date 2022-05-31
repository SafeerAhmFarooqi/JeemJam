@extends('layout')


    @section('content')
              <div class="container-fluid px-4">
                         <div class="des">
                        <div  class="row">
                            <div class="col-xl-4 col-md-5">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:white;border-bottom:1px solid grey;  background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><h4><i class="fas fa-mobile"></i></h4></div>
                                    <h4 style="float:left;" >Mobile</h4>
                                </div>
                                @foreach($mobData as $data)
                                   
                                <div style="float:left;;width:100%;margin-top:5px;">
                                <img style="float:left;width:70px;height:70px;" src="{{asset('Images/'.$data->sub_category.'.png')}}" alt="logo">
                                <h5 style="float:left;"><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}">{{$data->sub_category}}</a></h5>
                                 </div>
                                  @endforeach
                            </div>
</div>
<div  class="col-xl-4 col-md-6">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:white;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><h4><i class="fas fa-help"></i></h4></div>
                                    <h4 style="float:left;" >Miscellaneous</h4>
                                </div>
                                @foreach($misData as $data)
                                <div style="float:left;;width:100%;margin-top:5px;">
                                <img style="float:left;width:70px;height:70px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                                <h5 style="float:left;"><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}">{{str_replace('?','',$data->sub_category)}}</a></h5>
                                 </div> 
                                 @endforeach
                                </div>
</div>
<div class="col-xl-4 col-md-6">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:white;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><h4><i class="fas fa-book"></i></h4></div>
                                    <h4 style="float:left;" >Job</h4>
                                </div>
                                @foreach($jobData as $data)
                                <div style="float:left;;width:100%;margin-top:5px;">
                                <img style="float:left;width:70px;height:70px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                                <h5 style="float:left;"><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}">{{str_replace('?','',$data->sub_category)}}</a></h5>
                                 </div>
                                  @endforeach
                                </div>
</div>
<div class="col-xl-4 col-md-6">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:white;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><h4><i class="fas fa-car"></i></h4></div>
                                    <h4 style="float:left;" >Cars</h4>
                                </div>
                                @foreach($carData as $data)
                                <div style="float:left;;width:100%;margin-top:5px;">
                                <img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                                <h5 style="float:left;"><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}">{{str_replace('?','',$data->sub_category)}}</a></h5>
                                 </div>
                                  @endforeach
                                </div>
</div>
<div style="float:left;"class="col-xl-4 col-md-6">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:white;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><h4><i class="fas fa-book"></i></h4></div>
                                    <h4 style="float:left;" >Services</h4>
                                </div>
                                @foreach($serData as $data)
                                <div style="float:left;;width:100%;margin-top:5px;">
                                <img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                                <h5 style="float:left;"><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}">{{str_replace('?','',$data->sub_category)}}</a></h5>
                                 </div>
                                @endforeach
                                </div>
</div>

                           
                            </div>
                        </div>

</div>
         <div class="mob">
                        <div class="col-xl-4 col-md-5">
                                <div class="card  mb-4">
                                    <div class="card-body"style="margin-top:10px;color:black;border-bottom:1px solid black; background-color: white;;"> 
                                      @if(session('cat')) 
                                    <h4 style="float:left;" >Ads from {{session('cat')}}</h4><span style="float:right;margin-right: 30px;">{{$count}}</span>
                                    @endif
                                </div>
			   </a>  
                    <br>
                    
                                    <div class="card-body"style="color:black;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/Mobile.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('sub/mobile')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Mobiles <span style="float:right;margin-right: 30px;">{{$mobileAdds->count()}}</span>
                    </a></h4> 
                                </div>
                                <br>
                                
                                    <div class="card-body"style="color:black;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/car.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('sub/cars')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Cars <span style="float:right;margin-right: 30px;">{{$carsAdds->count()}}</span>
                    </a></h4> 
                                
                                 </div>
                    <br>
                   
                                    <div class="card-body"style="color:black;; "> 
                                     <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/Service.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('sub/service')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Services <span style="float:right;margin-right: 30px;">{{$servicesAdds->count()}}</span></a> </h4 >
                   
                               
                   </div>
                   
                    <br>
                    
                                    <div class="card-body"style="color:black "> 
                                    <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/Miscellenous.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('sub/miscallenious')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Miscallenious <span style="float:right;margin-right: 30px;">{{$miscellaneousAdds->count()}}</span>
                    </a></h4>  
                    
                                </div>
                   <br>
                   
                                    <div class="card-body"style="color:black; "> 
                                     <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/Job.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('sub/jobs')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Jobs <span style="float:right;margin-right: 30px;">{{$jobsAdds->count()}}</span>
                    </a></h4>  
                                </div>
                  
                    <br>
                    <br>
                     <div class="card-body"style="color:black; "> 
                                    
    <a style="color:black;text-decoration:none;" href="{{url('/post/create')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><img style="width:100%;height:70px;"  src="{{asset('post.png')}}" alt="logo"></a>
</span>
    </h5>  
                    </div>

                    
<br>
</div>
                    
    </div> 
                
@endsection