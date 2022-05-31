@extends('Mob.layout')
    @section('content')
                        <div style="background-color:{{session('col')}}" class="mob">
                        <div style="background-color:{{session('col')}}" class="col-xl-4 col-md-5">
                                <div style="background-color:{{session('col')}}" class="card  mb-4">
                                    <div class="card-body"style="margin-top:10px;color:black;border-bottom:1px solid grey;background-color:{{session('col')}}" >
                                        @if(session('cat')) 
                                        <a style="text-decoration:none" href="{{url('/mob')}}"><h4 style="float:left;" >Ads from {{session('cat')}}</h4><span style="float:right">{{$count}}</span></a>
                                    @endif
                                </div>
			
            <br>
            <br>
            @foreach($subData as $data)
            <div style="background-color:{{session('col')}};float:left;;width:100%;margin-top:5px;">
                                <img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                                <a class="nav-link" style="color:black;"   href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}"><h4 style="x;"><i style="float:right" class="fas fa-arrow-right"></i>{{str_replace('?','',$data->sub_category)}}</a></h4>
                                 </div>                
                    <br> 
                    @endforeach
                     <div class="card-body"style="color:black; "> 
                                   
   <a style="color:black;text-decoration:none;" href="{{url('/logmob')}}"><span style="width:100%;margin-top:10px; border-bottom:1px solid grey;"> <h5><img style="width:100%;height:70px;"  src="{{asset('post.png')}}" alt="logo"></a>
</span>
    </h5>  
                    </div>
             
 <div class="card-body"style="margin-top:10px;color:black;border-top:1px solid black; ;"> 
                                      @if(session('cat')) 
                                    <a style="text-decoration:none;color: black" href="{{url('/mob')}}"><h4 style="float:left;" > {{session('cat')}}</h4><span style="float:right"><i class="fas fa-circle"></i></span></span></a>
                                    @endif
                                </div>
			   </a>  
</div>
        


                    
<br>
</div>
                    
 


@endsection