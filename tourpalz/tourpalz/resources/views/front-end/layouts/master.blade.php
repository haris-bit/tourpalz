<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="landing page starter kit">
  <meta name="keywords" content="bootstrap 5, saas, landing page">
  <meta name="author" content="asaduzzaman">
  <title>Tourpalz</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/fonts/material-icon.css">
  <link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/fonts/fontawesome.css">
  <link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/fonts/ff-1.css">
  <link rel="icon" href="{{ asset('public/front-end/')}}/img/favicon.png" type="image/png">
  <link rel="stylesheet" href="https://unpkg.com/leaflet%401.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
  <link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/plugins.css">
  <link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/style.css">
  <link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/custom.css">
</head>

<body>
  <!-- preloader -->
  <div class="preloader">
    <div class="preloader__img">
      <img src="{{ asset('public/front-end/')}}/img/favicon.png" alt="image">
    </div>
  </div>
  <!-- preloader End -->
  
  <!-- Header -->
  <header class="header header--sticky border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="menu d-lg-flex justify-content-lg-between align-items-lg-center">
            <div class="menu-mobile-nav d-flex align-items-center justify-content-between py-3 py-lg-0 order-lg-2">
              <button class="menu-toggle w-10 h-10 p-0 border-0 lh-1 bg-primary-50 clr-primary-500 transition :clr-primary-50 :bg-primary-500 rounded-1 flex-shrink-0 order-2 order-lg-1 d-lg-none">
                <span class="material-symbols-outlined mat-icon fs-28"> menu </span>
              </button>
              <ul class="list list-row gap-4 flex-wrap align-items-center order-1">
                <!-- <li>
                  <div class="dropdown">
                    <a href="#" class="link d-flex align-items-center gap-2 p-2 rounded-pill bg-primary-5p clr-neutral-500" data-bs-toggle="dropdown" data-bs-offset="0,14">
                      <ul class="list list-row list-divider-half-xs align-items-center lh-1">
                        <li>
                          <span class="material-symbols-rounded mat-icon"> language </span>
                        </li>
                        <li>
                          <span class="material-symbols-rounded mat-icon"> paid </span>
                        </li>
                      </ul>
                      <span class="material-symbols-rounded mat-icon flex-shrink-0"> expand_more </span>
                    </a>
                    <div class="dropdown-menu dropdown-start p-0 border border-neutral-30">
                      <div class="p-4">
                        <ul class="list list-sm-row flex-wrap gap-1 gap-sm-0 w-24ch">
                          <li class="w-sm-50 p-1">
                            <a href="#" class="link d-inline-block dropdown-item clr-neutral-500 bg-neutral-20 :bg-neutral-20 rounded">
                              <span class="d-block fw-medium mb-1"> English </span>
                              <span class="d-block fs-12 clr-neutral-70"> United States </span>
                            </a>
                          </li>
                          <li class="w-sm-50 p-1">
                            <a href="#" class="link d-inline-block dropdown-item clr-neutral-500 :bg-neutral-20 rounded">
                              <span class="d-block fw-medium mb-1"> Spanish </span>
                              <span class="d-block fs-12 clr-neutral-70"> Spain </span>
                            </a>
                          </li>
                          <li class="w-sm-50 p-1">
                            <a href="#" class="link d-inline-block dropdown-item clr-neutral-500 :bg-neutral-20 rounded">
                              <span class="d-block fw-medium mb-1"> Bengali </span>
                              <span class="d-block fs-12 clr-neutral-70"> Bangladesh </span>
                            </a>
                          </li>
                          <li class="w-sm-50 p-1">
                            <a href="#" class="link d-inline-block dropdown-item clr-neutral-500 :bg-neutral-20 rounded">
                              <span class="d-block fw-medium mb-1"> Hindi </span>
                              <span class="d-block fs-12 clr-neutral-70"> India </span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li> -->
                <li>
                  <div class="dropdown">
                    <a href="#" class="link d-grid place-content-center w-10 h-10 rounded-circle bg-primary-5p clr-neutral-500" data-bs-toggle="dropdown" data-bs-offset="0,16">
                      <span class="material-symbols-rounded mat-icon position-relative"> notifications <span class="d-inline-block position-absolute top-0 end-0 w-2 h-2 rounded-circle bg-primary-300"></span>
                      </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl-end p-0 border border-neutral-30">
                      <div class="p-4 p-xxl-6 max-width">
                        <h5 class="mb-4"> Notifications </h5>
                        <ul class="list gap-2">
                          <li>
                            <a href="#" class="link d-flex gap-4 dropdown-item px-0 px-md-4">
                              <div class="flex-shrink-0 d-none d-sm-block">
                                <img src="{{ asset('public/front-end/')}}/img/user-3.jpg" alt="image" class="img-fluid w-12 h-12 rounded-circle objec-fit-cover">
                              </div>
                              <div class="flex-grow-1 white-space-normal notifications-content">
                                <h6 class="mb-0">Peter Parker</h6>
                                <p class="fs-14 clr-neutral-500 mb-1"> New message alert! @trending </p>
                                <span class="d-block fs-12 clr-neutral-100"> 6 Sec ago </span>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="link d-flex gap-4 dropdown-item px-0 px-md-4">
                              <div class="flex-shrink-0 d-none d-sm-block">
                                <img src="{{ asset('public/front-end/')}}/img/user-1.jpg" alt="image" class="img-fluid w-12 h-12 rounded-circle objec-fit-cover">
                              </div>
                              <div class="flex-grow-1 white-space-normal notifications-content">
                                <h6 class="mb-0">Gal Gadot</h6>
                                <p class="fs-14 clr-neutral-500 mb-1"> Measure actions your users take Me </p>
                                <span class="d-block fs-12 clr-neutral-100"> 3 Min ago </span>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="link d-flex gap-4 dropdown-item px-0 px-md-4">
                              <div class="flex-shrink-0 d-none d-sm-block">
                                <img src="{{ asset('public/front-end/')}}/img/user-2.jpg" alt="image" class="img-fluid w-12 h-12 rounded-circle objec-fit-cover">
                              </div>
                              <div class="flex-grow-1 white-space-normal notifications-content">
                                <h6 class="mb-0">Eva Green</h6>
                                <p class="fs-14 clr-neutral-500 mb-1"> Measure actions your users take </p>
                                <span class="d-block fs-12 clr-neutral-100"> 1 Week ago </span>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown">
                    <a href="#" class="link d-inline-block" data-bs-toggle="dropdown" data-bs-offset="0,16">
                      <img src="{{ asset('public/front-end/')}}/img/user-1.jpg" alt="image" class="img-fluid w-10 h-10 rounded-circle objec-fit-cover">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-0 border border-neutral-30">
                      <div class="p-6">
                        <div class="d-flex align-items-center gap-4 max-width">
                          <img src="{{ asset('public/front-end/')}}/img/user-1.jpg" alt="image" class="img-fluid w-12 h-12 rounded-circle object-fit-cover flex-shrink-0">
                          <div class="flex-grow-1">
                            <h5 class="mb-0">Peter Parker</h5>
                            <span class="d-block fs-14"> Los Angeles, CA </span>
                          </div>
                        </div>
                        <div class="hr-dashed mt-4 mb-2"></div>
                        <ul class="list">
                          <li>
                            <a href="#" class="link d-flex align-items-center gap-3 clr-neutral-400 dropdown-item px-2">
                              <span class="material-symbols-outlined mat-icon fs-28 flex-shrink-0"> person </span>
                              <span class="d-block fs-14 fw-medium flex-grow-1"> My Account </span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="link d-flex align-items-center gap-3 clr-neutral-400 dropdown-item px-2">
                              <span class="material-symbols-outlined mat-icon fs-28 flex-shrink-0"> event_note </span>
                              <span class="d-block fs-14 fw-medium flex-grow-1"> My Bookings </span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="link d-flex align-items-center gap-3 clr-neutral-400 dropdown-item px-2">
                              <span class="material-symbols-outlined mat-icon fs-28 flex-shrink-0"> favorite </span>
                              <span class="d-block fs-14 fw-medium flex-grow-1"> Wishlist </span>
                            </a>
                          </li>
                        </ul>
                        <div class="hr-dashed my-2"></div>
                        <ul class="list">
                          <li>
                            <a href="#" class="link d-flex align-items-center gap-3 clr-neutral-400 dropdown-item px-2">
                              <span class="material-symbols-outlined mat-icon fs-28 flex-shrink-0"> info </span>
                              <span class="d-block fs-14 fw-medium flex-grow-1"> Help </span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="link d-flex align-items-center gap-3 clr-neutral-400 dropdown-item px-2">
                              <span class="material-symbols-outlined mat-icon fs-28 flex-shrink-0"> exit_to_app </span>
                              <span class="d-block fs-14 fw-medium flex-grow-1"> Log out </span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="list list-lg-row menu-nav order-lg-1">
			<li>
              <a href="{{URL::to('/')}}" class="link d-inline-block pt-3">
                <img src="{{ asset('public/front-end/')}}/img/favicon.png" alt="logo" class="logo d-xl-none">
                <img src="{{ asset('public/front-end/')}}/img/logo.png" alt="logo" class="logo d-none d-xl-inline-block">
              </a>
            </li>
			<li class="menu-list current-page">
				<a class="link menu-link" href="{{URL::to('/')}}">Home</a>
			</li>
			<li class="menu-list">
				<a class="link menu-link" href="{{URL::to('/buddies')}}">Buddies</a>
			</li>
			<li class="menu-list">
				<a href="{{URL::to('/service')}}" class="link menu-link"> Service </a>
			</li>
			<li class="menu-list">
				<a href="{{URL::to('/about-us')}}" class="link menu-link"> About Us </a>
			</li>
			<li class="menu-list">
				<a href="{{URL::to('/contact-us')}}" class="link menu-link"> Contact Us </a>
			</li>
           
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- /Header -->
 
  @yield('content')


