@if(!Session::has('adminData'))
        <script>
            window.location.href="{{url('/admin/login')}}"
        </script>
        @endif
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="" />
        <meta name="keywords" content="jeemjam">
    <meta name="description" content="jeemjam">
    <link rel="canonical" href="http://jeemjam.com/"/>
    <meta property="og:url" content="https://jeemjam.com/public/" />
        <meta property="og:type"  content="article" />
        <meta property="og:title"  content="JeemJam" />
        <meta property="og:description"   content="jeemjam" />
        <meta property="og:image" content="jeemjam" />
            
            
        <meta name="twitter:card" content="Summary" />
        <meta name="twitter:site" content="@" />
        <meta name="twitter:creator" content="@" />
        <meta property="og:url" content="https://jeemjam.com/public/" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="jeemjam" />
        <meta property="og:image" content="jeemjam" />
        <title>Jeejam</title>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="icon" href="{{asset('1 (3).jpeg')}}">
        <style>
                 body{
           
        }
        .login{
            width:400px;
            margin: auto;
            top:50%;
            padding: 10px;
            text-align: center;
            border:1px solid #d3caca;
        }
        .text{
            width:100%;
            margin: auto;
            top:50%;
            padding: 10px;
            text-align: center;
        }
        input{
            width:90%;
            height: 35px;
            margin-bottom:10px;
        }
        table{
            width:100%;
            font-size:25px;
        }
        #submit{
            background-color: #a1a1dd;
            font-size:20px;
            border:0px;
            border-radius:15px;
            color:white;
        }
        #logo{
            width: 70px;
            height: 70px;
        }
         .mob{
            display:none
        }
        .des{
            display:block
        }
        #mob{
            display:none
        }
        #des{
            display:block
        }
        @media only screen and (max-width: 600px) {
            .login{
            width:100%;
            margin: auto;
            top:50%;
            padding: 10px;
            text-align: center;
            border:1px solid #d3caca;
        }
        .mob{
            display:block
        }
        .des{
            display:none
        }
        #mob{
            display:block
        }
        #des{
            display:none
        }
        .margin{
            margin:0px;
            border:0px;
        }
		} 
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body  class="sb-nav-fixed">
        <nav style="border-bottom:1px solid grey; background:white;" class="sb-topnav navbar navbar-expand navbar">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="color:black;" ><img style="width:50px;height:50px;" src="{{asset('1 (3).jpeg')}}" alt="logo">Jeemjam
          </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" style="color:black;" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <span class="des" style="float:left;width: 100px;">
					    <div class="translate" id="google_translate_element"></div>

                            <script type="text/javascript">
                                function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');}
                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</span>
            <!-- Navbar Search-->
           
            <!-- Navbar-->
          
            
        </nav>
     <div>
@if(!Session::has('adminData'))
        <script>
            window.location.href="{{url('/')}}"
        </script>
        @endif

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav style="border-right:1px solid grey; color:black;" class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link"  style="color:black;"style="color:black;" href="{{url('admin/dashboard')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            <a class="nav-link"  style="color:black;"style="color:black;" href="{{url('admin/logout')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-home"></i></div>
                               Logout
                            </a>
                            
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
<div style="width:98%;;background-color:white;">
    <center><h1 style="font-size:60px;"> <u>Post</u> </h1></center> 
    @if(Session::has('success'))
        <center><p style="color:red;">{{session('success')}}</p></center>
        @endif
    <div style="border:1px solid black;background-color:white;">
    <div class="card-body">
                                <table >
                                    
                                  
                                        <tr>
                                            <th>Tittle</th>
                                            <th>Approval</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                   
                                        @foreach($postData as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->aproval}}</td>
                                            <td><a href="{{url('admin/post/'.$post->id.'/edit')}}" style="color:red">Edit</a></td>
                                            <td><a onclick="return confirm('Are you sure you want to delete')" href="{{url('post/'.$post->id.'/delete')}}" style="color:red">Delete</a></td>
                                        </tr>
                                       @endforeach

                                   
                                </table>
                            </div>
                            <div>
    </div>
  </div>
</main>
</div>

     </div>
                
               
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
       
    </body>
</html>
