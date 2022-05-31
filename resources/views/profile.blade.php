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
                <div class="login">
        @if($errors)
        @foreach($errors->all() as $error)
        <p style="color:red;">{{$error}}</p>
        @endforeach
        @endif
        @if(Session::has('error'))
        <p style="color:red;">{{session('error')}}</p>
        @endif
        @if(Session::has('success'))
        <p style="color:red;">{{session('success')}}</p>
        @endif
        <form method="post">
            @csrf
    <table>
        <tr>
            <img src="{{asset('1 (3).png')}}" alt="logo" id="logo">
        </tr>
            <tr>
                <h1> <i>Profile</i> </h1>
            </tr>
             @if(session('userData'))
             <tr>
                <td> <input type="text" name="name" id="username" placeholder="Full Name" value="{{session('userData')->user}}">
                </td>
            </tr>
            <tr>
                <td> <input type="text" name="username" id="username" placeholder="Phone_no" value="{{session('userData')->name}}">
                </td>
            </tr>
           
            <tr>
                <td> <input type="email" name="email" id="name"  value="{{session('userData')->email}}">
                </td>
            </tr>
            @endif
            <tr>
                <td>
                     <input type="password" name="password" id="password"  placeholder="Password">
                </td>
            </tr>
            <tr>
                <td>
                     <input type="password" name="password2" id="password"  placeholder="Re-Password">
                </td>
            </tr>
            <tr>
                <td>
                     <input type="submit" value="Update" id="submit">
                </td>
            </tr>
    </table></form>
</div>


</main>
</div>
@endsection