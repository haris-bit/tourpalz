@extends('front-end.layouts.master')

@section('content')

 <!-- Hotel Booking Hero -->
 <div class="tour-hero bg-primary-3p">
    <a href="https://vimeo.com/115041822" class="video-popup link d-grid tour-hero__el tour-hero__el-1">
      <img src="{{ asset('public/front-end/')}}/img/video-btn.png" alt="image" class="img-fluid">
    </a>
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-8 col-xl-6">
          <span class="d-inline-flex align-items-center bg-primary-50 gap-4 rounded-pill py-1 ps-1 pe-5">
            <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
              <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
            </span>
            <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> It's time to go </span>
          </span>
          <h1 class="d2 mt-4 mb-6 max-text-16"> Explore the World with <span class="clr-primary-300">Tourpalz</span>
          </h1>
          <p class="mb-5 fs-20"> Welcome to Tourpalz, your one-stop-shop for adventure, culture, and unforgettable experiences! </p>
        </div>
        <div class="col-xxl-10">
          <form action="#">
            <div class="property-search p-6 rounded-3 bg-neutral-0">
              <div class="property-search__content d-flex flex-wrap justify-content-center align-items-center gap-4">
                <div class="rounded-pill d-flex align-items-center gap-2 px-6">
                 
				<input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5 " placeholder="Search..." id="search">

                </div>
                
             
				<div class="property-search__select property-search__col rounded-pill d-flex align-items-center gap-2 px-6">
                  <span class="material-symbols-outlined mat-icon"> distance </span>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Location</option>
                    <option value="1">New York</option>
                    <option value="2">Chicago</option>
                    <option value="3">Atlanta</option>
                  </select>
                </div>
                <div class="property-search__price property-search__col rounded-pill d-flex align-items-center gap-2 px-6 py-3">
                  <div class="d-flex gap-2 align-items-center">
                    <span class="material-symbols-rounded mat-icon"> add_card </span>
                    <span class="d-inline-block fs-14"> Price </span>
                  </div>
                  <div class="property-search__range d-grid">
                    <input type="range" min="1" max="1000" value="450" class="property-search__range-input" id="myRange" oninput="rangevalue.value=value">
                  </div>
                  <div class="property-search__range-price">
                    <span class="d-inline-block fs-10 clr-primary-300"> $ <output class="property-search__range-value" id="rangevalue">450</output>
                    </span>
                  </div>
                </div>
                <button class="btn rounded-pill property-search__btn property-search__col">
                  <span class="material-symbols-rounded mat-icon"> search </span>
                </button>
              </div>
            </div>
          </form>
          <div class="d-flex align-items-center gap-4 align-items-center flex-wrap mt-10">
            <ul class="list user-group">
              <li>
                <div class="w-13 h-13 border border-neutral-0 rounded-circle overflow-hidden">
                  <img src="{{ asset('public/front-end/')}}/img/user-1.jpg" alt="image" class="w-100 h-100 object-fit-cover">
                </div>
              </li>
              <li>
                <div class="w-13 h-13 border border-neutral-0 rounded-circle overflow-hidden">
                  <img src="{{ asset('public/front-end/')}}/img/user-2.jpg" alt="image" class="w-100 h-100 object-fit-cover">
                </div>
              </li>
              <li>
                <div class="w-13 h-13 border border-neutral-0 rounded-circle overflow-hidden">
                  <img src="{{ asset('public/front-end/')}}/img/user-3.jpg" alt="image" class="w-100 h-100 object-fit-cover">
                </div>
              </li>
              <li>
                <div class="w-13 h-13 border border-neutral-0 rounded-circle overflow-hidden position-relative">
                  <img src="{{ asset('public/front-end/')}}/img/user-4.jpg" alt="image" class="w-100 h-100 object-fit-cover">
                  <span class="d-grid place-content-center position-absolute inset-0 bg-primary-70p">
                    <span class="material-symbols-outlined mat-icon clr-neutral-0"> add </span>
                  </span>
                </div>
              </li>
            </ul>
            <p class="mb-0 fs-18"> 16 people <span class="clr-primary-300 fw-semibold">booked</span> a visit in last 24 hours </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Hotel Booking Hero -->
  <!-- Why Choose Us -->
  <div class="section-space">
    <div class="section-space--sm-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-xl-6 col-xxl-5">
            <div class="text-center">
              <span class="d-inline-flex align-items-center bg-primary-50 gap-4 rounded-pill py-1 ps-1 pe-5">
                <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
                </span>
                <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Why choose us </span>
              </span>
              <h2 class="mt-4 mb-6"> Why Choose Us for Your Next Adventure </h2>
              <p class="mb-0"> If you're looking for an unforgettable travel experience, we believe that our tour company is the perfect choice </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="swiper choice-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide px-3 my-4">
                <div class="border border-neutral-40 :border-0 rounded-4 p-6 p-xl-8 text-center :box-shadow">
                  <img src="{{ asset('public/front-end/')}}/img/duotone-home.png" alt="image" class="img-fluid mx-auto mb-6">
                  <h4 class="mb-4"> Best guide </h4>
                  <p class="mb-0"> Our expert tour guide knows the best about traveling they will guide you all time </p>
                </div>
              </div>
              <div class="swiper-slide px-3 my-4">
                <div class="border border-neutral-40 :border-0 rounded-4 p-6 p-xl-8 text-center :box-shadow">
                  <img src="{{ asset('public/front-end/')}}/img/duotone-discount.png" alt="image" class="img-fluid mx-auto mb-6">
                  <h4 class="mb-4"> Lots of Discount </h4>
                  <p class="mb-0"> We realize ideas from simple to complex, everything becomes easy to use </p>
                </div>
              </div>
              <div class="swiper-slide px-3 my-4">
                <div class="border border-neutral-40 :border-0 rounded-4 p-6 p-xl-8 text-center :box-shadow">
                  <img src="{{ asset('public/front-end/')}}/img/duotone-support.png" alt="image" class="img-fluid mx-auto mb-6">
                  <h4 class="mb-4"> Support 24/7 </h4>
                  <p class="mb-0"> Our customer experience team is available around the clock to ques your ans </p>
                </div>
              </div>
            </div>
          </div>
          <div class="choice-slider__btn-group d-flex justify-content-center gap-4 mt-10">
            <div class="swiper-button-prev choice-slider__btn choice-slider__btn-prev"></div>
            <div class="swiper-button-next choice-slider__btn choice-slider__btn-next"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Why Choose Us -->
  <!-- Featured Travel Buddies -->
  <div class="section-space bg-primary-5p">
    <div class="section-space--sm-bottom">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-xl-6">
            <span class="d-inline-flex align-items-center bg-neutral-0 gap-4 rounded-pill py-1 ps-1 pe-5">
              <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
              </span>
              <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Featured Travel Buddies </span>
            </span>
            <h2 class="mt-4 mb-0"> Our Best Travel Buddies </h2>
          </div>
          <div class="col-xl-6">
            <div class="text-xl-end">
              <a href="{{URL::to('/buddies')}}" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Travel Buddies </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4">
	  @foreach ($data as $buddy)

	  <div class="col-md-6 col-xl-4">
          <div class="property-card">
            <div class="property-card__head">
              <div class="swiper property-card-slider">
                <div class="swiper-wrapper">
                @foreach($buddy['images'] as $image)  
				<div class="swiper-slide">
                    <div class="property-card__img">
                      <img src="{{ asset('public/front-end/')}}/{{ $image }}" alt="image" class="img-fluid w-100">
                    </div>
                  </div>
				@endforeach  
                 
                </div>
                <div class="swiper-pagination property-card-pagination"></div>
                <div class="swiper-button-prev property-card-prev"></div>
                <div class="swiper-button-next property-card-next"></div>
              </div>
              <div class="listing-card__content z-1 pointer-none">
                <div class="d-flex align-items-center justify-content-between">
                  <span class="d-inline-block py-2 px-5 rounded-pill bg-secondary-200 clr-neutral-900"> Top Rating </span>
                </div>
              </div>
            </div>
            <div class="property-card__body">
              <div class="d-flex justify-content-between mb-2">
                <a href="{{URL::to('/buddy/'.$buddy['id'].'/detail')}}" class="link d-block flex-grow-1 clr-neutral-700 :clr-primary-300 fs-20 fw-medium"> {{ $buddy['personName'] }} </a>
                <div class="d-flex align-items-center flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                  <span class="d-block clr-neutral-700"> {{ $buddy['rating'] }} </span>
                </div>
              </div>
              <ul class="list list-row row g-3">
                <li class="col-12">
                  <div class="d-flex align-items-center gap-2">
                    <span class="material-symbols-rounded mat-icon fw-200 clr-secondary-500"> distance </span>
                    <span class="d-block"> {{ $buddy['location'] }}  </span>
                  </div>
                </li>
              
              </ul>
            </div>
            <div class="property-card__body py-0">
              <div class="hr-dashed"></div>
            </div>
            <div class="property-card__body">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span class="d-block fs-20 fw-medium clr-primary-300"> ${{ $buddy['price'] }}  <span class="d-inline-block clr-neutral-500 fs-16 fw-normal"> /day </span>
                </span>
                <a href="{{URL::to('/buddy/'.$buddy['id'].'/detail')}}"  class="btn btn-outline-primary py-2 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> Book Now </a>
              </div>
            </div>
          </div>
        </div>

	  
