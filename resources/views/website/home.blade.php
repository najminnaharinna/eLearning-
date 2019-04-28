@extends('website.index')





@section('slider')


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('website/img/slider/2.jpg')}}" class="d-block w-100" alt="Slider Picture">
        </div>
        <div class="carousel-item">
          <img src="{{asset('website/img/slider/3.jpg')}}" class="d-block w-100" alt="Slider Picture">
        </div>
        <div class="carousel-item">
          <img src="{{asset('website/img/slider/4.jpg')}}" class="d-block w-100" alt="Slider Picture">
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
@endsection

@section('whyus')
    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
        <!-- Start why us top -->
        <div class="row">        
          <div class="col-lg-12 col-sm-12">
            <div class="whyus_top">
              <div class="container">
                <!-- Why us top titile -->
                <div class="row">
                  <div class="col-lg-12 col-md-12"> 
                    <div class="title_area">
                      <h2 class="title_two">Why Us</h2>
                      <span></span> 
                    </div>
                  </div>
                </div>
                <!-- End Why us top titile -->
                <!-- Start Why us top content  -->
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_whyus_top wow fadeInUp">
                      <div class="whyus_icon">
                        <span class="fa fa-desktop"></span>
                      </div>
                      <h3>Technology</h3>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_whyus_top wow fadeInUp">
                      <div class="whyus_icon">
                        <span class="fa fa-users"></span>
                      </div>
                      <h3>Best Tutor</h3>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_whyus_top wow fadeInUp">
                      <div class="whyus_icon">
                        <span class="fa fa-flask"></span>
                      </div>
                      <h3>Practical Training</h3>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_whyus_top wow fadeInUp">
                      <div class="whyus_icon">
                        <span class="fa fa-support"></span>
                      </div>
                      <h3>Support</h3>
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
@endsection

@section('row')
<div class="row">        
    <div class="col-lg-12 col-sm-12">
      <div class="whyus_bottom">            
        <div class="slider_overlay"></div>
        <div class="container">               
          <div class="skills">                
            <!-- START SINGLE SKILL-->
            <div class="col-lg-3 col-md-3 col-sm-3">
             <div class="single_skill wow fadeInUp">
               <div id="myStat" data-dimension="150" data-text="35%" data-info="" data-width="10" data-fontsize="25" data-percent="35" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                <h4>Repeate Learners</h4>                      
              </div>
            </div>
            <!-- START SINGLE SKILL-->
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single_skill wow fadeInUp">
                <div id="myStathalf2" data-dimension="150" data-text="90%" data-info="" data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                <h4>Success Rate</h4>
              </div>
            </div>
            <!-- START SINGLE SKILL-->
            <div class="col-lg-3 col-md-3 col-sm-3">                 
              <div class="single_skill wow fadeInUp">
                <div id="myStat2" data-dimension="150" data-text="100%" data-info="" data-width="10" data-fontsize="25" data-percent="100" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                <h4>Student Engagement</h4>
              </div>
            </div>
            <!-- START SINGLE SKILL-->
            <div class="col-lg-3 col-md-3 col-sm-3">                 
              <div class="single_skill wow fadeInUp">
                <div id="myStat3" data-dimension="150" data-text="65%" data-info="" data-width="10" data-fontsize="25" data-percent="65" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                <h4>Certified Courses</h4>
              </div>
            </div>
          </div>
        </div>            
      </div>
    </div>        
</div>
@endsection

@section('courses')
<!--=========== BEGIN OUR COURSES SECTION ================-->
<section id="ourCourses">
        <div class="container">
         <!-- Our courses titile -->
          <div class="row">
            <div class="col-lg-12 col-md-12"> 
              <div class="title_area">
                <h2 class="title_two">Our Courses</h2>
                <span></span> 
              </div>
            </div>
          </div>
          <!-- End Our courses titile -->
          <!-- Start Our courses content -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="ourCourse_content">
                <ul class="course_nav">
                  <li>
                    <div class="single_course">
                      <div class="singCourse_imgarea">
                        <img src="{{asset('website/img/course-1.jpg')}}" />
                        <div class="mask">                         
                          <a href="#" class="course_more">View Course</a>
                        </div>
                      </div>
                      <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                      </div>
                      <div class="singCourse_author">
                        <img src="{{asset('website/img/author.jpg')}}" alt="img">
                        <p>Richard Remus, Teacher</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single_course">
                      <div class="singCourse_imgarea">
                        <img src="{{asset('website/img/course-2.jpg')}}" />
                        <div class="mask">                         
                          <a href="#" class="course_more">View Course</a>
                        </div>
                      </div>
                      <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                      </div>
                      <div class="singCourse_author">
                        <img src="{{asset('website/img/author.jpg')}}" alt="img">
                        <p>Richard Remus, Teacher</p>
                      </div>
                    </div>
                  </li> 
                  <li>
                    <div class="single_course">
                      <div class="singCourse_imgarea">
                        <img src="{{asset('website/img/course-1.jpg')}}" />
                        <div class="mask">                         
                          <a href="#" class="course_more">View Course</a>
                        </div>
                      </div>
                      <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                      </div>
                      <div class="singCourse_author">
                        <img src="{{asset('website/img/author.jpg')}}" alt="img">
                        <p>Richard Remus, Teacher</p>
                      </div>
                    </div>
                  </li>  
                  <li>
                    <div class="single_course">
                      <div class="singCourse_imgarea">
                        <img src="{{asset('website/img/course-2.jpg')}}" />
                        <div class="mask">                         
                          <a href="#" class="course_more">View Course</a>
                        </div>
                      </div>
                      <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                      </div>
                      <div class="singCourse_author">
                        <img src="{{asset('website/img/author.jpg')}}" alt="img">
                        <p>Richard Remus, Teacher</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single_course">
                      <div class="singCourse_imgarea">
                        <img src="{{asset('website/img/course-1.jpg')}}" />
                        <div class="mask">                         
                          <a href="#" class="course_more">View Course</a>
                        </div>
                      </div>
                      <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                      </div>
                      <div class="singCourse_author">
                        <img src="{{asset('website/img/author.jpg')}}" alt="img">
                        <p>Richard Remus, Teacher</p>
                      </div>
                    </div>
                  </li> 
                  <li>
                    <div class="single_course">
                      <div class="singCourse_imgarea">
                        <img src="{{asset('website/img/course-2.jpg')}}" />
                        <div class="mask">                         
                          <a href="#" class="course_more">View Course</a>
                        </div>
                      </div>
                      <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                      </div>
                      <div class="singCourse_author">
                        <img src="{{asset('website/img/author.jpg')}}" alt="img">
                        <p>Richard Remus, Teacher</p>
                      </div>
                    </div>
                  </li>                
                </ul>
              </div>
            </div>
          </div>
          <!-- End Our courses content -->
        </div>
      </section>
      <!--=========== END OUR COURSES SECTION ================--> 
    
