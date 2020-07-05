@extends('index')
@section('title','Home')
@section('content')
    <header id="headerSec">
      <h3>First section is given below.</h3>   
    </header>
    <section id="first_sec">
      <div class="container">
        <div class="row">
        	@php
        		if($value = $results->where('type','=',2)->first())
        		{
        	@endphp
        	<a href="{{url('details-video/'.$value->id)}}">
	          <div class="col-md-6 majorvid">
	              <video style="width: 100%" src="{{URL::asset("/uploads/videos/$value->image_path")}}"></video>  
	              <button><i class="fa fa-play fa-2x" aria-hidden="true"></i></button>
	              <h4>{{$value->title}}</h4>
	          </div>
      		</a>
         
          <div class="col-md-6 listvid">
            <ul>
              @foreach ($results->where('type','=',2)->where('id','!=',$value->id)->take(4)->all() as $data)

              <li>
                <a href="{{url('details-video/'.$data->id)}}">
               <video style="width: 100%" src="{{URL::asset("/uploads/videos/$data->image_path")}}"></video> 
               <button><i class="fa fa-play " aria-hidden="true" ></i></button>
               <h4>{{ $data->title }}</h4>
               </a>

              </li>
              @endforeach
              
              </li>
            </ul>
          </div>

          	@php
				}
	          else
	        	{
        	@endphp

			<div class="col-md-8 majorpic">
	           	no data found
	         </div>
        	@php	
        		}        		
        	@endphp
        </div> 
      </div>   
    </section>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <section id="second_sec">
      <h3>SECOND SECTION GIVEN BELOW HERE.</h3>
    </section>

    <section id="third_sec">
      <div class="container">
        <div class="row">
        	@php        		
        		if($val = $results->where('type',1)->first())
        		{
        	@endphp
        	<a href="{{url('details-post/'.$val->id)}}">
	          <div class="col-md-8 majorpic">
	            <img src="uploads/image/{{ $val->image_path }}" class="img-responsive" alt="Responsive image">
	              <h4>{{ $val->title}}</h4>
	          </div>
	      </a>
         
			
          <div class="col-md-8 contentpic">
            @foreach ($results->where('type',1)->where('id','!=',$val->id)->take(4)->all() as $data)
            <a href="{{url('details-post/'.$data->id)}}">
            <div class="picshow">
              <img src="uploads/image/{{ $data->image_path }}" class="img-responsive" alt="Responsive image">
              <h4>{{ $data->title }}</h4>
            </div>
            </a>
           
            @endforeach
          </div>
          @php
      		}
        	else
        	{
        	@endphp
          <div class="col-md-8 majorpic">
           no data found
          </div>
        	@php	
        		}        		
        	@endphp
        </div> 
      </div>   
    </section>
@endsection