<!-- Footer -->  
  <div class="bg-primary-3p">
    <div class="section-space">
      <div class="container">
        <div class="row gy-5">
          <div class="col-md-6 col-xl-3">
            <a href="/" class="link d-inline-block mb-6">
              <img src="{{ asset('public/front-end/')}}/img/logo.png" alt="image" class="img-fluid">
            </a>
            <p class=" mb-6"> Welcome to Tourpalz, your one-stop-shop for adventure, culture, and unforgettable experiences!

</p>
            <ul class="list list-row gap-3 flex-wrap">
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary  :bg-primary-300 :">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary  :bg-primary-300 :">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary  :bg-primary-300 :">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary  :bg-primary-300 :">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary  :bg-primary-300 :">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-xl-3">
            <h4 class=" mb-6"> Quick Link </h4>
            <ul class="list gap-2">
              <li>
                <a href="#" class="link d-inline-block  :clr-secondary-300"> About Us </a>
              </li>
              <li>
                <a href="#" class="link d-inline-block  :clr-secondary-300"> Properties </a>
              </li>
              <li>
                <a href="#" class="link d-inline-block  :clr-secondary-300"> Agents </a>
              </li>
              <li>
                <a href="#" class="link d-inline-block  :clr-secondary-300"> FAQs </a>
              </li>
              <li>
                <a href="#" class="link d-inline-block  :clr-secondary-300"> Blog </a>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-xl-3">
            <h4 class=" mb-6"> Contact </h4>
            <ul class="list gap-4">
              <li>
                <div class="d-flex align-items-center gap-4">
                  <div class="w-8 h-8 rounded-circle d-grid place-content-center bg-primary-300  flex-shrink-00">
                    <span class="clr-neutral-0 material-symbols-outlined mat-icon fw-200"> phone_in_talk </span>
                  </div>
                  <p class="mb-0 "> (316) 555-0116 </p>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-4">
                  <div class="w-8 h-8 rounded-circle d-grid place-content-center bg-secondary-300  flex-shrink-00">
                    <span class="clr-neutral-0 material-symbols-outlined mat-icon fw-200"> mark_as_unread </span>
                  </div>
                  <p class="mb-0 "> example@mail.com </p>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-4">
                  <div class="w-8 h-8 rounded-circle d-grid place-content-center bg-tertiary-300  flex-shrink-00">
                    <span class="clr-neutral-0 material-symbols-outlined mat-icon fw-200"> distance </span>
                  </div>
                  <p class="mb-0 "> 31 Brandy Way, Sutton, SM2 6SE </p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-xl-3">
            <h4 class=" mb-6"> Newsletter </h4>
            <p class="mb-6 "> Subscribe our newsletter to get our latest update & news </p>
            <div class="p-2 rounded-pill border border-neutral-200">
              <form action="#" class="d-flex align-items-center">
                <input type="text" placeholder="Email address" class="w-100 border-0 bg-transparent  px-3 py-2  :focus-outline-0">
                <button type="button" class="d-grid place-content-center px-6 py-3 rounded-pill bg-tertiary-300  border-0">
                  <span class="material-symbols-outlined mat-icon fw-300"> send </span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="py-8 border-top border-primary-500">
            <div class="row g-4 align-items-center">
              <div class="col-lg-6">
                <p class="m-0  text-center text-lg-start"> Copyright &copy; 2023 <span class="clr-primary-300">Tourpalz</span>.
                </p>
              </div>
              <div class="col-lg-6">
                <ul class="list list-row align-items-center flex-wrap gap-6 justify-content-center justify-content-lg-end">
                  <li>
                    <a href="#" class="link  :clr-secondary-300"> Sign in </a>
                  </li>
                  <li>
                    <a href="#" class="link  :clr-secondary-300"> Sign Up </a>
                  </li>
                  <li>
                    <a href="#" class="link  :clr-secondary-300"> FAQ </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- /Footer --> 
  <!-- scrpts -->
  <script src="https://unpkg.com/leaflet%401.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <script src="{{ asset('public/front-end/')}}/js/plugins.js"></script>
  <script src="{{ asset('public/front-end/')}}/js/app.js"></script>
</body>


</html>




	