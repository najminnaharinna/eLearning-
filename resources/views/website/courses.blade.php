@extends('layouts.website')

@section('main-content')
<h1 style="margin-top: 45px; margin-bottom:25px; color:#02aeca; font-size:40px; text-align:center;text-decoration: underline;
font-weight: bolder;">Welcome Our Courses</h1>

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="imgBanner">
    <img src="{{asset('website/img/courses.jpg')}}" alt="">
</section>
  <!--=========== END COURSE BANNER SECTION ================-->
<div class="container">
  <h2 class="text-center">Course Archive</h2>
  <div class="row">
      @foreach ($courses as $course)
      <div class="col-md-4">
      <div class="card" style="width: 100%; margin-top:5px; margin-bottom:10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;">
          <img src="{{ url($course->image) }}" class="card-img-top" alt="course-image">
            <div class="card-body">
              <h5 class="card-title">{{ $course->title }}</h5>
              <p class="card-text">{!! substr($course->description, 0, 80) !!}</p>
              <a href="{{ route('course-details',$course->id) }}" class="btn btn-primary">Start Course</a>
            </div>
      </div>
      </div>
      @endforeach
  </div>
  
</div>

@endsection

