<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" content="">
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
        <meta name="author" content="" />
        <title>Jeejam-The Worlds Best Classified</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="icon" href="{{asset('1 (3).jpeg')}}">
        <style>
        body{
           
        }
            h2{
                color:blue;
                font-size:17px
            }
            a{
                color:black;
                text-decoration:none;
            }
            .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  color: #55ACEE;
}

.fa-google {
   color: #dd4b39;
}

.fa-linkedin {
  background: white;
  color: blue;
}
.fa-whatsapp {
  color:lightgreen;
}

.icons i{
    font-size:40px;
}
.icons{
    margin-left:70px;
}

        </style>
</head>
<body style=" background-color:{{session('col')}};">
   
    <div>
        <div style="background-color:darkblue ;padding-top:35px ;padding-left:15px;padding-bottom:15px ;color:white">
      <a  onclick="history.back()"> <h1 style="font-size:20px;">Settings</h1></a>
        </div>
        @if(Session::has('userData'))
       <center> <h1 style="margin-top:50px; font-size:20px">{{session('userData')->user}}</h1></center>
       
        @endif
        
         @if(!Session::has('userData'))
        <center><h1 style="margin-top:20px;color:#A9A9A9;font-size:25px">Name or Company Name <a href="{{url('/logmob')}}"></a><i class="fas fa-pencil"></i> </h1></center>
        @endif
        <div>
            <h2 style="font-size:20px;"><i style="font-size:25px;margin:10px;margin-left:40px;color:black;"class="fas fa-user"></i>My Account</h2>
        
         @if(!Session::has('userData'))
      <a href="{{url('/logmob')}}"><h2 style="margin-left:70px;color:black;font-size:17px">Connect with jeemjam</h2></a>
        @endif
              @if(Session::has('userData'))
              <a href="{{url('/showmob')}}"><h2 style="margin-left:70px;margin-bottom:25px;color:black;font-size:17px">My Ads</h2></a>
            
        <a href="{{url('/setting')}}"><h2 style="margin-left:70px;color:black;font-size:17px">My profile</h2></a>
       
        @endif
            
        </div>
        <div>
             <h2 style="font-size:20px;"><i style="font-size:25px;margin:6px;margin-left:40px;margin-top:10px;margin-bottom:25px;color:black;"class="fa-solid fa-wrench"></i>General</h2>
              <a href="{{url('/theam')}}"><h2 style="margin-left:70px;margin-bottom:25px;color:black;font-size:17px;">Change Theme</h2></a>
        </div>
        <div>
              <h2 style="font-size:20px;"><i style="font-size:25px;margin:6px;margin-left:40px;color:black;"class="fa-solid fa-wrench"></i>jeemjam app</h2>
              <div class="icons">
                <a href="https://wa.me/?text=https://jeemjam.com"> <h2 style="color:black;">Share With Friends</h2>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://jeemjam.com" ><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/intent/tweet?text=The Worlds Best Classified&amp;url=https://jeemjam.com" ><i class="fa-brands fa-twitter"></i></a>
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://jeemjam.com&amp;title=The Worlds Best Classified&amp;summary=dit is de linkedin summary"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://wa.me/?text=https://jeemjam.com" ><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <br>
         <a href="{{url('/privacymob')}}"><h2 style="margin-left:70px;margin-bottom:25px;color:black;">Privacy Policy</h2></a>
         
          <a href="{{url('/aboutmob')}}"><h2 style="margin-left:70px;color:black;margin-bottom:25px;">About Us</h2></a>
          
          <a href="{{url('/contact')}}"><h2 style="margin-left:70px;color:black;margin-bottom:25px;">Contact Us</h2></a>
          
       
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>