@extends('Mob.layout')
    @section('content')

<div style=" background-color:{{session('col')}};" class="container-fluid px-4">
                        <div class="des" style="width:100%;margin-bottom:10px; ">
                            <div style="">
                            <center> 
                                <img style="width:100%;height:250px;" src="{{asset('FB PNJ.png')}}" alt="logo">
                           </center> 
                        </div>
                        <center>
                            <div style="margin-top:10px;width:200px;height:35px;background-color:green; border:1px solid green;border-radius:60px;">
                            <center><a style="text-decoration:none;color:black;"href="{{url('/login')}}">Post your Ads for free</a></center>
                            </div></center>
                        </div>
                        <div style=" background-color:{{session('col')}};" class="mob">
                        <div  style=" background-color:{{session('col')}};"class="col-xl-8 col-md-8">
                                <div style=" background-color:{{session('col')}};" class="card  mb-4">
                                    <div style="height:50px;margin-top:10px;color:black;border-bottom:1px solid grey;padding:10px ; background-color:{{session('col')}};"> 
                                    <h4 style="float:left;" >Select a Country</h4>
                                </div>
			
			
            <br>
            <br>
             <a style="color:black;text-decoration:none;" href="{{url('co/mob/UAE')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('UAE.png')}}" alt="logo">UAE
                    </a></h5>  </span>
                    <br>
           <a style="color:black;text-decoration:none;" href="{{url('co/mob/Algeria')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>
            Algeria</h5></span>
                    </a>  
                    <br>
                  <a style="color:black;text-decoration:none;" href="{{url('co/mob/Bahrain')}}"> <span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('Behrain.png')}}" alt="logo">Bahrain
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Egypt')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('Egypt.png')}}" alt="logo">
                    Egypt</h5></a>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Alexandria')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Alexandria
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Cairo')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Cairo
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Delta')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Delta
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Upper Egypt')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Upper Egypt
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Emirates')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('UAE.png')}}" alt="logo">Emirates
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Abu Dhabi')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('UAE.png')}}" alt="logo">Abu Dhabi
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Ajman Emirate')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Ajman Emirate
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Al Ain')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Al Ain
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Dubai Emirate')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Dubai Emirate
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Fujairah')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Fujairah
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Ras Al-Khaimah')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Ras Al-Khaimah
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Sharjah Emirate')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Sharjah Emirate
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Umm Al Quwain')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Umm Al Quwain
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Iraq')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('Iraq.png')}}" alt="logo">
                    Iraq</h5></a>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Baghdad')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Baghdad
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Basra Governorate')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Basra Governorate
                    </a></h5>  </span>
                    <br>
                   <span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><a style="color:black;text-decoration:none;" href="{{url('co/mob/Jordan')}}"><img style="width:30px;height:30px;" src="{{asset('Jordan.png')}}" alt="logo">
                   Jordan</h5> </a>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Amman')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Amman
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Aqaba')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Aqaba
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Irbid')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Irbid
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Zarqaa')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Zarqaa
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Kuwait')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i> <img style="width:30px;height:30px;" src="{{asset('kuwat.png')}}" alt="logo">
             Kuwait</span>
    </h5>                </a>  
                    <br>
                  <a style="color:black;text-decoration:none;" href="{{url('co/mob/Al Jahra Governorate')}}"> <span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Al Jahra Governorate
                    </a></h5> </span>
                    <br>
                   <span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Kuwait City
    </h5></a></span>
                      
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Tenth Region')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Tenth Region
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Lebanon')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('Lebonan.png')}}" alt="logo">Lebanon
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Morocco')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('Morroco.png')}}" alt="logo">Morocco
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Oman')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('oman.png')}}" alt="logo">Oman
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Qatar')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Qatar
        </span>
    </h5>                
                    </a>  
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Saudi Arabia')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('Saudia.png')}}" alt="logo">Saudi Arabia
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Al Ahsa')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Al Ahsa
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Al Qassim')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Al Qassim
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Aseer Province')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Aseer Province
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Dammam')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Dammam
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Hail Province')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Hail Province
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Jeddah')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Jeddah
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Medina')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Medina
                    </a></h5>  </span>
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('co/mob/Riyadh')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i>Riyadh
                    </a></h5>  </span>
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('co/mob/Tabuk')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><a style="color:black;text-decoration:none;" href="{{url('co/mob/Tabuk')}}">Tabuk
                    </a></h5>  </span>
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('co/mob/Pakistan')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><i style="float:right" class="fas fa-arrow-right"></i><img style="width:30px;height:30px;" src="{{asset('Pak.png')}}" alt="logo">Pakistan</a>
</span>
    </h5>               
<br>
 <br>
  <a style="color:black;text-decoration:none;"href="{{url('/logmob')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><img style="width:100%;height:70px;"  src="{{asset('post.png')}}" alt="logo"></a>
</span>
    </h5>               
                       
                    
<br>
</div>
                    
    </div> 
                </div>
            
                            </div>
                        </div>

</div>
@endsection