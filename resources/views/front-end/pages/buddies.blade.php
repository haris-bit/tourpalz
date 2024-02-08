@extends('front-end.layouts.master')

@section('content')

 <!-- Property List -->
 <div class="section-space--sm bg-primary-5p">
    <div class="container-lg">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="py-6 px-8 bg-neutral-0 rounded-4 box-shadow">
            <h4 class="mb-0"> Filter </h4>
            <div class="hr-dashed my-6 opacity-50"></div>
            <div class="d-flex align-items-center justify-content-between rounded-pill border border-neutral-40 bg-primary-3p px-5 py-3">
              <input type="text" class="form-control bg-transparent border-0 focus-outline-0" placeholder="Keywords...">
              <button type="button" class="border-0 bg-transparent p-0 lh-1">
                <span class="material-symbols-outlined mat-icon clr-neutral-600"> search </span>
              </button>
            </div>
            <div class="hr-dashed my-6 opacity-50"></div>
            <div class="property-search__select property-search__col rounded-pill px-6">
                  <select class="form-select" aria-label="Default select example">
                    <option selected="">Location</option>
                    <option value="1">New York</option>
                    <option value="2">Chicago</option>
                    <option value="3">Atlanta</option>
                  </select>
                </div>
           
          
            
            <div class="hr-dashed my-6 opacity-50"></div>
            <p class="mb-4 clr-neutral-700 fs-20 fw-medium"> Pricing scale </p>
            <div class="range-slider">
              <div class="range-slider__progress"></div>
              <span class="range-min-wrapper">
                <input class="range-slider__input range-slider__min" type="range" min="0" max="100" value="25">
              </span>
              <span class="range-max-wrapper">
                <input class="range-slider__input range-slider__max" type="range" min="0" max="100" value="100">
              </span>
            </div>
            <div class="d-flex align-items-center justify-content-center gap-2 mt-3">
              <div class="min-value range-slider__value"> $ <input type="number" min="0" max="100" value="25" disabled>
              </div>
              <span>-</span>
              <div class="max-value range-slider__value"> $ <input type="number" min="0" max="100" value="100" disabled>
              </div>
            </div>
           
            <div class="hr-dashed my-6 opacity-50"></div>
            <a href="#" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 fw-semibold w-100 text-center">
              <span class="material-symbols-outlined mat-icon fw-300"> rotate_right </span> Search </a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="row g-4">
            <div class="col-12">
              <div class="bg-neutral-0 rounded-2 py-3 px-6 box-shadow">
                <ul class="list list-row align-items-center flex-wrap gap-3">
                  <li class="d-none d-xl-block">
                    <p class="mb-0 clr-neutral-500"> Showing 5 of 20 Results </p>
                  </li>
                  <li class="flex-grow-1">
                    <ul class="list list-row flex-wrap justify-content-center justify-content-lg-start justify-content-xl-center gap-4">
                      <li>
                        <a href="#" class="link d-flex align-items-center gap-2 clr-neutral-500 :clr-primary-300 active-clr">
                          <span class="material-symbols-outlined mat-icon"> grid_view </span>
                          <span class="d-inline-block fw-medium"> Grid </span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="link d-flex align-items-center gap-2 clr-neutral-500 :clr-primary-300">
                          <span class="material-symbols-outlined mat-icon"> reorder </span>
                          <span class="d-inline-block fw-medium"> List </span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="link d-flex align-items-center gap-2 clr-neutral-500 :clr-primary-300">
                          <span class="material-symbols-outlined mat-icon"> map </span>
                          <span class="d-inline-block fw-medium"> Map </span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="d-none d-lg-flex align-items-center">
                    <p class="mb-0 clr-neutral-500 flex-grow-1"> Sort By : </p>
                    <select class="form-select py-0 border-0 w-auto">
                      <option selected>latest</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </li>
                </ul>
              </div>
            </div>
           
            @foreach ($data as $buddy)

	  <div class="col-md-6 col-xl-6">
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
                <a href="{{URL::to('/buddy/'.$buddy['id'].'/detail')}}" class="btn btn-outline-primary py-2 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> Book Now </a>
              </div>
            </div>
          </div>
        </div>

	  
@endforeach

            <div class="col-12">
              <nav>
                <ul class="pagination gap-3 justify-content-center">
                  <li class="page-item">
                    <a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="#">
                      <span class="material-symbols-outlined mat-icon fs-16"> arrow_back_ios </span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-neutral-0 :clr-neutral-0 active-bg" href="#">1</a></li>
                  <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="#">2</a></li>
                  <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="#">
                      <span class="material-symbols-outlined mat-icon fs-16"> arrow_forward_ios </span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Property List -->
                @endsection
              