@endsection

@section('tutors')
    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <section id="ourTutors">
        <div class="container">
         <!-- Our courses titile -->
          <div class="row">
            <div class="col-lg-12 col-md-12"> 
              <div class="title_area">
                <h2 class="title_two">Our Tutors</h2>
                <span></span> 
              </div>
            </div>
          </div>
          <!-- End Our courses titile -->
  
          <!-- Start Our courses content -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="ourTutors_content">
                <!-- Start Tutors nav -->
                <ul class="tutors_nav">
                  <li>
                    <div class="single_tutors">
                      <div class="tutors_thumb">
                        <img src="{{asset('website/img/author.jpg')}}" />                      
                      </div>
                      <div class="singTutors_content">
                        <h3 class="tutors_name">Jame Burns</h3>
                        <span>Technology Teacher</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      </div>
                      <div class="singTutors_social">
                        <ul class="tutors_socnav">
                          <li><a class="fa fa-facebook" href="#"></a></li>
                          <li><a class="fa fa-twitter" href="#"></a></li>
                          <li><a class="fa fa-instagram" href="#"></a></li>
                          <li><a class="fa fa-google-plus" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single_tutors">
                      <div class="tutors_thumb">
                        <img src="{{asset('website/img/course-1.jpg')}}" />                      
                      </div>
                      <div class="singTutors_content">
                        <h3 class="tutors_name">Jame Burns</h3>
                        <span>Technology Teacher</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      </div>
                      <div class="singTutors_social">
                        <ul class="tutors_socnav">
                          <li><a class="fa fa-facebook" href="#"></a></li>
                          <li><a class="fa fa-twitter" href="#"></a></li>
                          <li><a class="fa fa-instagram" href="#"></a></li>
                          <li><a class="fa fa-google-plus" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single_tutors">
                      <div class="tutors_thumb">
                        <img src="{{asset('website/img/author.jpg')}}" />                      
                      </div>
                      <div class="singTutors_content">
                        <h3 class="tutors_name">Jame Burns</h3>
                        <span>Technology Teacher</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      </div>
                      <div class="singTutors_social">
                        <ul class="tutors_socnav">
                          <li><a class="fa fa-facebook" href="#"></a></li>
                          <li><a class="fa fa-twitter" href="#"></a></li>
                          <li><a class="fa fa-instagram" href="#"></a></li>
                          <li><a class="fa fa-google-plus" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single_tutors">
                      <div class="tutors_thumb">
                        <img src="{{asset('website/img/course-1.jpg')}}" />                      
                      </div>
                      <div class="singTutors_content">
                        <h3 class="tutors_name">Jame Burns</h3>
                        <span>Technology Teacher</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      </div>
                      <div class="singTutors_social">
                        <ul class="tutors_socnav">
                          <li><a class="fa fa-facebook" href="#"></a></li>
                          <li><a class="fa fa-twitter" href="#"></a></li>
                          <li><a class="fa fa-instagram" href="#"></a></li>
                          <li><a class="fa fa-google-plus" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single_tutors">
                      <div class="tutors_thumb">
                        <img src="{{asset('website/img/author.jpg')}}" />                      
                      </div>
                      <div class="singTutors_content">
                        <h3 class="tutors_name">Jame Burns</h3>
                        <span>Technology Teacher</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      </div>
                      <div class="singTutors_social">
                        <ul class="tutors_socnav">
                          <li><a class="fa fa-facebook" href="#"></a></li>
                          <li><a class="fa fa-twitter" href="#"></a></li>
                          <li><a class="fa fa-instagram" href="#"></a></li>
                          <li><a class="fa fa-google-plus" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single_tutors">
                      <div class="tutors_thumb">
                        <img src="{{asset('website/img/course-1.jpg')}}" />                      
                      </div>
                      <div class="singTutors_content">
                        <h3 class="tutors_name">Jame Burns</h3>
                        <span>Technology Teacher</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      </div>
                      <div class="singTutors_social">
                        <ul class="tutors_socnav">
                          <li><a class="fa fa-facebook" href="#"></a></li>
                          <li><a class="fa fa-twitter" href="#"></a></li>
                          <li><a class="fa fa-instagram" href="#"></a></li>
                          <li><a class="fa fa-google-plus" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>                                             
                </ul>
              </div>
            </div>
          </div>
          <!-- End Our courses content -->
        </div>
      </section>
      <!--=========== END OUR TUTORS SECTION ================--> 
@endsection



