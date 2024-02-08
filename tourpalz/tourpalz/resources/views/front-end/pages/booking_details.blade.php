@extends('front-end.layouts.master')

@section('content')

<div class="section-space--sm bg-primary-5p">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-space--sm-bottom pb-lg-0">
            <div class="bg-neutral-0 rounded-4 p-6 mb-6">
              <h3 class="mb-0"> Your Booking Info </h3>
              <div class="hr-dashed my-6"></div>
              <div class="row g-4 g-md-3 mb-8">
                <div class="col-md-4">
                  <div class="border border-neutral-40 rounded-4 bg-primary-3p py-4 px-4 px-xxl-8">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-1">
                      <span class="clr-neutral-400 d-inline-block fs-14"> Booking date </span>
                      <span class="material-symbols-outlined mat-icon clr-neutral-500"> edit_square </span>
                    </div>
                    <p class="mb-0 fs-18 fw-medium"> Feb 17 - Feb 25 </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="border border-neutral-40 rounded-4 bg-primary-3p py-4 px-8">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-1">
                      <span class="clr-neutral-400 d-inline-block fs-14"> Adults </span>
                      <span class="material-symbols-outlined mat-icon clr-neutral-500"> edit_square </span>
                    </div>
                    <p class="mb-0 fs-18 fw-medium"> 5 </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="border border-neutral-40 rounded-4 bg-primary-3p py-4 px-8">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-1">
                      <span class="clr-neutral-400 d-inline-block fs-14"> Children </span>
                      <span class="material-symbols-outlined mat-icon clr-neutral-500"> edit_square </span>
                    </div>
                    <p class="mb-0 fs-18 fw-medium"> 0 </p>
                  </div>
                </div>
              </div>
              <div class="property-card property-card--row align-items-center border border-neutral-40">
                <div class="property-card__head">
                  <div class="property-card__img">
                    <img src="{{ asset('public/front-end/')}}/{{$buddy['images'][0]}}" alt="image" class="img-fluid w-100">
                  </div>
                </div>
                <div class="property-card__content">
                  <div class="property-card__body">
                    <a href="{{URL::to('/buddy/'.$buddy['id'].'/detail')}}"  class="link d-block clr-neutral-700 :clr-primary-300 fs-20 fw-medium mb-5"> {{ $buddy['personName'] }} </a>
                    <div class="d-flex justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <span class="material-symbols-outlined mat-icon clr-tertiary-400"> distance </span>
                        <span class="d-inline-block"> {{ $buddy['location'] }} </span>
                      </div>
                      <div class="d-flex align-items-center gap-1">
                        <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                        <span class="d-inline-block clr-neutral-500"> {{ $buddy['rating'] }}(66) </span>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-neutral-0 rounded-4 p-6 mb-6">
              <h4 class="mb-3"> Billing address </h4>
              <div class="d-flex flex-wrap gap-4 justify-content-between align-items-center">
                <p class="mb-0"> Transaction ID: <span class="clr-primary-300">25246584</span>
                </p>
                <p class="mb-0"> Total Payable Amount: <span class="clr-primary-300">$1115</span>
                </p>
              </div>
              <div class="hr-dashed my-6"></div>
              <div class="row g-4">
                <div class="col-md-6">
                  <input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="Enter Name">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="Enter Email">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="Enter Phone Number">
                </div>
                <div class="col-md-6">
                  <div class="property-search__select property-search__col rounded-pill px-6">
                    <select class="form-select" aria-label="Default select example">
                      <option selected="">USA</option>
                      <option value="1">New York</option>
                      <option value="2">Chicago</option>
                      <option value="3">Atlanta</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <textarea rows="5" class="form-control bg-primary-3p border border-neutral-40 rounded-5 py-3 px-6" placeholder="Enter Address"></textarea>
                </div>
              </div>
            </div>
            <div class="bg-neutral-0 rounded-4 p-6">
              <h4 class="mb-6"> Payment methods </h4>
              <ul class="list list-row flex-wrap align-items-center gap-6">
                <li>
                  <div class="d-flex align-items-center gap-2">
                    <input class="custom-radio custom-radio--primary-300" type="radio" name="property-type" id="credit-card">
                    <label class="d-inline-block fs-18 fw-medium cursor-pointer" for="credit-card">Credit card</label>
                  </div>
                </li>
                <li>
                  <div class="d-flex align-items-center gap-2">
                    <input class="custom-radio custom-radio--primary-300" type="radio" name="property-type" id="debit-card">
                    <label class="d-inline-block fs-18 fw-medium cursor-pointer" for="debit-card"> Debit card </label>
                  </div>
                </li>
                <li>
                  <div class="d-flex align-items-center gap-2">
                    <input class="custom-radio custom-radio--primary-300" type="radio" name="property-type" id="paypal">
                    <label class="d-inline-block fs-18 fw-medium cursor-pointer" for="paypal"> PayPal </label>
                  </div>
                </li>
              </ul>
              <div class="hr-dashed my-6"></div>
              <div class="row g-4">
                <div class="col-12">
                  <label for="card-number" class="fs-20 fw-medium d-block mb-3">Card number</label>
                  <input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="2456 1665 5155 5151" id="card-number">
                </div>
                <div class="col-md-6">
                  <label for="expiry-date" class="fs-20 fw-medium d-block mb-3">Expiry date</label>
                  <input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="DD/MM/YY" id="expiry-date">
                </div>
                <div class="col-md-6">
                  <label for="cvc" class="fs-20 fw-medium d-block mb-3">CVC / CVV</label>
                  <input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="3 digits" id="cvc">
                </div>
                <div class="col-12">
                  <label for="card-name" class="fs-20 fw-medium d-block mb-3">Name on card</label>
                  <input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="Jab Archur" id="card-name">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          
          <div class="bg-neutral-0 rounded-4 p-6">
            <h4 class="mb-0">Order Summary</h4>
            <div class="hr-dashed my-8"></div>
            <ul class="list gap-4">
              <li class="d-flex align-items-center justify-content-between flex-wrap">
                <p class="mb-0">Subtotal</p>
                <p class="mb-0 fw-medium">${{ $buddy['price'] }}</p>
              </li>
              <li class="d-flex align-items-center justify-content-between flex-wrap">
                <p class="mb-0">Service charge</p>
                <p class="mb-0 fw-medium">$10</p>
              </li>
              
            </ul>
            <div class="hr-dashed my-8"></div>
            <div class="d-flex align-items-center justify-content-between flex-wrap mb-6">
              <p class="mb-0">Payable Now</p>
              <p class="mb-0 fw-medium">${{ $buddy['price']+10 }}</p>
              </d>
            </div>
            <a href="#" class="link d-inline-flex align-items-center gap-2 py-3 px-6 rounded-pill bg-primary-300 clr-neutral-0 :bg-primary-400 :clr-neutral-0 fw-medium w-100 justify-content-center">
              <span class="d-inline-block"> Payment </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
                @endsection
              