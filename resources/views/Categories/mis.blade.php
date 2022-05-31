<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miscllanieous</title>
    <link rel="icon" href="{{asset('1 (3).jpeg')}}">
</head>
<body>
<div class="mob">
                        <div class="col-xl-4 col-md-5">
                                <div class="card  mb-4">
                                    <div class="card-body"style="margin-top:10px;color:black;border-bottom:1px solid grey; "> 
                                    <h4 style="float:left;" >Mobile Categories</h4>
                                </div>
			
            <br>
            <br>
            @foreach($misData as $data)
            <div style="float:left;;width:100%;margin-top:5px;">
                                <img style="float:left;width:100px;height:100px;" src="{{asset('Images/'.$data->sub_category.'.png')}}" alt="logo">
                                <a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.$data->sub_category)}}"><h4 style="font-size:25px;"><i style="float:right" class="fas fa-arrow-right"></i>{{str_replace('?','',$data->sub_category)}}</a></h4>
                                 </div>                
                    <br> 
                    @endforeach
                    <a style="color:black;text-decoration:none;" href="{{url('post/create')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h4 style="font-size:30px;"><i style="float:right" class="fas fa-arrow-right"></i><a style="color:black;text-decoration:none;" href="{{url('post/create')}}">Post free advertisment
                    </a></h4>  </span>

                    
<br>
</div>
</body>
</html>