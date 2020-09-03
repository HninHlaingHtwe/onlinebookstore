<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>World Book</title>
        <meta name="description" content="">

        <meta name="csrf-token" content="{{csrf_token()}}">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/favicon.png')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
           
            <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

            {{-- <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.js.map')}}">
 --}}
            <link rel="stylesheet" href="{{asset('frontend/fonts/icofont.min.css')}}">

           <!-- Custom CSS -->
          <link rel="stylesheet" type="text/css" href="{{asset('custom/style.css')}}">

          <link rel="stylesheet" type="text/css" href="{{asset('css/font/font.css')}}">

        
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('frontend/img/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
               <div class="header-bottom  header-sticky bg-light" style="color: white;">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
                                <div class="logo">
                                  <a href="{{route('index')}}"><img src="{{asset('frontend/img/booklogo.jpeg')}}" style="width:150px;height:40px;" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-2">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                 
                                        <ul id="navigation">                         
                                            <li><a href="{{route('index')}}">Home</a></li>
                                            <li>
                                              <a href="{{route('category')}}">Category</a>

                                            </li>
                                            <li>
                                              <a href="{{route('author')}}">Author</a>
                                            </li>
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                            @guest
                                            <li><a href="{{route('login')}}">Login</a></li>
                                            <li><a href="{{route('register')}}">Register</a></li>
                                            @else
                                            <li>
                                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                             {{ Auth::user()->name }}
                                             </a>

                                                <ul class="submenu">
                                                    <li>
                                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                                 </a>

                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                     @csrf
                                                 </form>
                                                    </li>
                                                    <li>
                                                     <a href="#"> Profile </a>
                                                    </li>
                                                    <li>
                                                      <a href="{{route('userlist')}}">Order History</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            @endguest
                                        </ul>
                                    </nav>
                                </div>
                            </div> 

                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-9 fix-card pt-2">
                                <ul class="header-right f-right d-none d-lg-block justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="has-search d-xl-block d-lg-block d-none ">
                                            <div class="input-group">
                                                    <input class="form-control pl-4 border-right-0 border" type="search" placeholder="Serach Books" id="">
                                                    <span class="input-group-append">
                                                        <div class="input-group-text bg-transparent">
                                                          <i class="icofont-search-2 searchbook"></i>
                                                        </div>
                                                    </span>

                                                </div>
                                        </div>
                                     </li>
                                    <li>
                                        <div class="shopping-card">
                                            <ul>
                                                  <li>
                                                      <a href="{{route('book')}}">
                                                         <i class="icofont-shopping-cart"></i>
                                                          <span class="shoppingcartNoti" style="color: black;">0</span>
                                                      </a>
                                                  </li>
                                                  {{-- <li>
                                                   <a href="">
                                                  <div class="header__cart__price">item: <span class="shoppingcartTotal"></span></div>
                                                  </a>
                                                  </li> --}}
                                            </ul>
                                              
                                        </div>
                                    </li> 
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-xl-none d-lg-none"></div>
                            </div>
                        </div>
                    </div>    
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

   {{$slot}}

       <!-- Footer Section Begin -->
    <footer>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with by <a href="http://myanmaritc.com/" target="_blank"> MMIT </a> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        {{-- <script src="{{asset('frontend/js/modernizr-3.5.0.min.js')}}"></script> --}}
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('frontend/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/js/slick.min.js')}}"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('frontend/js/wow.min.js')}}"></script>
		<script src="{{asset('frontend/js/animated.headline.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('frontend/js/contact.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.form.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('frontend/js/mail-script.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('frontend/js/plugins.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>


        <script src="{{asset('shoppingbook.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

        @yield('script_content')
        
    </body>
</html>