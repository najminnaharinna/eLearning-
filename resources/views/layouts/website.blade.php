@extends('layouts.master')

<div class="container-fulid background">
    <div class="row">
      <div class="col-md-12 text-center">
        <a class="navbar-brand" href="{{ url('home') }}" style="margin-top:15px; text-align:center;margin-left: 300px;"><span style="font-family: cursive;font-size: 30px;
            font-weight: bolder;color: #03f521;text-decoration: underline;">ONLINE</span> <span style="color:cyan; font-size: 32px;">Aducation</span></a>
        {{-- <P style="color: #000;">A HUGE SELECTION OF TICKETS ONLINE</P> --}}
          <ul class="top_header_social social_icon" style="float:right; margin-right:30px;">
            <li><a href="http://www.facebook.com" target="_blank"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#"><span class="fa fa-wifi"></span></a></li>
          </ul>

      </div>
          
    </div>		
</div>

@section('menubar')

<nav class="navbar navbar-expand-lg custome-nav-color ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 30px;">
            <li><a class="nav-link nav-color active" href="{{ url('home') }}">Home</a></li>
            <li><a class="nav-link nav-color" href="{{url('about')}}">About Us</a></li>
            <li><a class="nav-link nav-color" href="{{url('courses')}}">Course</a></li>
            <li><a class="nav-link nav-color" href="#">Gallery</a></li>
            <li><a class="nav-link nav-color" href="{{url('contact')}}">Contact</a></li>
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
            </button>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                @if(Auth::check())
                @include('includes.user-menu')
                @else 
        
                    <ul class="navbar-nav mr-auto">
                        <a href="{{ route('login') }}" class="btn btn-info login ">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-info registation">Register</a>
                    </ul>
        
                @endif
            </li>
        </ul>
    </div>
</nav>    

@endsection


@section('main-content')
    <div class="container-fluid">

        @yield('content')

    </div>
@endsection

@section('footer')
<footer style="background:#1f1f1f;">
        <!-- Start footer top area -->
        <div class="footer_top">
          <div class="container" style="color:#fff;">
            <div class="row">
              <div class="col-ld-3  col-md-3 col-sm-3">
                <div class="single_footer_widget">
                  <h3>About Us</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
              </div>
              <div class="col-ld-3  col-md-3 col-sm-3">
                <div class="single_footer_widget">
                  <h3 style="text-align: center;">Community</h3>
                  <ul class="footer_widget_nav" >
                    <li><a href="#" class="color">Our Tutors</a></li>
                    <li><a href="#" class="color">Our Students</a></li>
                    <li><a href="#" class="color">Our Team</a></li>
                    <li><a href="#" class="color">Forum</a></li>
                    <li><a href="#" class="color">News &amp; Media</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-ld-3  col-md-3 col-sm-3">
                <div class="single_footer_widget">
                  <h3 style="margin-left: 24px;">Others</h3>
                  <ul class="footer_widget_nav">
                    <li><a href="#" class="color">Link 1</a></li>
                    <li><a href="#" class="color">Link 2</a></li>
                    <li><a href="#" class="color">Link 3</a></li>
                    <li><a href="#" class="color">Link 4</a></li>
                    <li><a href="#" class="color">Link 5</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-ld-3  col-md-3 col-sm-3">
                <div class="single_footer_widget">
                  <h3>Social Links</h3>
                  <ul class="footer_social">
                    <li class="social_icon"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li class="social_icon"><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="social_icon"><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="social_icon"><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="social_icon"><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End footer top area -->
</footer>
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span style="color:#000;">Copyright &copy; All Rights Reserved | Najmin Nahar's Website 2019</span>
    </div>
  </div>
</footer>
<div class="class=container-fulid border" style="background: #4e808c;padding: 6px;">
  <div class="container"></div>
</div>
@endsection