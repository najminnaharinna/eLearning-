@extends('website.index')

@section('content')
    
@endsection

@section('about')
<!--=========== BEGIN ABOUT US SECTION ================-->
<div class="container" > 
    <h1 class="about-page" style="margin-top: 85px;">Welcome Our Home Page</h1>     
    <section id="aboutUs">
        <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">About Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
                <li class="active"><a href="#news" data-toggle="tab">News</a></li>
                <li><a href="#notice" data-toggle="tab">Notice</a></li>
                <li><a href="#events" data-toggle="tab">Events</a></li>         
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Start news tab content -->
                <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
                    <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/news.jpg')}}" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">27.02.15</span>
                        </div>
                    </div>                    
                    </li>
                    <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/news.jpg')}}" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">28.02.15</span>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/news.jpg')}}" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">28.02.15</span>
                        </div>
                    </div>
                    </li>
                </ul>                
                <a class="see_all" href="#">See All</a>
                </div>
                <!-- Start notice tab content -->  
                <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                    <ul class="news_tab">
                    <li>
                        <div class="media">
                        <div class="media-left">
                            <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/news.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">27.02.15</span>
                        </div>
                        </div>                   
                    </li>
                    <li>
                        <div class="media">
                        <div class="media-left">
                            <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/notice.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">28.02.15</span>             
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                        <div class="media-left">
                            <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/notice.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">28.02.15</span>             
                        </div>
                        </div>
                    </li>                                    
                    </ul>
                    <ul class="news_tab">
                    <li>
                        <div class="media">
                        <div class="media-left">
                            <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/notice.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                        <span class="feed_date">27.02.15</span>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                        <div class="media-left">
                            <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/notice.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">28.02.15</span>          
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                        <div class="media-left">
                            <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/notice.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                        <span class="feed_date">28.02.15</span>
                        </div>
                        </div>
                    </li>                                    
                    </ul>
                </div>               
                </div>
                <!-- Start events tab content -->
                <div class="tab-pane fade " id="events">
                <ul class="news_tab">
                    <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/news.jpg')}}" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">27.02.15</span>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/news.jpg')}}" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">28.02.15</span>                
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="#">
                            <img class="media-object" src="{{asset('website/img/news.jpg')}}" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">28.02.15</span>                
                        </div>
                    </div>
                    </li>                  
                </ul>
                <a class="see_all" href="#">See All</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</div>
  <!--=========== END ABOUT US SECTION ================--> 
@endsection