<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Noosi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('user2/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user2/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('user2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user2/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('user2/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('user2/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('user2/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('user2/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user2/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('user2/css/style.css')}}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <!-- <span class="text">+ 1235 2355 98</span> -->
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <!-- <span class="text">NOOSI@email.com</span> -->
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						   
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">NOOSI TeleConnect</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
			<li class="nav-item">
			  @if (Route::has('login'))
                                @auth
                                    <a href="{{url('/redirect')}}" class="nav-link">Home</a>
                                @else
                                    <a href="{{url('/')}}" class="nav-link">Home</a>
                                @endauth
                                @endif
			</li>
	       
	          <li class="nav-item"><a href="{{ url('consultation') }}" class="nav-link"><span>Consultation</span></a></li>
			  <li class="nav-item"><a href="{{ url('bookings_view_today') }}" class="nav-link"><span>Bookings</span></a></li>
	          <li class="nav-item"><a href="{{ url('doctor_dr') }}" class="nav-link"><span>Doctors</span></a></li>
	          <!-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li> -->
			  <li class="nav-item"><a href="{{ url('blogs') }}" class="nav-link"><span>Blog</span></a></li>
	         
	          <!-- <li class="nav-item cta mr-md-2"><a href="appointment.html" class="nav-link">Appointment</a></li> -->
	          @if (Route::has('login'))
                               
                                    @auth
                                        <li class="nav-item">
                                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
    @csrf
</form>
                                        
                                        </li> 

                                    @else
                                        
                                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" data-toggle="modal"><i class="icon-user"></i>Login</a></li>

                                        <!-- @if (Route::has('register'))
                                   
                                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"class="ml-4 text-sm text-gray-700 underline">Signup</a></li>
                                        @endif -->
                                    @endauth
                                
                            @endif
	        </ul>
	      </div>
	    </div>
	  </nav>