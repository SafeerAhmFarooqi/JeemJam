@if(!Session::has('userData'))
        <script>
            window.location.href="{{url('/')}}"
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
            background:white;
        }
        .login{
            width:400px;
            margin: auto;
            top:50%;
            padding: 10px;
            text-align: center;
            
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
        <form  method="post"enctype="multipart/form-data">
            @csrf
            
    <table>
        
             <center><img src="{{asset('1 (3).png')}}" alt="logo" id="logo"></center>
          
        
           
                <center><h1> <i>Update Post</i> </h1></center>
          
            <tr>
                <td> <label for="">Title</label>
                </td>
            </tr>  
            <tr>
                <td> <input type="text" name="title" id="title" placeholder="Title" value="{{$post->title}}">
                </td>
            </tr>
            <tr>
                <td> <label for="">Author</label>
                </td>
            </tr>  
            <tr>
            @if(Session::has('userData'))
                <td> <input type="text" name="author" id="Author" placeholder="Auther" value="{{session('userData')->name}}">
                </td>
            @endif
            </tr>
            <tr>
                <td> <label for="">Country</label>
                </td>
            </tr>  
            <td><select name="country" id="country">
               <option value=" {{$post->country}}">
               {{$post->country}}</h5>
                    
                </select>
                </td>
            </tr>
            <tr>
                <td> <label for="">Sub Category</label>
                </td>
            </tr>
            <tr>
                <td> <select name="category" id="category">
                
                  <option value="{{$post->category}}">{{$post->category}}</option>
                </select>
                </td>
            </tr>
            <tr>
                <td> <label for="">Main Image</label>
                </td>
            </tr>  
            <tr>
                <td> <input type="file" name="img" >
                </td>
            </tr>
            <tr>
                <td> <label for="">Image2</label>
                </td>
            </tr>  
            <tr>
                <td> <input type="file" name="img2" id="img" placeholder="Title">
                </td>
            </tr>
            <tr>
                <td> <label for="">Image3</label>
                </td>
            </tr>  
            <tr>
                <td> <input type="file" name="img3" id="img" placeholder="Title">
                </td>
            </tr>
            <tr>
                <td> <label for="">Image4</label>
                </td>
            </tr>  
            <tr>
                <td> <input type="file" name="img4" id="img" placeholder="Title">
                </td>
            </tr>
            <tr>
                <td> <label for="">Image5</label>
                </td>
            </tr>  
            <tr>
                <td> <input type="file" name="img5" id="img" placeholder="Title">
                </td>
            </tr>
             <tr>
                <td> <input type="number" name="phone" id="title" placeholder="Phone-no" value="{{$post->phone}}">
                </td>
            </tr>
             <tr>
                <td> <input type="number" name="whatsapp" id="title" placeholder="Whatsapp number" value="{{$post->whatsapp}}">
                </td>
            </tr>
            <tr>
                <td> <label for="">Content</label>
                </td>
            </tr>  
            <tr>
                <td> <textarea name="content" id="content" cols="50" rows="20">{{$post->content}}</textarea>
                </td>
            </tr>
            <tr>
                <td>
                     <input type="submit" value="Update Post" id="submit">
                </td>
            </tr>
    </table></form>
</div>

</body>
</html>