<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" content="find jobs online, find your dream job at jeemjam, jeemjam">
    <meta name="description" content="JeemJam. The World best classifieds.You can easily find your dream job within minutes at jeemjam. Sign up now...">
    <link rel="canonical" href="http://jeemjam.com/"/>
    
    <!--FacebookOpenGraph-->
     
    <meta property="og:url" content="https://jeemjam.com/public/" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Find Your Dream Job At Jeemjam - The World's Best Classified" />
        <meta property="og:description" content="JeemJam. The World best classifieds.You can easily find your dream job within minutes at jeemjam. Sign up now..." />
        <meta property="og:image" content="jeemjam" />
            
            <!--TwitterOpenGraph-->
    
        <meta name="twitter:card" content="Summary" />
        <meta name="twitter:site" content="@" />
        <meta name="twitter:creator" content="@" />
        <meta property="og:url" content="https://jeemjam.com/public/" />
        <meta property="og:title" content="Find Your Dream Job At Jeemjam - The World's Best Classified"/>
        <meta property="og:description" content="JeemJam. The World best classifieds.You can easily find your dream job within minutes at jeemjam. Sign up now..." />
        <meta property="og:image" content="jeemjam" />
        <meta name="author" content="" />
        <title>Find Your Dream Job At Jeemjam - The World's Best Classified</title>
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
            @foreach($jobData as $data)
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