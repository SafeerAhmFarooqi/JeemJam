@if(!Session::has('adminData'))
        <script>
            window.location.href="{{url('/admin/login')}}"
        </script>
        @endif

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            margin: auto;
            top:50%;
            padding: 10px;
            text-align: center;
           
        }
          input{
            width:80%;
        }
        select{
            width:80%;
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
        <form  method="post"enctype="multipart/form-data">
            @csrf
            
    <table>
        <tr>
            <img src="{{asset('1 (3).jpeg')}}" alt="logo" id="logo">
        </tr>
            <tr>
                <h1> <i>Add Post</i> </h1>
            </tr>
            <tr>
                <td> <label for="">Title</label>
                </td>
            </tr>  
            <tr>
                <td> <input type="text" name="title" id="title" placeholder="Title" disabled value="{{$post->title}}">
                </td>
            </tr>
            <tr>
                <td> <label for="">Aproval</label>
                </td>
            </tr>  
            <tr>
                <td><select name="aproval" id="aproval">
                    <option value="yes">Yes</option>
                    <option value="No">No</option>
                </select></td>
            </tr>
            <tr>
                <td> <label for="">Author</label>
                </td>
            </tr>  
            <tr>

                <td> <input type="text" name="author" id="Author" placeholder="Auther" disabled value="{{$post->author}}">
                </td>
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
                <td> <img style="width:100px;height:100px;" src="{{asset('img/'.$post->img)}}" alt="">
                </td>
            </tr>
          
            @if($post->img2!="na")
            <tr>
                <td> <label for="">Image2</label>
                </td>
            </tr>  
            <tr>
            <td> <img style="width:100px;height:100px;" src="{{asset('img/'.$post->img2)}}" alt="">
                </td>
            </tr>
            @endif
            @if($post->img3!="na")
            <tr>
                <td> <label for="">Image3</label>
                </td>
            </tr>  
            <tr>
            <td> <img style="width:100px;height:100px;" src="{{asset('img/'.$post->img3)}}" alt="">
                </td>
            </tr>
            @endif
            @if($post->img4!="na")
            <tr>
                <td> <label for="">Image4</label>
                </td>
            </tr>  
            <tr>
            <td> <img style="width:100px;height:100px;" src="{{asset('img/'.$post->img4)}}" alt="">
                </td>
            </tr>
            @endif
            @if($post->img5!="na")
            <tr>
                <td> <label for="">Image5</label>
                </td>
            </tr>  
            <tr>
            <td> <img style="width:100px;height:100px;" src="{{asset('img/'.$post->img5)}}" alt="">
                </td>
            </tr>
            @endif
            <tr>
                <td> <label for="">Content</label>
                </td>
            </tr>  
            <tr>
                <td> <textarea name="content" disabled id="content" cols="50" rows="20">{{$post->content}}</textarea>
                </td>
            </tr>
            <tr>
                <td>
                     <input type="submit"  value="Aprove Post" id="submit">
                </td>
            </tr>
    </table></form>
</div>

</body>
</html>