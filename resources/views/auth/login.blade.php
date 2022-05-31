@if(Session::has('userData'))
        <script>
            window.location.href="{{url('post/show')}}"
        </script>
 @endif


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('1 (3).jpeg')}}">
    <title>Login</title>
    <style>
        body{
            background:white;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
     <div class="mob" style="border-bottom:1px solid grey;width:100%; height:40px">
          <a style="" onclick="history.back()"><i style="margin-left:15px;font-size:20px" class="fas fa-arrow-left"></i></a>
           Jeemjam
       
    </div>
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
        <form action="{{url('auth/login')}}" method="post"> 
            @csrf
    <table>
        <tr>
            <img src="{{asset('1 (3).png')}}" alt="logo" id="logo">
        </tr>
            <tr>
                <h1> <i>Login</i> </h1>
            </tr>
             
            <tr>
                <td> <input type="number" name="username" id="username" placeholder="Phone_no">
                </td>
            </tr>
            <tr>
                <td>
                     <input type="password" name="password" id="password"  placeholder="Password">
                </td>
            </tr>
            <tr>
                <td>
                 <center><a href="{{url('/registeration')}}" style="color:grey;font-size:15px">Dont Have Account</a>  </center>  
            </td>
            </tr>
            <tr>
                <td>
                    <a href="{{url('/forget')}}" style="color:black;font-size:15px">Forgot Password</a>
                </td>
            </tr>
            <tr>
                <td>
            @if(session('mob')!='yes')
                <a href="{{ url('auth/google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="">
                </a>
            
                  </td>
                 
                 
            </tr>
            <tr>
            <td><center>
                <div style="width:180px;height:50px;border:1px solid black;background-color:#39aad5;"><a href="{{ url('auth/facebook') }}">
                       <span><img style="width:50px;height:50px;float:left;" src="{{asset('fb.png')}}" alt=""> <a href="{{ url('auth/facebook') }}" style="color:black;text-decoration:none;float:left;padding-top:10px">Facebook</a> </span> 
                    </a></center>  </td></div>
            </tr>
            @endif
            <tr>
                <td>
                     <input type="submit" value="Login" id="submit">
                </td>
            </tr>
    </table></form>
</div>

</body>
</html>