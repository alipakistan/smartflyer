@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img  src="{{asset('assets/images/insurance-bg-1.png')}}" alt="" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">Travelex Insurance</h1>
          <p class="text-white">dream. explore. travel on.</p>
        </div>
      </section>
      <div class="banner-bottom-nav">
        <ul class="p-0 m-0 list-unstyled">
          <li class="mx-5 active py-3"><a href="#">OVERVIEW</a></li>
          <li class="mx-5 py-3"><a href="#">BOOKING+COMMISSIONS</a></li>
          <li class="mx-5 py-3"><a href="#">ASSETS+TRAININGS</a></li>
          <li class="mx-5 py-3"><a href="#">UPDTAES</a></li>
        </ul>
      </div>
      <section class="travelex-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 travelex-box-one">
              <h2>Overview</h2>
              <h4>Maximum Total Trip Coverage</h4>
              <span>$100,000</span>
              <h4 class="mt-4">Maximum Price Per Traveler Coverage</h4>
              <span>$100,000</span>

              <h4 class="mt-4 mb-5">Booking Restrictions:</h4>
              <h4 class="mb-2">Booking portal</h4>

              <button>GO TO BOOKING PORTAL</button>
            </div>
            <div class="col-md-6 travelex-box-two">
              <img
                class="travelex-logo"
                src="{{asset('assets/images/travelex-logo.svg')}}"
                alt=""
              />
              <div class="row mt-5 lg-mb-5 mb-3 justify-content-between">
                <div class="col-lg-6 mb-2 lg-mb-0 travelex-box">
                  <h4>Book direct for 12% and 16% commission</h4>
                </div>
                <div class="col-lg-5 mb-2 lg-mb-0 travelex-box">
                  <h4>Member since ----</h4>
                </div>
              </div>
              <h3>Primary Contact</h3>
              <div class="mt-4 d-flex primary-contact bg-white p-4">
                <img
                src="{{asset('assets/images/contact-img.png')}}" alt="" />
                <div class="ms-3">
                  <h5>
                    Rob Gilbert <span class="ms-3">Senior Vice President</span>
                  </h5>
                  <p>rob@flewber.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="smartflyer-sec">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-xxl-4 smartflyer-heading">
            <span>policies</span>
            <h3>SmartFlyer Plan</h3>
            <img
              class="mt-5 mb-5 md-block none"
              src="{{asset('assets/images/Line.svg')}}"
              alt="img"
            />
            <p>
              Created with SmartFlyer customers in mind, this comprehensive
              travel protection plan gives you and your loved ones options when
              unexpected situations affect your trip. Let us help you Dream.
              Explore. Travel On.
            </p>
          </div>
          <div class="col-lg-6 position-relative">
            <div class="position-absolute slyer-plan">
              <img src="{{asset('assets/images/smartflyer-pan-img.png')}}" alt="" />
            </div>
          </div>
        </div>
      </section>
      <section class="assests-sec">
        <div class="container">
          <h3 class="text-black fs-3">Marketing Assets</h3>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Product Flyer</h5>
                  <span
                    >https://drive.google.com/file/d/15flqPEUSVH5ps7aURyNfSfOxixjyIOgT/view</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Product Flyer</h5>
                  <span
                    >https://drive.google.com/file/d/15flqPEUSVH5ps7aURyNfSfOxixjyIOgT/view</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Product Flyer</h5>
                  <span
                    >https://drive.google.com/file/d/15flqPEUSVH5ps7aURyNfSfOxixjyIOgT/view</span
                  >
                </div>
              </div>
            </div>
          </div>

          <h3 class="text-black fs-3 mt-5">Trainings</h3>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Product Flyer</h5>
                  <span
                    >https://drive.google.com/file/d/15flqPEUSVH5ps7aURyNfSfOxixjyIOgT/view</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="banner-two-sec">
        <img src="{{asset('assets/images/banner-img-2.png')}}" alt="banner" />
      </section>
@endsection
