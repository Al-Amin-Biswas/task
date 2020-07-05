@extends('index')
@section('title','Video Details')
@section('content')
    <header id="headerSec">
      <h3>Details post given below.</h3>   
    </header>
    <section id="details_sec">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
              
          </div>
          <div class="col-md-8 details_item">
                <video
                    id="my-video"
                    class="video-js vjs-big-play-centered"
                    controls
                    preload="auto"
                    width="640"
                    height="364"
                    poster="MY_VIDEO_POSTER.jpg"
                    data-setup="{}"
                  >
                  <source src="{{URL::asset("/uploads/videos/$result->image_path")}}" 
                    type="video/mp4" />
                     <!-- <p>{{public_path().'/uploads/videos/'.$result->image_path }}</</p>   -->
                    <p class="vjs-no-js">
                      To view this video please enable JavaScript, and consider upgrading to a
                      web browser that
                      <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                      >
                    </p>

                  </video>            
              <h4>{{$result->title}}</h4>
              <p>{{$result->details}}</</p>            
          </div>
          <div class="col-md-2">
              
          </div>
          
        </div> 
      </div>   
    </section>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>

@endsection