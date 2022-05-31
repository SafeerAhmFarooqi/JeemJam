@if(!Session::has('userData'))
        <script>
            window.location.href="{{url('/login')}}"
        </script>
        @endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        select{
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
            margin:0px;
            top:0%;
            padding: 0px;
            text-align: center;
           
        }
        table{
            text-align: left;
        }
        label{
            text-align:center;
        }
        input{
            width:95%;
        }
        textarea{
            width:95%;
        }
        select{
            width:95%;
        }
        .img{
            align-items:center;
        }
        h1{
            text-align:center;
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
    @livewireStyles
</head>
<body>
<livewire:post-add />
@livewireScripts
</body>
</html>