@extends('layouts.website')

@section('main-content')
<div class="container" >
    <h1 class="about-page" style="margin-top: 45px; margin-bottom:25px; color:#02aeca; font-size:40px; text-align:center;text-decoration: underline;
    font-weight: bolder;">Welcome Our Courses</h1>

    <h2 class="course-description">{{ $course->title }}</h2>
  <div class="row">
    <div class="col-md-6 col-md-offset-2" >
      
      <img src="{{ url($course->image) }}" alt="">  
    </div>
    <div class="col-md-6 col-md-offset-2" >
        <p  class="course-description">{!! $course->description !!}</p>
    </div>
  </div>

    <div>
      @foreach ($course->sections as $section)
        <div class="accordion " id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-info btn-block col-md-6 float-left" style="font-weight: bolder;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  {{$section->title}}
                </button>
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                @foreach ($section->lessons as $lesson)
                  <ul class="list-group col-md-6" style="text-align:center;">
                    <a href="{{ route('lesson-details',[$lesson->id, str_slug($lesson->title)]) }}">
                      <li class="list-group-item" style="margin-top:5px; background:#e4e4e4;" aria-disabled="true">{{$lesson->title}}
                         <small>{{ $lesson->instructor->name }}</small></li>
                    </a>
                  </ul>
                @endforeach
                  
              </div>
            </div>
          </div>
        </div>
      @endforeach
      
    </div>
</div>
@endsection

@section('content')


@endsection

