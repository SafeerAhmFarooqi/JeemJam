<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jeejam</title>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <style>
            body {
  background-color:white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #06416c;;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {

  display: none;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;display: block;}

.dropdown:hover .dropdown-content {
  display: block;
}
            .login{
            width:100%;
            margin: auto;
            top:50%;
            padding: 10px;
            text-align: center;
            border:1px solid #d3caca;
        }
            	div.RoadMap{
			width: 100%;
			height: 1000px;
			text-align:center;
			background: #e1e0e0;
			border: 2px solid #e1e0e0;
			border-radius:20px;
			
		}
		div.RoadMapContainer{
			width:30%;
			height: 250px;
			float: left;
			margin-left:10px;
			margin-top:10px;
			padding-top:30px;
			text-align: center;
			font: 20px sans-serif;
			border-right: 1px solid black;
		}
		a.RoadMapContainer{
			color: black;
            margin-bottom:10px ;
		}
        .mob{
            display: none;
        }
        #mob{
            display: none;
        }
        .margin{
            margin-right:35px;margin-left:35px;border:1px solid grey;border-radius:60px
        }
        @media only screen and (max-width: 600px) {
            div.RoadMap{
			width: 97%;
			height: 2000px;			
		}
		div.RoadMapContainer{
			width: 97%;
			height: 750px;
			float: left;
			margin-left:10px;
			margin-top:10px;
			border-right:0px;
			border-bottom: 1px solid black;
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
        @media only screen and (max-width:1200px) and (min-width:601px){
		div.RoadMap{
			width: 97%;
			height: 1000px;
		}
		div.RoadMapContainer{
			width: 97%;
			height: 250px;
			float: left;
			margin-left:10px;
			margin-top:10px;
			border-right:0px;
			border-bottom: 1px solid black;
		}
	    }	
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body  >
    <div style="width:100%;height:40px;background:black;">
      <div style="float-left;">
       <center><h3><a style="color:white;text-decoration:none;" href="">Jeemjam Classified</a>
         </h3></center>   
        </div>
    </div>
    <div>
        <img style="width:120px;height:120px;margin-left:35px;margin-top:5px;margin-bottom:5px;" src="{{asset('1 (3).jpeg')}}" alt="">
    </div>
    <div class="margin" style="">
    <div class="des">
    @yield('nav')
    </div>
    <div style="width:100%;">
    
    <nav style="border-bottom:1px solid grey; background:#020240;;margin-top:5px;" class="sb-topnav navbar navbar-expand navbar">
            <!-- Navbar Brand-->
            <img style="width:50px;height:50px;margin-left:5px;" src="{{asset('1 (3).jpeg')}}" alt="logo">
            <a class="navbar-brand ps-3" style="color:white;" href="index.html">Jeemjam</a>
            <!-- Sidebar Toggle-->
            <!-- Navbar Search-->
            <form id="des"class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a style="color:white;" class="nav-link dropdown-toggle"  href="{{url('post/create')}}" >Add Post</a>
                    
                </li>
            </ul>
        </nav>               
               
            <div id="layoutSidenav_content">
                <main>
                @yield('content')
      
                </main>
                <div style="">
                            <center> 
                                <img style="width:100%;height:250px;" src="{{asset('RellyPNJ.png')}}" alt="logo">
                           </center> 
                        </div>
                <div class="RoadMap">
		<div class="RoadMapContainer">
			<a href="{{url('/')}}" class="RoadMapContainer">Home</a>
			<br>
            <br>
			<a href="{{url('/contact')}}" class="RoadMapContainer">Contact Us</a>
			
			<br>
            <br>
			<a href="{{url('/about')}}" class="RoadMapContainer">About Us</a>
            <br>
            <br>
            <a href="{{url('/privacy')}}" class="RoadMapContainer">Privacy Policies</a>
		</div>
		<div class="RoadMapContainer">
			<a href="/Pages/Services.php" class="RoadMapContainer">Countries</a>
            <br>
            <br><a style="color:black;text-decoration:none;" href="{{url('post?con=Algeria')}}">
            Algeria
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Bahrain')}}"><img style="width:30px;height:30px;" src="{{asset('Behrain.png')}}" alt="logo">Bahrain
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Egypt')}}"><img style="width:30px;height:30px;" src="{{asset('Egypt.png')}}" alt="logo">
                    Egypt</a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Alexandria')}}">Alexandria
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Cairo')}}">Cairo
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Delta')}}">Delta
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Upper Egypt')}}">Upper Egypt
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Emirates')}}"><img style="width:30px;height:30px;" src="{{asset('UAE.png')}}" alt="logo">Emirates
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Abu Dhabi')}}"><img style="width:30px;height:30px;" src="{{asset('UAE.png')}}" alt="logo">Abu Dhabi
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Ajman Emirate')}}">Ajman Emirate
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Al Ain')}}">Al Ain
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Dubai Emirate')}}">Dubai Emirate
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Fujairah')}}">Fujairah
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Ras Al-Khaimah')}}">Ras Al-Khaimah
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Sharjah Emirate')}}">Sharjah Emirate
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Umm Al Quwain')}}">Umm Al Quwain
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Iraq')}}"><img style="width:30px;height:30px;" src="{{asset('Iraq.png')}}" alt="logo">
                    Iraq</a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Baghdad')}}">Baghdad
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Basra Governorate')}}">Basra Governorate
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Jordan')}}"><img style="width:30px;height:30px;" src="{{asset('Jordan.png')}}" alt="logo">
                   Jordan </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Amman')}}">Amman
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Aqaba')}}">Aqaba
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Irbid')}}">Irbid
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Zarqaa')}}">Zarqaa
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Kuwait')}}"> <img style="width:30px;height:30px;" src="{{asset('kuwat.png')}}" alt="logo">
             Kuwait
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Al Jahra Governorate')}}">Al Jahra Governorate
                    </a> 
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Kuwait City')}}">Kuwait City
    </div>
<div class="RoadMapContainer">
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Tenth Region')}}">Tenth Region
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Lebanon')}}"><img style="width:30px;height:30px;" src="{{asset('Lebonan.png')}}" alt="logo">Lebanon
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Morocco')}}"><img style="width:30px;height:30px;" src="{{asset('Morroco.png')}}" alt="logo">Morocco
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Oman')}}"><img style="width:30px;height:30px;" src="{{asset('oman.png')}}" alt="logo">Oman
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Qatar')}}">Qatar
        
                    
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Saudi Arabia')}}"><img style="width:30px;height:30px;" src="{{asset('Saudia.png')}}" alt="logo">Saudi Arabia
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Al Ahsa')}}">Al Ahsa
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Al Qassim')}}">Al Qassim
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Aseer Province')}}">Aseer Province
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Dammam')}}">Dammam
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Hail Province')}}">Hail Province
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Jeddah')}}">Jeddah
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Medina')}}">Medina
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Riyadh')}}">Riyadh
                    </a>  
                    <br>
                    <a style="color:black;text-decoration:none;" href="{{url('con/Tabuk')}}">Tabuk
                    </a>  
                    <br>
                   <a style="color:black;text-decoration:none;" href="{{url('con/Pakistan')}}"><img style="width:30px;height:30px;" src="{{asset('Pak.png')}}" alt="logo">Pakistan</a>

<br>

                    
    </div> 
<br><br>

<br>
           </form>
		</div>
		
		
	</div>
                <footer id="des"  class="py-4 bg-grey mt-auto">
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
        </div>
    </body>
</html>
