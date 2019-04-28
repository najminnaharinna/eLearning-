@extends('website.index')

@section('content')

<div class="container" >
    <h1 class="about-page" style="margin-top: 160px; text-decoration:underline;">Welcome Our Courses</h1>

    <h2>{{ $course->title }}</h2>
    <div>
      <img src="{{ url($course->image) }}" alt="">
      <p class="mt-4">{!! $course->description !!}</p>
    </div>

    <div>
      @foreach ($course->sections as $section)
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  {{$section->title}}
                </button>
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                @foreach ($section->lessons as $lesson)
                  <ul class="list-group">
                    <a href="{{ route('lesson-details',[$lesson->id, str_slug($lesson->title)]) }}">
                      <li class="list-group-item" aria-disabled="true">{{$lesson->title}}
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