@extends('website.index')

@section('content')
    <h1 class="about-page">Welcome Our Courses</h1>

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
        
      </section>
      <!--=========== END COURSE BANNER SECTION ================-->
      <div class="container">
          <h2 class="text-center">Course Archive</h2>
        @foreach ($courses as $course)
          <div class="col-md-4">
          <div class="card" style="width: 100%; margin-top:5px; margin-bottom:5px;  ">
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
      </section>
      <!--=========== END COURSE BANNER SECTION ================-->
@endsection