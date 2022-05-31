@extends('lay')
@section('content')
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav style="border-right:1px solid grey; background:white;color:black;" class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                    
                            @if(session('mob'))
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/mob')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            @endif
                             @if(!session('mob'))
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            @endif
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/post/create')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-ad"></i></div>
                                Post ad for free
                            </a>
                            <div class="sb-sidenav-menu-heading">Categories</div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                                Mobile
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                    @foreach($mobData as $data)
                                    <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.$data->sub_category.'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a> @endforeach
                                </nav>
                            </div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Service
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($serData as $data)
                                <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a>  @endforeach 
                                </nav>
                            </div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-help"></i></div>
                                Miscellaneous
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($misData as $data)
                                <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a> @endforeach    
                                </nav>
                            </div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Jobs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($jobData as $data)
                                <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a> @endforeach
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                               Cars
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($carData as $data)
                                <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a> @endforeach
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Pages</div>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/about')}}">
                                About Us
                            </a>
                            <a class="nav-link"  style="color:black;"style="color:white;"  href="{{url('/contact')}}">
                                Contact Us
                            </a>
                            <a class="nav-link"  style="color:black;"style="color:white;"  href="{{url('/disclaimer')}}">
                               Disclaimer
                            </a>
            
                            <a class="nav-link"  style="color:black;"style="color:white;"  href="{{url('/privacy')}}">
                                Privacy Policy
                            </a>
                            
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

<div class="des" style="width:60%;margin-left:20%;border:1px solid grey;border-radius:60px;background-color:white;">
    
    <center><h1 style="font-size:28px;"> <u>About Us</u> </h1></center> 
    
    <center><h7 style="margin:30px;font-size:15px">
    In the growing industry, the new needs
and demands arises with certain
problems that we encounter daily.
Jeemjam classifieds appeared to resolve
the upcoming expected hurdles to ease
the lives. So jeemjam.com shake hands the
users of all over the world.
 Jeemjam online classifieds want to
facilitate the users with couple of services
in innovative ways. We want you to look
no further when the bundle of solutions
unlocks here. Therefore, we come up with
a suitable and comfortable platform for
you to post your ad, a vehicle to buy and
enjoy new gadgets. When looking for a
new job or to become an employer,
nothing is more important than jeemjam
absolutely.
 Jeemjam.com is proactively looking for
new opportunities for its users that
convince them to log in and search
further. There would be a couple of other
services you will adhere to in the future.
    </h7></center>
</div>
<div class="mob" style="width:100%;background-color:white;">
    
    <center><h1 style="font-size:30px;"> <u>About Us</u> </h1></center> 
    
    <center><h5 style="margin:30px;font-size:15px">
    In the growing industry, the new needs
and demands arises with certain
problems that we encounter daily.
Jeemjam classifieds appeared to resolve
the upcoming expected hurdles to ease
the lives. So jeemjam.com shake hands the
users of all over the world.
 Jeemjam online classifieds want to
facilitate the users with couple of services
in innovative ways. We want you to look
no further when the bundle of solutions
unlocks here. Therefore, we come up with
a suitable and comfortable platform for
you to post your ad, a vehicle to buy and
enjoy new gadgets. When looking for a
new job or to become an employer,
nothing is more important than jeemjam
absolutely.
 Jeemjam.com is proactively looking for
new opportunities for its users that
convince them to log in and search
further. There would be a couple of other
services you will adhere to in the future.
    </h5></center>
</div>
</main>
</div>
@endsection