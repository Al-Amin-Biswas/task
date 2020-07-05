@extends('index')
@section('title','Post Details')
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
              <img src="images/720.jpg">             
              <h4>{{ $result->title }}</h4>
              <p>{{ $result->details }}</p>
          </div>
          <div class="col-md-2">
              
          </div>
          
        </div> 
      </div>   
    </section>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>




    @endsection