<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" src="{{asset('1 (3).jpeg')}}">
    <title>Registration</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</head>
<body>
    
    <div class="login">
        @if($errors)
        @foreach($errors->all() as $error)
        <p style="color:red;">{{$error}}</p>
        @endforeach
        @endif
        @if(Session::has('error'))
        <p style="color:red;">{{session('error')}}</p>
        @endif
        <form method="post">
            @csrf
    <table>
        <tr>
            <img src="{{asset('1 (3).png')}}" alt="logo" id="logo">
        </tr>
            <tr>
                <h1> <i>Register</i> </h1>
            </tr>
            <td> <input type="text" name="name" id="name" placeholder="Full Name">
                </td>
            <tr>
                <td> <input type="number" name="username" id="username" placeholder="Phone_no">
                </td>
            </tr>
            <tr>
                <td> <input type="email" name="email" id="name" placeholder="Email">
                </td>
            </tr>
            <tr>
                <td>
                     <input type="password" name="password" id="password"  placeholder="Password">
                </td>
            </tr>
            <tr>
                <td>
                     <input type="submit" value="Sign Up" id="submit">
                </td>
            </tr>
    </table></form>
</div>

</body>
</html>