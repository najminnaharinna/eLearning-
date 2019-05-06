@extends('layouts.website')

@section('content')
    
    <!--Form with header-->
    <div class="card container" style="margin-top:100px; margin-bottom: 20px;">
  
            <!--Header-->
            <div class="header peach-gradient">
        
              <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold" style="margin-top: 45px; margin-bottom:25px; color:#02aeca; font-size:40px; text-align:center;text-decoration: underline;
                font-weight: bolder;" >Contact Us</h3>
              </div>
        
            </div>
            <!--Header-->
        
            <div class="card-body mx-4">
        
              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form104" class="form-control">
                <label for="form104">Your name</label>
              </div>
        
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" id="form105" class="form-control">
                <label for="form105">Your email</label>
              </div>
        
              <div class="md-form">
                <i class="fas fa-tag prefix grey-text"></i>
                <input type="text" id="form106" class="form-control">
                <label for="form106">Subject</label>
              </div>
        
              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea id="form107" class="md-textarea form-control" rows="5"></textarea>
                <label for="form107">Your message</label>
              </div>
        
        
              <!--Grid row-->
              {{-- <div class="row d-flex align-items-center mb-3 mt-4"> --}}
        
                <!--Grid column-->
                <button class="btn btn-info btn-block" type="submit" style="color:fff;">Send</button>
                <!--Grid column-->
        
              {{-- </div> --}}
              <!--Grid row-->
            </div>
        
          </div>
          <!--/Form with header-->
          
@endsection 