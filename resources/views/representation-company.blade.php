@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/recommend-banner-1.png')}}" alt="banner" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">Rebecca Recommends</h1>
          <p class="text-white">representation company</p>
        </div>
      </section>
      <div class="banner-bottom-nav">
        <ul class="p-0 m-0 list-unstyled">
          <li class="mx-5 active py-3"><a href="#">OVERVIEW</a></li>
          <li class="mx-5 py-3"><a href="#">CONTACTS</a></li>
          <li class="mx-5 py-3"><a href="#">ELEVATE PARTNERS</a></li>
          <li class="mx-5 py-3"><a href="#">BOOKINGS + COMMISSIONS</a></li>
          <li class="mx-5 py-3"><a href="#">ASSETS + TRAININGS</a></li>
          <li class="mx-5 py-3"><a href="#">PROMOS + UPDATES</a></li>
        </ul>
      </div>
      <section class="travelex-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 travelex-box-one">
              <h2>Best Way to Book</h2>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      what is the best way to book?
                      <img
                        class="accordian-arrow position-absolute"
                        src="{{asset('assets/images/arrow-down.svg')}}"
                        alt=""
                      />
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Pharetra vel nunc molestie commodo.
                    </div>
                  </div>
                </div>
              </div>

              <h2 class="mt-5">Commissions</h2>
              <p class="smal-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Pharetra vel nunc molestie commodo.
              </p>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      how much % commission do agents get?
                      <img
                        class="accordian-arrow position-absolute"
                        src="{{asset('assets/images/arrow-down.svg')}}"
                        alt=""
                      />
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Pharetra vel nunc molestie commodo.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      who can i contact?
                      <img
                        class="accordian-arrow position-absolute"
                        src="{{asset('assets/images/arrow-down.svg')}}"
                        alt=""
                      />
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Pharetra vel nunc molestie commodo.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 travelex-box-two">
              <img class="w-100" src="{{asset('assets/images/recommend-img-1.png')}}" alt="img" />
            </div>
          </div>
        </div>
      </section>

      <section class="banner-two-sec">
        <img src="{{asset('assets/images/recommend-banner-2.png')}}" alt="banner" />
      </section>
@endsection
