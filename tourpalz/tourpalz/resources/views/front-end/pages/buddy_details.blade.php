@extends('front-end.layouts.master')

@section('content')

<div class="bg-primary-5p">
    <div class="py-4">
      <div class="container-fluid">
      <div class="row g-4">
          <div class="col-xl-4">
            <div class="row g-4">
              <div class="col-sm-6 col-xl-12">
                <a href="{{ asset('public/front-end/')}}/{{$buddy['images'][2]}}" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/{{$buddy['images'][2]}}" alt="image" class="img-fluid w-100 rounded-3" />
                </a>
              </div>
              <div class="col-sm-6 col-xl-12">
                <a href="{{ asset('public/front-end/')}}/{{$buddy['images'][1]}}" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/{{$buddy['images'][1]}}" alt="image" class="img-fluid w-100 rounded-3" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <a href="{{ asset('public/front-end/')}}/{{$buddy['images'][0]}}" class="link d-block property-gallery h-100">
              <img src="{{ asset('public/front-end/')}}/{{$buddy['images'][0]}}" alt="image" class="img-fluid w-100 h-100 object-fit-cover rounded-3" />
            </a>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="row g-4">
              <div class="col-12">
                <a href="{{ asset('public/front-end/')}}/{{$buddy['images'][3]}}" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/{{$buddy['images'][3]}}" alt="image" class="img-fluid w-100 rounded-3" />
                </a>
              </div>
              <div class="col-sm-6">
                <a href="{{ asset('public/front-end/')}}/{{$buddy['images'][4]}}" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/{{$buddy['images'][4]}}" alt="image" class="img-fluid w-100 rounded-3" />
                </a>
              </div>
              <div class="col-sm-6">
                <a href="{{ asset('public/front-end/')}}/{{$buddy['images'][5]}}" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/{{$buddy['images'][5]}}" alt="image" class="img-fluid w-100 rounded-3" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- <div class="row g-4">
          <div class="col-xl-4">
            <div class="row g-4">
              <div class="col-sm-6 col-xl-12">
                <a href="assets/img/tour-details-img-1.jpg" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/img/tour-details-img-1.jpg" alt="image" class="img-fluid w-100 rounded-3">
                </a>
              </div>
              <div class="col-sm-6 col-xl-12">
                <a href="assets/img/tour-details-img-2.jpg" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/img/tour-details-img-2.jpg" alt="image" class="img-fluid w-100 rounded-3">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <a href="assets/img/tour-details-img-3.jpg" class="link d-block property-gallery h-100">
              <img src="{{ asset('public/front-end/')}}/img/tour-details-img-3.jpg" alt="image" class="img-fluid w-100 h-100 object-fit-cover rounded-3">
            </a>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="row g-4">
              <div class="col-12">
                <a href="assets/img/tour-details-img-4.jpg" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/img/tour-details-img-4.jpg" alt="image" class="img-fluid w-100 rounded-3">
                </a>
              </div>
              <div class="col-sm-6">
                <a href="assets/img/tour-details-img-5.jpg" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/img/tour-details-img-5.jpg" alt="image" class="img-fluid w-100 rounded-3">
                </a>
              </div>
              <div class="col-sm-6">
                <a href="assets/img/tour-details-img-6.jpg" class="link property-gallery">
                  <img src="{{ asset('public/front-end/')}}/img/tour-details-img-6.jpg" alt="image" class="img-fluid w-100 rounded-3">
                </a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-8">
          <div class="section-space--sm">
            <div class="bg-neutral-0 rounded-4 py-8 px-5">
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-8">
                  <h2 class="m-0"> {{ $buddy['personName'] }} </h2>
                  <ul class="list list-row gap-3 align-items-center">
                    <li>
                      <span class="d-inline-block clr-neutral-600"> Share </span>
                    </li>
                    <li>
                      <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <ul class="list list-row flex-wrap align-items-center list-divider-dot gap-4 gap-md-0">
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <span class="material-symbols-outlined mat-icon clr-secondary-400"> distance </span>
                      <p class="mb-0"> {{ $buddy['location'] }} </p>
                    </div>
                  </li>
                  <li>
                    <p class="mb-0"> ID: <span class="clr-primary-300">12546</span>
                    </p>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-1">
                      <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                      <p class="mb-0">{{ $buddy['rating'] }} (66) </p>
                    </div>
                  </li>
                  <li>
                    <p class="mb-0">
                      <span class="clr-neutral-500">Published:</span> Feb 9, 23
                    </p>
                  </li>
                </ul>
               
              </div>
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <h4 class="mb-5"> Overview </h4>
                <p class="mb-5 clr-neutral-500"> Dubai is a popular tourist destination located in the United Arab Emirates (UAE). It is known for its luxurious shopping, stunning beaches, impressive architecture, and vibrant nightlife. The city has become a hub for international travel and offers a wide range of attractions and activities for tourists. </p>
                <a href="#" class="link d-flex align-items-center gap-2 clr-primary-300">
                  <span class="fw-semibold d-inline-block"> Read More </span>
                  <span class="material-symbols-outlined mat-icon"> arrow_right_alt </span>
                </a>
              </div>
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <h4 class="mb-5"> Tour Highlights </h4>
                <div class="row g-4">
                  <div class="col-md-4 col-lg-3">
                    <ul class="list gap-4">
                      <li>
                        <div class="d-flex align-items-center gap-2">
                          <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                            <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                          </div>
                          <span class="d-inline-block"> Burj Khalifa </span>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex align-items-center gap-2">
                          <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                            <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                          </div>
                          <span class="d-inline-block"> Dubai Mall </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <ul class="list gap-4">
                      <li>
                        <div class="d-flex align-items-center gap-2">
                          <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                            <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                          </div>
                          <span class="d-inline-block"> Dubai Fountain </span>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex align-items-center gap-2">
                          <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                            <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                          </div>
                          <span class="d-inline-block"> Jumeirah Beach </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <ul class="list gap-4">
                      <li>
                        <div class="d-flex align-items-center gap-2">
                          <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                            <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                          </div>
                          <span class="d-inline-block"> Dubai Museum </span>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex align-items-center gap-2">
                          <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                            <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                          </div>
                          <span class="d-inline-block"> Dubai Creek </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <ul class="list gap-4">
                      <li>
                        <div class="d-flex align-items-center gap-2">
                          <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                            <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                          </div>
                          <span class="d-inline-block"> Palm Jumeirah </span>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex align-items-center gap-2">
                          <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                            <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                          </div>
                          <span class="d-inline-block"> Miracle Garden </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <h4 class="mb-0"> Inclusions & Exclusions </h4>
                <div class="hr-dashed my-5"></div>
                <h6 class="mb-4"> Inclusions </h6>
                <ul class="list gap-4 mb-10">
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                      </div>
                      <span class="d-inline-block"> Comfortable stay for 4 nights in your preferred category Hotels </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                      </div>
                      <span class="d-inline-block"> Professional English speaking guide to help you explore the cities </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                      </div>
                      <span class="d-inline-block"> Breakfast is included as mentioned in Itinerary. </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                      </div>
                      <span class="d-inline-block"> Per Peron rate on twin sharing basis </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                      </div>
                      <span class="d-inline-block"> Entrance Tickets to Genting Indoor Theme Park </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-primary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-primary-300"> check </span>
                      </div>
                      <span class="d-inline-block"> All Tours & Transfers on Seat In Coach Basis </span>
                    </div>
                  </li>
                </ul>
                <h6 class="mb-4"> Exclusions </h6>
                <ul class="list gap-4 mb-10">
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-tertiary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-tertiary-500"> close </span>
                      </div>
                      <span class="d-inline-block"> Lunch and dinner are not included in plans </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-tertiary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-tertiary-500"> close </span>
                      </div>
                      <span class="d-inline-block"> Any other services not specifically mentioned in the inclusions </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-tertiary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-tertiary-500"> close </span>
                      </div>
                      <span class="d-inline-block"> Medical and Travel insurance </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-tertiary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-tertiary-500"> close </span>
                      </div>
                      <span class="d-inline-block"> Airfare is not included </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-tertiary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-tertiary-500"> close </span>
                      </div>
                      <span class="d-inline-block"> Early Check-In & Late Check-Out </span>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center gap-2">
                      <div class="w-6 h-6 d-grid place-content-center rounded-circle flex-shrink-0 bg-tertiary-50">
                        <span class="material-symbols-outlined mat-icon fs-20 clr-tertiary-500"> close </span>
                      </div>
                      <span class="d-inline-block"> Anything which is not specified in Inclusions </span>
                    </div>
                  </li>
                </ul>
                <a href="#" class="link d-flex align-items-center gap-2 clr-primary-300 mt-8">
                  <span class="fw-semibold d-inline-block"> Read More </span>
                  <span class="material-symbols-outlined mat-icon"> arrow_right_alt </span>
                </a>
              </div>
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <h4 class="mb-0"> Tour Policy </h4>
                <div class="hr-dashed my-5"></div>
                <h6 class="mb-4"> Confirmation Policy : </h6>
                <p class="mb-4"> The customer receives a confirmation voucher via email within 24 hours of successful booking. </p>
                <p class="mb-4"> In case the preferred slots are unavailable, an alternate schedule of the customer’s preference will be arranged and a new confirmation voucher will be sent via email. </p>
                <p class="mb-10"> Alternatively, the customer may choose to cancel their booking before confirmation and a full refund will be processed. </p>
                <h6 class="mb-4"> Cancellation Policy : </h6>
                <p class="mb-4">
                  <span class="fw-medium clr-neutral-900">10 days :</span> 100%
                </p>
                <p class="mb-4">
                  <span class="fw-medium clr-neutral-900">10 to 15 days :</span> 75% + Non Refundable Component
                </p>
                <p class="mb-4">
                  <span class="fw-medium clr-neutral-900">15 to 30 days :</span> 30% + Non Refundable Component
                </p>
                <p class="mb-4">
                  <span class="fw-medium clr-neutral-900">10Hotel / Air :</span> 100% in case of non-refundable ticket / Hotel Room
                </p>
                <p class="mb-10">
                  <span class="fw-medium clr-neutral-900">10Cruise / Visa :</span> On Actuals
                </p>
                <h6 class="mb-4"> Refund Policy : </h6>
                <p class="mb-0"> The applicable refund amount will be processed within 10 business days. All applicable refunds will be done in the traveler's banks wallet as E-cash. </p>
              </div>
              <div class="d-flex align-items-center justify-content-between gap-4 flex-wrap">
                <a href="#" class="link d-flex align-items-center clr-neutral-500 :clr-primary-300 gap-1 order-1">
                  <span class="material-symbols-outlined mat-icon"> arrow_back </span>
                  <span class="d-inline-block fw-semibold"> Prev Tour </span>
                </a>
                <ul class="list list-row flex-wrap gap-3 justify-content-center order-3 flex-grow-1 order-md-2">
                  <li>
                    <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                      <i class="fab fa-dribbble"></i>
                    </a>
                  </li>
                </ul>
                <a href="#" class="link d-flex align-items-center clr-neutral-500 :clr-primary-300 gap-1 order-2">
                  <span class="d-inline-block fw-semibold"> Next Tour </span>
                  <span class="material-symbols-outlined mat-icon"> arrow_forward </span>
                </a>
              </div>
            </div>
          </div>
          <div class="bg-neutral-0 rounded-4 py-8 px-5">
            <div class="d-flex align-items-center gap-4 justify-content-between flex-wrap mb-10">
              <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                <h3 class="mb-0"> 4.7 (21 reviews) </h3>
              </div>
              <div class="d-flex align-items-center gap-2">
                <p class="mb-0 clr-neutral-500"> Sort By : </p>
                <select class="form-select w-auto rounded-pill">
                  <option selected>Latest</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="bg-primary-5p rounded-4 p-6 mb-8">
              <div class="d-flex align-items-center flex-wrap justify-content-between gap-4">
                <div class="d-flex gap-5 align-items-center">
                  <div class="w-15 h-15 flex-shrink-0 rounded-circle overflow-hidden">
                    <img src="{{ asset('public/front-end/')}}/img/user-1.jpg" alt="image" class="img-fluid w-100 h-100 object-fit-cover">
                  </div>
                  <div class="flex-grow-1">
                    <h5 class="mb-1 fw-semibold"> Kiss Laura </h5>
                    <p class="mb-0 clr-neutral-500"> Product Designer </p>
                  </div>
                </div>
                <div class="text-sm-end">
                  <p class="mb-1"> 09:01 am </p>
                  <p class="mb-0"> Mar 03, 2023 </p>
                </div>
              </div>
              <div class="hr-dashed my-6"></div>
              <ul class="list list-row mb-2">
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
                  <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate_half </span>
                </li>
              </ul>
              <p class="mb-0 clr-neutral-500"> I highly recommend travling as a professional and knowledgeable real estate agent. They provided valuable guidance throughout the selling process </p>
              <div class="hr-dashed my-6"></div>
              <div class="d-flex flex-wrap align-items-center gap-10 mb-6">
                <div class="d-flex align-items-center gap-2 clr-primary-300">
                  <span class="material-symbols-outlined mat-icon"> thumb_up </span>
                  <span class="d-inline-block"> 178 </span>
                </div>
                <div class="d-flex align-items-center gap-2 clr-primary-300">
                  <span class="material-symbols-outlined mat-icon"> forum </span>
                  <span class="d-inline-block"> Reply </span>
                </div>
              </div>
              <div class="d-flex gap-5 align-items-center">
                <div class="w-15 h-15 flex-shrink-0 rounded-circle overflow-hidden">
                  <img src="{{ asset('public/front-end/')}}/img/user-2.jpg" alt="image" class="img-fluid w-100 h-100 object-fit-cover">
                </div>
                <div class="flex-grow-1">
                  <input class="form-control form-control-lg fs-16 py-4 px-5 rounded-pill" type="text" placeholder="Join the discussion">
                </div>
              </div>
            </div>
            <div class="bg-primary-5p rounded-4 p-6 mb-8">
              <div class="d-flex align-items-center flex-wrap justify-content-between gap-4">
                <div class="d-flex gap-5 align-items-center">
                  <div class="w-15 h-15 flex-shrink-0 rounded-circle overflow-hidden">
                    <img src="{{ asset('public/front-end/')}}/img/user-3.jpg" alt="image" class="img-fluid w-100 h-100 object-fit-cover">
                  </div>
                  <div class="flex-grow-1">
                    <h5 class="mb-1 fw-semibold"> Kristin Watson </h5>
                    <p class="mb-0 clr-neutral-500"> Product Designer </p>
                  </div>
                </div>
                <div class="text-sm-end">
                  <p class="mb-1"> 09:01 am </p>
                  <p class="mb-0"> Mar 03, 2023 </p>
                </div>
              </div>
              <div class="hr-dashed my-6"></div>
              <ul class="list list-row mb-2">
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
                  <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate_half </span>
                </li>
              </ul>
              <p class="mb-0 clr-neutral-500"> I highly recommend travling as a professional and knowledgeable real estate agent. They provided valuable guidance throughout the selling process </p>
              <div class="hr-dashed my-6"></div>
              <div class="d-flex flex-wrap align-items-center gap-10">
                <div class="d-flex align-items-center gap-2 clr-primary-300">
                  <span class="material-symbols-outlined mat-icon"> thumb_up </span>
                  <span class="d-inline-block"> 178 </span>
                </div>
                <div class="d-flex align-items-center gap-2 clr-primary-300">
                  <span class="material-symbols-outlined mat-icon"> forum </span>
                  <span class="d-inline-block"> Reply </span>
                </div>
              </div>
            </div>
            <div class="bg-primary-5p rounded-4 p-6 mb-8">
              <div class="d-flex align-items-center flex-wrap justify-content-between gap-4">
                <div class="d-flex gap-5 align-items-center">
                  <div class="w-15 h-15 flex-shrink-0 rounded-circle overflow-hidden">
                    <img src="{{ asset('public/front-end/')}}/img/user-4.jpg" alt="image" class="img-fluid w-100 h-100 object-fit-cover">
                  </div>
                  <div class="flex-grow-1">
                    <h5 class="mb-1 fw-semibold"> Marvin McKinney </h5>
                    <p class="mb-0 clr-neutral-500"> Product Designer </p>
                  </div>
                </div>
                <div class="text-sm-end">
                  <p class="mb-1"> 09:01 am </p>
                  <p class="mb-0"> Mar 03, 2023 </p>
                </div>
              </div>
              <div class="hr-dashed my-6"></div>
              <ul class="list list-row mb-2">
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
                  <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate_half </span>
                </li>
              </ul>
              <p class="mb-0 clr-neutral-500"> I highly recommend travling as a professional and knowledgeable real estate agent. They provided valuable guidance throughout the selling process </p>
              <div class="hr-dashed my-6"></div>
              <div class="d-flex flex-wrap align-items-center gap-10">
                <div class="d-flex align-items-center gap-2 clr-primary-300">
                  <span class="material-symbols-outlined mat-icon"> thumb_up </span>
                  <span class="d-inline-block"> 178 </span>
                </div>
                <div class="d-flex align-items-center gap-2 clr-primary-300">
                  <span class="material-symbols-outlined mat-icon"> forum </span>
                  <span class="d-inline-block"> Reply </span>
                </div>
              </div>
            </div>
            <a href="#" class="featured-tab link fw-semibold clr-primary-400 d-inline-block py-3 px-6 bg-primary-50 :bg-primary-300 :clr-neutral-0 rounded-pill active"> See All Reviews </a>
          </div>
          <div class="section-space--sm">
            <div class="bg-neutral-0 rounded-4 py-8 px-5">
              <h4 class="mb-0">Write a review</h4>
              <div class="hr-dashed my-6"></div>
              <p class="fs-20 fw-medium">Rating *</p>
              <ul class="list list-row mb-6">
                <li>
                  <span class="material-symbols-outlined mat-icon fs-32 solid clr-tertiary-300"> star_rate </span>
                </li>
                <li>
                  <span class="material-symbols-outlined mat-icon fs-32 solid clr-tertiary-300"> star_rate </span>
                </li>
                <li>
                  <span class="material-symbols-outlined mat-icon fs-32 solid clr-tertiary-300"> star_rate </span>
                </li>
                <li>
                  <span class="material-symbols-outlined mat-icon fs-32 solid clr-tertiary-300"> star_rate_half </span>
                </li>
                <li>
                  <span class="material-symbols-outlined mat-icon fs-32 solid clr-tertiary-300"> star_rate_half </span>
                </li>
              </ul>
              <form action="#">
                <div class="row g-4">
                  <div class="col-12">
                    <label for="review-name" class="fs-20 fw-medium d-block mb-3">Name *</label>
                    <input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="Enter Name.." id="review-name">
                  </div>
                  <div class="col-12">
                    <label for="review-email" class="fs-20 fw-medium d-block mb-3">Email *</label>
                    <input type="text" class="form-control bg-primary-3p border border-neutral-40 rounded-pill py-3 px-5" placeholder="Enter Email.." id="review-email">
                  </div>
                  <div class="col-12">
                    <label for="review-review" class="fs-20 fw-medium d-block mb-3">Review *</label>
                    <textarea id="review-review" rows="5" class="form-control bg-primary-3p border border-neutral-40 rounded-5 py-3 px-5"></textarea>
                  </div>
                  <div class="col-12">
                    <a href="#" class="featured-tab link fw-semibold clr-primary-400 d-inline-block py-3 px-6 bg-primary-50 :bg-primary-300 :clr-neutral-0 rounded-pill active"> Submit Review </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="section-space--sm">
            <div class="bg-neutral-0 rounded-4 py-8 px-6">
              <p class="mb-3 fs-18 fw-medium"> Price </p>
              <div class="d-flex align-items-start gap-2 mb-6">
                <div class="d-flex gap-3 align-items-center">
                  <span class="material-symbols-outlined mat-icon"> sell </span>
                  <p class="mb-0"> From </p>
                  <h3 class="mb-0"> ${{ $buddy['price'] }} </h3>
                </div>
                <span class="material-symbols-outlined mat-icon"> info </span>
              </div>
              <div class="list-group about-tab mb-7">
                <a class="list-group-item active" data-bs-toggle="list" href="#booking-list"> Booking Form </a>
              </div>
              <div class="tab-content mb-8">
                <div class="tab-pane fade show active" id="booking-list">
                  <div class="row g-3">
                    <div class="col-12">
                      <div class="input-group">
                        <input type="text" class="form-control bg-primary-3p border border-end-0 border-neutral-40 rounded-pill rounded-end-0 py-3 px-5" placeholder="Location">
                        <span class="input-group-text bg-primary-3p border border-start-0 border-neutral-40 rounded-pill rounded-start-0 py-3 pe-5 ps-0">
                          <span class="material-symbols-outlined mat-icon clr-neutral-100"> distance </span>
                        </span>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-group">
                        <input type="text" class="form-control bg-primary-3p border border-end-0 border-neutral-40 rounded-pill rounded-end-0 py-3 px-5" placeholder="Date">
                        <span class="input-group-text bg-primary-3p border border-start-0 border-neutral-40 rounded-pill rounded-start-0 py-3 pe-5 ps-0">
                          <span class="material-symbols-outlined mat-icon clr-neutral-100"> calendar_month </span>
                        </span>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-group">
                        <input type="text" class="form-control bg-primary-3p border border-end-0 border-neutral-40 rounded-pill rounded-end-0 py-3 px-5" placeholder="Guest">
                        <span class="input-group-text bg-primary-3p border border-start-0 border-neutral-40 rounded-pill rounded-start-0 py-3 pe-5 ps-0">
                          <span class="material-symbols-outlined mat-icon clr-neutral-100"> group </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="d-flex align-items-center justify-content-between mb-4">
                <p class="mb-0 clr-neutral-500"> Base Price </p>
                <p class="mb-0 fw-medium"> ${{ $buddy['price'] }} </p>
              </div>
           
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 clr-neutral-500"> Service charge </p>
                <p class="mb-0 fw-medium"> $10 </p>
              </div>
              <div class="hr-dashed my-4"></div>
              <div class="d-flex align-items-center justify-content-between mb-10">
                <p class="mb-0 clr-neutral-500"> Total </p>
                <p class="mb-0 fw-medium"> ${{ $buddy['price']+10 }} </p>
              </div>
              <a href="{{URL::to('/booking/'.$buddy['id'].'/detail')}}" class="link d-inline-flex align-items-center gap-2 py-3 px-6 rounded-pill bg-primary-300 clr-neutral-0 :bg-primary-400 :clr-neutral-0 fw-medium w-100 justify-content-center mb-6">
                <span class="d-inline-block"> Proceed Booking </span>
              </a>
              
            </div>
            <div class="bg-neutral-0 rounded-4 py-8 px-6">
            <div class="w-30 h-30 border border-primary-100 rounded-circle bg-neutral-0 p-6 d-grid place-content-center position-relative mx-auto mb-10">
              <img src="{{ asset('public/front-end/')}}/{{$buddy['images'][0]}}" alt="image" class="w-24 h-24 object-fit-cover rounded-circle">
              <div class="w-8 h-8 d-grid place-content-center rounded-circle border border-2 border-neutral bg-primary-300 position-absolute end-0 bottom-0">
                <span class="material-symbols-outlined mat-icon clr-neutral-0"> check </span>
              </div>
            </div>
            <h4 class="text-center mb-4"> {{ $buddy['personName'] }} </h4>
            <ul class="list list-row list-divider-dot-sm align-items-cener justify-content-center flex-wrap mb-7">
              <li>
                <p class="mb-0"> ID: <span class="clr-primary-300">235</span>
                </p>
              </li>
              <li>
                <p class="mb-0"> Total Tours: 24 </p>
              </li>
              <li>
                <div class="d-flex gap-1 align-items-cener">
                  <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                  <p class="mb-0"> {{ $buddy['rating'] }} </p>
                </div>
              </li>
            </ul>
            <ul class="list list-row justify-content-center flex-wrap gap-3">
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
            </ul>
            <div class="hr-dashed my-7"></div>
            <ul class="list gap-4 mb-10 max-text-30 mx-auto">
              <li>
                <div class="d-flex align-items-center gap-2">
                  <span class="material-symbols-outlined mat-icon clr-primary-300"> calendar_month </span>
                  <p class="mb-0"> Joined in June 2018 </p>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-2">
                  <span class="material-symbols-outlined mat-icon clr-secondary-300"> chat </span>
                  <p class="mb-0"> Response rate - 100% </p>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-2">
                  <span class="material-symbols-outlined mat-icon clr-tertiary-300"> alarm_on </span>
                  <p class="mb-0"> Fast response </p>
                </div>
              </li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See Host Profile </a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                @endsection
              