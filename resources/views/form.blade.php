@extends('lay')
@section('content')
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav style="border-right:1px solid grey; background:white;color:black;" class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Categories</div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                                Mobiles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                    @foreach($mobData as $data)
                                    <a class="nav-link collapsed" style="color:black;"  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.$data->sub_category.'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> @endforeach
                                </nav>
                            </div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Services
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($serData as $data)
                                <a class="nav-link collapsed" style="color:black;"  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
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
                                <a class="nav-link collapsed" style="color:black;"  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.$data->sub_category.'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
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
                                <a class="nav-link collapsed" style="color:black;"  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
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
                                <a class="nav-link collapsed" style="color:black;"  href="{{url('post/'.session('cat').'/'.$data->sub_category)}}" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
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
                    <div class="login">
                    <center><h1>Contact Us</h1></center>
                <center>
                    <form action="" method="post">
                        <label style="font-size:25px" for="">Email</label>
                        <br>
                        <input type="email" name="email" id="email">
                        <br>
                        <label style="font-size:25px" for="">Subject</label>
                        <br>
                        <input type="text" name="subject" id="subject">
                        <br>
                        <label style="font-size:25px" for="">Message</label>
                        <br>
                        <textarea name="message" id="message" cols="50" rows="10"></textarea>
                        <br>
                        <input type="submit" value="Message" id="submit">
                    </form>
                </center>
            </div>
                </main>
            </div>
@endsection