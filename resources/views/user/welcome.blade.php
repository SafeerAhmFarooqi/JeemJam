@extends('user.layout')
@section('nav')

    <ul>
  
  <li class="dropdown"><a href="#news">Mobile</a>
  <div class="dropdown-content">
  @foreach($mobData as $data)
           <a  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a>                        
     @endforeach
    </div>
  
  </li>
  <li class="dropdown"><a href="#news">Jobs</a>
  <div class="dropdown-content">
  @foreach($jobData as $data)
           <a  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a>                        
     @endforeach
    </div>
  
  </li><li class="dropdown"><a href="#news">Service</a>
  <div class="dropdown-content">
  @foreach($serData as $data)
           <a  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a>                        
     @endforeach
    </div>
  
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Miscellaneous</a>
    <div class="dropdown-content">
    @foreach($misData as $data)
           <a  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a>                        
     @endforeach
    </div>
  </li>
  <li class="dropdown"><a href="#news">Cars</a>
  <div class="dropdown-content">
  @foreach($carData as $data)
           <a  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a>                        
     @endforeach
    </div>
  
  </li>
</ul>
    
    @endsection
    @section('content')
<div class="container-fluid px-4">
                        <div class="des" style="width:100%;margin-bottom:10px; ">
                            <div style="">
                            <center> 
                                <img style="width:100%;height:250px;" src="{{asset('frount belt.png')}}" alt="logo">
                           </center> 
                        </div>
                        <center>
                            <div style="margin-top:10px;width:200px;height:35px;background-color:green; border:1px solid green;border-radius:60px;">
                                <center><a style="text-decoration:none;color:black;"href="{{url('post/create')}}">Post your Ads for free</a></center>
                            </div></center>
                        </div>
                        <div class="mob">
                        <div class="col-xl-4 col-md-5">
                                <div class="card  mb-4">
                                    <div class="card-body"style="margin-top:10px;color:black;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <h4 style="float:left;" >Countries</h4>
                                </div>
			
            <br>
            <br>
            <h5><a style="color:black;text-decoration:none;" href="{{url('con/Algeria')}}">
            Algeria</h5>
                    </a>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Bahrain')}}"><img style="width:30px;height:30px;" src="{{asset('Behrain.png')}}" alt="logo">Bahrain
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Egypt')}}"><img style="width:30px;height:30px;" src="{{asset('Egypt.png')}}" alt="logo">
                    Egypt</h5></a>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Alexandria')}}">Alexandria
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Cairo')}}">Cairo
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Delta')}}">Delta
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Upper Egypt')}}">Upper Egypt
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Emirates')}}"><img style="width:30px;height:30px;" src="{{asset('UAE.png')}}" alt="logo">Emirates
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Abu Dhabi')}}"><img style="width:30px;height:30px;" src="{{asset('UAE.png')}}" alt="logo">Abu Dhabi
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Ajman Emirate')}}">Ajman Emirate
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Al Ain')}}">Al Ain
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Dubai Emirate')}}">Dubai Emirate
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Fujairah')}}">Fujairah
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Ras Al-Khaimah')}}">Ras Al-Khaimah
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Sharjah Emirate')}}">Sharjah Emirate
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Umm Al Quwain')}}">Umm Al Quwain
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Iraq')}}"><img style="width:30px;height:30px;" src="{{asset('Iraq.png')}}" alt="logo">
                    Iraq</h5></a>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Baghdad')}}">Baghdad
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Basra Governorate')}}">Basra Governorate
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Jordan')}}"><img style="width:30px;height:30px;" src="{{asset('Jordan.png')}}" alt="logo">
                   Jordan</h5> </a>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Amman')}}">Amman
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Aqaba')}}">Aqaba
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Irbid')}}">Irbid
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Zarqaa')}}">Zarqaa
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Kuwait')}}"> <img style="width:30px;height:30px;" src="{{asset('kuwat.png')}}" alt="logo">
             Kuwait
    </h5>                </a>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Al Jahra Governorate')}}">Al Jahra Governorate
                    </a></h5> 
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Kuwait City')}}">Kuwait City
    </h5></a>
                      
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Tenth Region')}}">Tenth Region
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Lebanon')}}"><img style="width:30px;height:30px;" src="{{asset('Lebonan.png')}}" alt="logo">Lebanon
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Morocco')}}"><img style="width:30px;height:30px;" src="{{asset('Morroco.png')}}" alt="logo">Morocco
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Oman')}}"><img style="width:30px;height:30px;" src="{{asset('oman.png')}}" alt="logo">Oman
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Qatar')}}">Qatar
        
    </h5>                
                    </a>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Saudi Arabia')}}"><img style="width:30px;height:30px;" src="{{asset('Saudia.png')}}" alt="logo">Saudi Arabia
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Al Ahsa')}}">Al Ahsa
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Al Qassim')}}">Al Qassim
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Aseer Province')}}">Aseer Province
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Dammam')}}">Dammam
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Hail Province')}}">Hail Province
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Jeddah')}}">Jeddah
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Medina')}}">Medina
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Riyadh')}}">Riyadh
                    </a></h5>  
                    <br>
                    <h5><a style="color:black;text-decoration:none;" href="{{url('con/Tabuk')}}">Tabuk
                    </a></h5>  
                    <br>
                   <h5><a style="color:black;text-decoration:none;" href="{{url('con/Pakistan')}}"><img style="width:30px;height:30px;" src="{{asset('Pak.png')}}" alt="logo">Pakistan</a>

    </h5>               
<br>

                    
<br>
</div>
                    
    </div> 
                </div>
              
                        <div id="des"  class="row">
                            <div class="col-xl-4 col-md-5">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:black;border-bottom:1px solid grey;  background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                                    <h4 style="float:left;" >Mobile</h4>
                                </div>
                                @foreach($mobData as $data)
                                   
                                <h5 style="color:black;" ><a class="nav-link" style="color:black;"  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a></h5>
                                @endforeach
                            </div>
</div>
<div  class="col-xl-4 col-md-6">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:black;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><i class="fas fa-help"></i></div>
                                    <h4 style="float:left;" >Miscellaneous</h4>
                                </div>
                                @foreach($misData as $data)
                                    <h5><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a></h5>
                                @endforeach
                                </div>
</div>
<div class="col-xl-4 col-md-6">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:black;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                    <h4 style="float:left;" >Job</h4>
                                </div>
                                @foreach($jobData as $data)
                                    <h5><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a></h5>
                                @endforeach
                                </div>
</div>
<div class="col-xl-4 col-md-6">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:black;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                                    <h4 style="float:left;" >Cars</h4>
                                </div>
                                @foreach($carData as $data)
                                    <h5><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a></h5>
                                @endforeach
                                </div>
</div>
<div style="float:left;"class="col-xl-4 col-md-6">
                                <div class="card  text-white mb-4">
                                    <div class="card-body"style="color:black;border-bottom:1px solid grey; background-color: #06416c;;"> 
                                    <div style="float:left;"class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                    <h4 style="float:left;" >Services</h4>
                                </div>
                                @foreach($serData as $data)
                                    <h5><a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.$data->sub_category)}}">{{$data->sub_category}}</a></h5>
                                @endforeach
                                </div>
</div>

                           
                            </div>
                        </div>


@endsection