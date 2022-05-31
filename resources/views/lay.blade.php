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
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
             <a style="" onclick="history.back()"><i style="margin-left:15px;font-size:20px" class="fas fa-arrow-left"></i></a>
            <a class="navbar-brand ps-3" style="color:black;" ><img style="width:50px;height:50px;" src="{{asset('1 (3).png')}}" alt="logo">Jeemjam
          </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" style="color:black;" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <span class="des" style="float:left;width: 100px;">
					  <div id="google_translate_element"></div>

            <script type="text/javascript">
                function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</span>
            <!-- Navbar Search-->
            <form action="{{url('/layout')}}" method="get" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" name="search" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    @if(Session::has('userData'))
                    <a style="color:black;" class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('/setting')}}">Settings</a></li>
                        <li><a class="dropdown-item" href="{{url('post/create')}}">Post an ad</a></li>
                        <li><a class="dropdown-item" href="{{url('post/show')}}">My ads</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{url('auth/logout')}}">Logout</a></li>
                    </ul>
                    @endif
                </li>
            </ul>
            
        </nav>
     <div>@yield('content')</div>
                
               
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
