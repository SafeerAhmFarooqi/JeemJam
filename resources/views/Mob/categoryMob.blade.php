@extends('Mob.layout')


    @section('content')
              <div class="container-fluid px-4">
                     
         <div style="background-color:{{session('col')}}" class="mob">
                        <div style="background-color:{{session('col')}}" class="col-xl-4 col-md-5">
                                <div style="background-color:{{session('col')}}"class="card  mb-4">
                                    <div class="card-body"style="margin-top:10px;color:black;border-bottom:1px solid black; ;"> 
                                      @if(session('cat')) 
                                    <a style="text-decoration:none" href="{{url('/mob')}}"><h4 style="float:left;" >Ads from {{session('cat')}}</h4><span style="float:right">{{$count}}</span></a>
                                    @endif
                                </div>
			   </a>  
                    <br>
                    
                                    <div class="card-body"style="color:black;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/Mobile.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('su/mob/mobile')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Mobiles
                    </a></h4> 
                                </div>
                                <br>
                                
                                    <div class="card-body"style="color:black;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/car.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('su/mob/cars')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Cars
                    </a></h4> 
                                
                                 </div>
                    <br>
                   
                                    <div class="card-body"style="color:black;; "> 
                                     <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/Service.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('su/mob/service')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Services</a> </h4 >
                   
                               
                   </div>
                   
                    <br>
                    
                                    <div class="card-body"style="color:black "> 
                                    <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/Miscellenous.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('su/mob/miscallenious')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Miscallenious
                    </a></h4>  
                    
                                </div>
                   <br>
                   
                                    <div class="card-body"style="color:black; "> 
                                     <div style="float:left;"class="sb-nav-link-icon"> <img style="float:left;width:50px;height:50px;" src="{{asset('Images/Job.png')}}" alt="logo"></div>
                                    <a style=" color:black;text-decoration:none;" href="{{url('su/mob/jobs')}}"><h4><i style="float:right" class="fas fa-arrow-right"></i>Jobs
                    </a></h4>  
                                </div>
                  
                   
                     <div class="card-body"style="color:black; "> 
                                    
    <a style="color:black;text-decoration:none;" href="{{url('/logmob')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><img style="width:100%;height:70px;"  src="{{asset('post.png')}}" alt="logo"></a>
</span>
    </h5>  
                    </div>

 <div class="card-body"style="margin-top:10px;color:black;border-top:1px solid black;border-bottom:1px solid black;"> 
                                      @if(session('cat')) 
                                    <a style="text-decoration:none;color: #800000" href="{{url('/mob')}}"><h4 style="float:left;" > {{session('cat')}}</h4><span style="float:right"><i class="fas fa-circle"></i></span></a>
                                    @endif
                                </div>
			   </a>  
</div>
                    
    </div> 
                
@endsection