@endforeach


        
      </div>
    </div>
  </div>
  <!-- /Featured Travel Buddies -->
  <!-- Discount Card -->
  <div class="discount-section-start">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="swiper discount-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="discount-card p-6 p-lg-8 p-xl-10 rounded-4 overflow-hidden position-relative z-1">
                  <img src="{{ asset('public/front-end/')}}/img/discount-img-4.jpg" alt="image" class="h-100 w-100 discount-card__img">
                  <div class="discount-card__content d-flex flex-column align-items-start ms-lg-auto">
                    <span class="d4 fw-semibold d-block clr-neutral-0"> 50% OFF </span>
                    <p class="mb-10 clr-neutral-0 fs-20 max-text-20"> Embark on a Journey of a Lifetime </p>
                    <a href="#" class="link d-inline-block py-3 px-6 fw-semibold clr-primary-300 bg-neutral-0 rounded"> Book Now </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="discount-card p-6 p-lg-8 p-xl-10 rounded-4 overflow-hidden position-relative z-1">
                  <img src="{{ asset('public/front-end/')}}/img/discount-img-3.jpg" alt="image" class="h-100 w-100 discount-card__img">
                  <div class="discount-card__content d-flex flex-column align-items-start ms-lg-auto">
                    <span class="d4 fw-semibold d-block clr-neutral-0 text-start"> 35% OFF </span>
                    <p class="mb-10 clr-neutral-0 fs-20 max-text-20"> Experience the ultimate tour adventure </p>
                    <a href="#" class="link d-inline-block py-3 px-6 fw-semibold clr-secondary-400 bg-neutral-0 rounded"> Book Now </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Discount Card -->
  <!-- Travel Memory -->
  <div class="section-space-top section-space--sm-bottom">
    <div class="container">
      <div class="row g-4 justify-content-between">
        <div class="col-lg-6 col-xxl-5">
          <div class="section-space--sm-bottom pb-lg-0">
            <div class="swiper blog-details-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{ asset('public/front-end/')}}/img/memory-slider-img.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('public/front-end/')}}/img/memory-slider-img.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('public/front-end/')}}/img/memory-slider-img.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('public/front-end/')}}/img/memory-slider-img.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('public/front-end/')}}/img/memory-slider-img.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </div>
              </div>
              <div class="blog-details-slider__btn-group">
                <div class="swiper-button-prev blog-details-slider__btn blog-details-slider__btn-prev">
                </div>
                <div class="swiper-button-next blog-details-slider__btn blog-details-slider__btn-next">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <span class="d-inline-flex align-items-center bg-primary-5p gap-4 rounded-pill py-1 ps-1 pe-5">
            <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
              <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
            </span>
            <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Travel`s Memories </span>
          </span>
          <h2 class="mt-4 mb-6"> Make Lasting Memories Around the World Tour </h2>
          <p class="mb-15"> We also believe in providing our travelers with unique and authentic experiences that you won't find in guidebooks or on standard tours. </p>
          <ul class="list">
            <li>
              <div class="d-grid place-content-center w-9 h-9 rounded-2 bg-primary-300 clr-neutral-0 mb-6 fs-18 fw-semibold"> 01 </div>
              <h4 class="mb-3"> Find Trips That Fit Your Flexible Lifestyle </h4>
              <p class="mb-0"> That's why we offer a range of tours that are designed to fit your flexible lifestyle. </p>
            </li>
            <li>
              <div class="hr-dashed my-8"></div>
            </li>
            <li>
              <div class="d-grid place-content-center w-9 h-9 rounded-2 bg-secondary-300 clr-neutral-0 mb-6 fs-18 fw-semibold"> 02 </div>
              <h4 class="mb-3"> Expert-Guided Travel with Tourpalz </h4>
              <p class="mb-0"> we believe that travel should be a source of joy and inspiration, not stress & worry </p>
            </li>
            <li>
              <div class="hr-dashed my-8"></div>
            </li>
            <li>
              <div class="d-grid place-content-center w-9 h-9 rounded-2 bg-tertiary-300 clr-neutral-0 mb-6 fs-18 fw-semibold"> 03 </div>
              <h4 class="mb-3"> Discover the True Cost of Your Trip </h4>
              <p class="mb-0"> We believe that transparency is key to building trust with our travelers. </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /Travel Memory -->
  <!-- Counter  -->
  <div class="section-space--sm-top section-space-bottom">
    <div class="container">
      <div class="row gy-5 gy-md-0">
        <div class="col-sm-6 col-md-3">
          <div class="text-center">
            <div class="w-24 h-24 d-grid place-content-center bg-primary-50 clr-neutral-0 rounded-circle mx-auto">
              <img src="{{ asset('public/front-end/')}}/img/icon-complete.png" alt="image" class="w-14 h-14 object-fit-contain">
            </div>
            <span class="d-block d4 mt-6 mb-2 clr-neutral-700">
              <span class="counter-up" style="visibility: visible;">3.6</span> k </span>
            <p class="mb-0 clr-neutral-700"> Completed Property </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="text-center">
            <div class="w-24 h-24 d-grid place-content-center bg-primary-50 clr-neutral-0 rounded-circle mx-auto">
              <img src="{{ asset('public/front-end/')}}/img/icon-happy-chat.png" alt="image" class="w-14 h-14 object-fit-contain">
            </div>
            <span class="d-block d4 mt-6 mb-2 clr-neutral-700">
              <span class="counter-up" style="visibility: visible;">2.7</span>k </span>
            <p class="mb-0 clr-neutral-700"> Customer Satisfaction </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="text-center">
            <div class="w-24 h-24 d-grid place-content-center bg-primary-50 clr-neutral-0 rounded-circle mx-auto">
              <img src="{{ asset('public/front-end/')}}/img/icon-agent.png" alt="image" class="w-14 h-14 object-fit-contain">
            </div>
            <span class="d-block d4 mt-6 mb-2 clr-neutral-700">
              <span class="counter-up" style="visibility: visible;">457</span>+ </span>
            <p class="mb-0 clr-neutral-700"> Expert Agents </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="text-center">
            <div class="w-24 h-24 d-grid place-content-center bg-primary-50 clr-neutral-0 rounded-circle mx-auto">
              <img src="{{ asset('public/front-end/')}}/img/icon-award.png" alt="image" class="w-14 h-14 object-fit-contain">
            </div>
            <span class="d-block d4 mt-6 mb-2 clr-neutral-700">
              <span class="counter-up" style="visibility: visible;">78</span>+ </span>
            <p class="mb-0 clr-neutral-700"> Awards Won </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Counter  -->
  <!-- Top Category -->
  <div class="container-fluid container-max">
    <div class="row">
      <div class="col-12">
        <div class="section-space bg-primary-5p rounded-2">
          <div class="section-space--sm-bottom">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-10 col-xl-6">
                  <div class="text-center">
                    <span class="d-inline-flex align-items-center bg-primary-50 gap-4 rounded-pill py-1 ps-1 pe-5">
                      <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                        <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
                      </span>
                      <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Top Categories </span>
                    </span>
                    <h2 class="mt-4 mb-0"> Discover the categories of tours </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row g-4">
              <div class="col-sm-6 col-md-4 col-lg-2">
                <a href="#" class="link d-block">
                  <img src="{{ asset('public/front-end/')}}/img/cat-img-1.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </a>
                <h4 class="mt-6 mb-2 text-center">
                  <a href="#" class="link d-inline-block clr-neutral-700 :clr-primary-300"> Beach </a>
                </h4>
                <p class="mb-0 text-center clr-neutral-500"> 4.5k Places </p>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <a href="#" class="link d-block">
                  <img src="{{ asset('public/front-end/')}}/img/cat-img-2.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </a>
                <h4 class="mt-6 mb-2 text-center">
                  <a href="#" class="link d-inline-block clr-neutral-700 :clr-primary-300"> Mountain </a>
                </h4>
                <p class="mb-0 text-center clr-neutral-500"> 4.5k Places </p>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <a href="#" class="link d-block">
                  <img src="{{ asset('public/front-end/')}}/img/cat-img-3.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </a>
                <h4 class="mt-6 mb-2 text-center">
                  <a href="#" class="link d-inline-block clr-neutral-700 :clr-primary-300"> Heritage </a>
                </h4>
                <p class="mb-0 text-center clr-neutral-500"> 4.5k Places </p>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <a href="#" class="link d-block">
                  <img src="{{ asset('public/front-end/')}}/img/cat-img-4.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </a>
                <h4 class="mt-6 mb-2 text-center">
                  <a href="#" class="link d-inline-block clr-neutral-700 :clr-primary-300"> Desert </a>
                </h4>
                <p class="mb-0 text-center clr-neutral-500"> 4.5k Places </p>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <a href="#" class="link d-block">
                  <img src="{{ asset('public/front-end/')}}/img/cat-img-5.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </a>
                <h4 class="mt-6 mb-2 text-center">
                  <a href="#" class="link d-inline-block clr-neutral-700 :clr-primary-300"> Tower </a>
                </h4>
                <p class="mb-0 text-center clr-neutral-500"> 4.5k Places </p>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <a href="#" class="link d-block">
                  <img src="{{ asset('public/front-end/')}}/img/cat-img-6.jpg" alt="image" class="img-fluid w-100 rounded-4">
                </a>
                <h4 class="mt-6 mb-2 text-center">
                  <a href="#" class="link d-inline-block clr-neutral-700 :clr-primary-300"> Safari </a>
                </h4>
                <p class="mb-0 text-center clr-neutral-500"> 4.5k Places </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Top Category -->
  <!-- Testimonial -->
  <div class="section-space">
    <div class="section-space--sm-bottom">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <span class="d-inline-flex align-items-center bg-primary-50 gap-4 rounded-pill py-1 ps-1 pe-5">
              <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
              </span>
              <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Testimonial </span>
            </span>
            <h2 class="mt-4 mb-0"> Our Satisfied Customers Says </h2>
          </div>
          <div class="col-md-4 col-lg-5 col-xl-6">
            <div class="text-md-end d-flex gap-3 justify-content-md-end">
              <div class="swiper-button-prev testimonial-slider-two__btn testimonial-slider-two__btn-prev">
              </div>
              <div class="swiper-button-next testimonial-slider-two__btn testimonial-slider-two__btn-next">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="swiper testimonial-slider-two">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="p-5 rounded-4 border border-neutral-50 bg-">
                  <div class="bg-primary-3p rounded-4 p-8">
                    <ul class="list list-row align-items-center flex-wrap mb-2">
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_half </span>
                      </li>
                    </ul>
                    <p class="fs-20 mb-0"> I had an excellent experience working with travling. From start to finish, their professionalism and expertise </p>
                    <div class="hr-dashed my-8"></div>
                    <div class="d-inline-flex align-items-center gap-5">
                      <div class="w-15 h-15 rounded-circle overflow-hidden flex-shrink-0">
                        <img src="{{ asset('public/front-end/')}}/img/testimonial-img.jpg" alt="img" class="img-fluid w-100 h-100 objec-fit-cover">
                      </div>
                      <div class="flex-grow-1">
                        <span class="d-block fs-20 fw-semibold mb-1 text-start"> Jenny Wilson </span>
                        <div class="d-flex align-items-center gap-1">
                          <span class="material-symbols-outlined mat-icon clr-tertiary-400"> distance </span>
                          <span class="d-inline-block"> Canada </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="p-5 rounded-4 border border-neutral-50 bg-">
                  <div class="bg-primary-3p rounded-4 p-8">
                    <ul class="list list-row align-items-center flex-wrap mb-2">
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_half </span>
                      </li>
                    </ul>
                    <p class="fs-20 mb-0"> I had an excellent experience working with travling. From start to finish, their professionalism and expertise </p>
                    <div class="hr-dashed my-8"></div>
                    <div class="d-inline-flex align-items-center gap-5">
                      <div class="w-15 h-15 rounded-circle overflow-hidden flex-shrink-0">
                        <img src="{{ asset('public/front-end/')}}/img/testimonial-img-2.jpg" alt="img" class="img-fluid w-100 h-100 objec-fit-cover">
                      </div>
                      <div class="flex-grow-1">
                        <span class="d-block fs-20 fw-semibold mb-1 text-start"> Fatiha Jara </span>
                        <div class="d-flex align-items-center gap-1">
                          <span class="material-symbols-outlined mat-icon clr-tertiary-400"> distance </span>
                          <span class="d-inline-block"> Dubai </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Testimonial -->

                @endsection
              