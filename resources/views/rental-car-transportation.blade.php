@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/b&w-banner-1.png')}}" alt="banner" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">Black & White Car Rental</h1>
          <p class="text-white">
            Exotic and luxury car rental in los angeles since 1994
          </p>
        </div>
      </section>
      <div class="banner-bottom-nav">
        <ul class="p-0 m-0 list-unstyled">
          <li class="mx-5 active py-3"><a href="#">OVERVIEW</a></li>
          <li class="mx-5 py-3"><a href="#">CONTACTS</a></li>
          <li class="mx-5 py-3"><a href="#">THINGS TO KHOW</a></li>
          <li class="mx-5 py-3"><a href="#">BOOKING+COMMISSIONS</a></li>
          <li class="mx-5 py-3"><a href="#">ASSETS+TRAININGS</a></li>
        </ul>
      </div>
      <section class="travelex-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 travelex-box-one">
              <h2>Overview</h2>
              <p class="smal-description">
                Meet and Greet services at LAX and SFO, up to 20% commission on
                selected vehicles, valet drops at SFO, 3rd party billing
                approved, hotel/property delivery and pickup, open 365 days a
                year, live after hour assistance any day, make/model guarantee
                if available, out-of-state delivery/pickup offered (fees apply),
                rent to drivers 18-20 years of age (fees apply), and discounted
                agent rates.
              </p>

              <h4 class="mt-5 mb-2">Service Areas</h4>
              <p class="smal-description pe-3">
                We cover ALL of California, Los Angeles, Beverly Hills and San
                Francisco including Napa, San Jose, Oakland and more
              </p>
              <p class="smal-description mt-4 pe-3">
                We deliver to San Diego, Orange County, Santa Barbara, Palm
                Springs, Las Vegas and more ... (fees apply to these areas,
                please ask for details)
              </p>
              <h2 class="mt-5">Booking</h2>
              <h4 class="mb-2">Booking portal</h4>

              <button>GO TO BOOKING PORTAL</button>
              <h4 class="mt-3">Agency or discount code</h4>
              <h4 class="mt-2 text-dark-green">SMBLW2022</h4>
            </div>
            <div class="col-md-6 travelex-box-two">
              <img class="aero-logo" src="{{asset('assets/images/b&w-logo.svg')}}" alt="" />
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
                <img src="{{asset('assets/images/b&w-profile.png')}}" alt="img" />
                <div class="ms-3">
                  <h5>
                    Amber Rollefson<span class="ms-3"
                      >Leisure Sales Manager</span
                    >
                  </h5>
                  <p>AMBER@BWRAC.COM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="banner-two-sec mt-5">
        <img src="{{asset('assets/images/b&w-banner-2.png')}}" alt="banner" />
      </section>
@endsection
