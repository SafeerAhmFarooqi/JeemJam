@extends('lay')
@section('content')
@if(session('userData')==null)
        <script>
            window.location.href="{{url('/login')}}"
        </script>
        @endif

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
<div style="width:98%;;background-color:white;">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>    
    @endif
    
    <center><h1 style="font-size:60px;"> <u>Post</u> </h1></center> 
    <div style="border:1px solid black;background-color:white;">
    <div class="card-body">@if($postCount==0)
                                    <center><h1>No Post</h1></center>
                                  @endif
                                  @if($postCount!=0)
                                   
                                <table >
                                    
                                    <thead>
                                        <tr>
                                            <th>Tittle</th>
                                            <th>Aproval</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @foreach($postData as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->aproval}}
           </td>

                                            <td><a href="{{url('post/'.$post->id.'/edit')}}" style="color:red">Edit</a></td>
                                            <td><a onclick="return confirm('Are you sure you want to delete')" href="{{url('post/'.$post->id.'/delete')}}" style="color:red">Delete</a></td>
                                        </tr>
                                       @endforeach
 @endif
                                    </tbody>
                                </table>
                            </div>
                            <div>
    </div>
  </div>
</main>
</div>
@endsection