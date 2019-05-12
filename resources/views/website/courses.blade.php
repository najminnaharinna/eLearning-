@extends('layouts.website')

@section('main-content')
<section id="container-fluid">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('website/img/events-slider2.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
    </div>
  </section>
<h1 style="margin-top: 45px; margin-bottom:25px; color:#02aeca; font-size:40px; text-align:center;text-decoration: underline;
font-weight: bolder;">Welcome Our Courses</h1>

<!--=========== BEGIN COURSE BANNER SECTION ================-->

  <!--=========== END COURSE BANNER SECTION ================-->
<div class="container">
  <h2 class="text-center">Course Archive</h2>
  <div class="row">
      @foreach ($courses as $course)
      <div class="col-md-3 col-sm-12">
      <div class="card" style="width: 100%; margin-top:5px; margin-bottom:10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;">
          <img src="{{ url($course->image) }}" class="card-img-top" alt="course-image">
            <div class="card-body">
              <h5 class="card-title">{{ $course->title }}</h5>
              <p class="card-text">{!! substr($course->description, 0, 100) !!}</p>
              <a href="{{ route('course-details',$course->id) }}" class="btn btn-primary">Start Course</a>
            </div>
      </div>
      </div>
      @endforeach
  </div>
  
</div>

@endsection

