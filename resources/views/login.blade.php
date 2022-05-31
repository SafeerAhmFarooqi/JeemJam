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
        }
    </style>
</head>
<body>
    <div style="border-bottom:1px solid grey;width:100%">
          <a style="" onclick="history.back()"><i style="margin-left:15px;font-size:20px" class="fas fa-arrow-left"></i></a>
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
            <img src="{{asset('1 (3).jpeg')}}" alt="logo" id="logo">
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
                 <br>
                 <a href="{{url('/forget')}}" style="color:black;font-size:15px">Forgot Password</a>
            </td>
            </tr>
             
            <tr>
                <td>
            
                <a href="{{ url('auth/google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="">
                </a>
            
                  </td>
                 
                 
            </tr>
            <tr>
            <td><a href="{{ url('auth/facebook') }}">
                        <button type="button" class="btn btn-block btn-facebook">
                        <img style="width:50px;height:50px;margin-left:25px;" src="{{asset('insta.png')}}" alt=""> Facebook
                        </button>
                    </a></td>
            </tr>
            <tr>
                <td>
                     <input type="submit" value="Login" id="submit">
                </td>
            </tr>
    </table></form>
</div>

</body>
</html>