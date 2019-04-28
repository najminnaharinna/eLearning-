@extends('website.index')

@section('content')

<div class="container" >
    <h1 class="about-page" style="margin-top: 160px; text-decoration:underline;">Welcome Our Courses</h1>

    <div class="clearfix">

        <div class="col-md-4">
            @foreach ($lesson->course->sections as $section)
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

        <div class="col-md-8">
            <h2>{{ $lesson->title }}</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $lesson->video_url }}" allowfullscreen></iframe>
            </div>
            <div>
                {!! $lesson->discription !!}
            </div>

            <div>
                <div id="disqus_thread"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://elearning-8.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
            </div>
        </div>
    </div>

   
    
</div>
@endsection