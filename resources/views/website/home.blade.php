@extends('layouts.website')

@section('main-content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('website/img/slider1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('website/img/slider2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('website/img/slider3.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    <!--=========== BEGIN WHY US SECTION ================-->
    <section>
      <!-- Start why us top -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top titile -->
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 style="color:#02aeca; font-size:50px; text-align:center;text-decoration: underline;
                    font-weight: bolder;">Why Us</h2>
                    <span></span> 
                  </div>
                </div>
              </div>
              <!-- End Why us top titile -->
              <!-- Start Why us top content  -->
              <div class="row change">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp" style="text-align:center; margin-top: 10px; color:#000;">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop center" style="font-size:45px;"></span>
                    </div>
                    <h4 style="text-decoration: underline;">Technology</h4>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp" style="text-align:center; margin-top: 15px; color:#000;">
                    <div class="whyus_icon">
                      <span class="fa fa-users" style="font-size:45px;"></span>
                    </div>
                    <h4 style="text-decoration: underline;">Best Tutor</h4>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp" style="text-align:center; color:#000;">
                    <div class="whyus_icon" style="font-size:45px;">
                      <span class="fa fa-flask"></span>
                    </div>
                    <h4 style="text-decoration: underline;">Practical Training</h4>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp" style="text-align:center; color:#000;">
                    <div class="whyus_icon" style="font-size:45px;">
                      <span class="fa fa-support"></span>
                    </div>
                    <h4 style="text-decoration: underline;">Support</h4>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>        
      </div>
      <!-- End why us top -->
    </section>


    <section>  
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <hr style="background: #036096; padding: 3px;">
            </div>	
            <div class="col-md-4">
              <hr style="background: #00d0ff; padding: 3px;">
            </div>	
            <div class="col-md-4">
              <hr style="background: #036096; padding: 3px;">
            </div>		
          </div>
        </div>
    </section>



    <section>
      <div class="container">
        <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two" style="color:#02aeca; font-size:50px; text-align:center;text-decoration: underline;
              font-weight: bolder;">Our Tutors</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row ">
            <div class="tutor">
              <img src="{{asset('website/img/team/05.jpg')}}" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text">Hello I'm Najmin <br> Web Designer <br>& Developer</div>
              </div>
            </div>
            <div class="tutor">
              <img src="{{asset('website/img/team/01.jpg')}}" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text">Hello I'm Alax <br> Photographer</div>
              </div>
            </div>
            <div class="tutor">
              <img src="{{asset('website/img/team/02.jpg')}}" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text">Hello I'm Rashu <br> Typing expart </div>
              </div>
            </div>
            <div class="tutor">
              <img src="{{asset('website/img/team/03.jpg')}}" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text">Hello I'm Rafi <br> Web Designer </div>
              </div>
            </div>
          </div>
          <div class="row ">
              <div class="tutor">
                <img src="{{asset('website/img/team/06.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello I'm Taslima <br> Graphics Designer </div>
                </div>
              </div>
              <div class="tutor">
                <img src="{{asset('website/img/team/07.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello I'm Alamgir <br> Database Designer</div>
                </div>
              </div>
              <div class="tutor">
                <img src="{{asset('website/img/team/04.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello I'm Sumi <br> Network expart</div>
                </div>
              </div>
              <div class="tutor">
                <img src="{{asset('website/img/team/08.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello I'm Saqline <br> UX/UI Designer </div>
                </div>
              </div>
            </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        
        <!-- End Our courses content -->
      </div>
    </section>

    <section>  
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <hr style="background: #036096; padding: 3px;">
            </div>	
            <div class="col-md-4">
              <hr style="background: #00d0ff; padding: 3px;">
            </div>	
            <div class="col-md-4">
              <hr style="background: #036096; padding: 3px;">
            </div>		
          </div>
        </div>
    </section>


    <section>

      <div class="container-fluid" style="text-align:center;background:#d8d8d8;">
        <div style="margin-top: 35px; margin-bottom: 25px; color:#000;"><h2 >Invest in your future and the lives of others.</h2></div>
        <p style="color:#000;">Ready to start your application?</p>
        @if(Auth::check())
          <p style="margin-bottom:50px;"><a class="btn btn-info" href="{{url('courses')}}" style="font-size: 30px;font-weight: bolder;">Start Your Course</a></p>
        @else 
        <p style="margin-bottom:50px;"><a class="btn btn-info" href="{{ route('register') }}" style="font-size: 30px;font-weight: bolder;">APPLY NOW</a></p>
        @endif
      </div>

    </section>
@endsection





