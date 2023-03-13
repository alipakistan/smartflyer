@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/experiences-bg-1.png')}}" alt="" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">Blue Ribbon Bags</h1>
          <p class="text-white">travel safe and worry free</p>
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
              <p class="smal-description">
                BlueRibbon Bags sole focus and business is to ensure your
                clients receive their lost luggage. If the airline mishandles
                the passengers bag, BlueRibbon Bags guarantee the client will
                receive their bag within 96 hours.
              </p>
              <p class="smal-description mt-4">
                While BlueRibbon Bags has a 99% recovery rate, if BlueRibbon
                Bags fails to bring the bag back to your client in the 96 hour
                window, they provide a one-time coverage ranging from $1,000 -
                $2,000 per bag. BlueRibbon Bags will submit any form of payment
                the client may want (PayPal, Apple Pay, Check, Wire, etc.).
              </p>

              <h4 class="mt-5 mb-2">Major areas of service</h4>
              <ul class="overview-list">
                <li>
                  BlueRibbon Bags covers every airline, everywhere in the world.
                </li>
                <li>
                  BlueRibbon Bags continues to look for your clients luggage
                  even if they do not find the bag within the 96 hour window.
                </li>
              </ul>
              <h4 class="mb-2">Booking portal</h4>

              <button>GO TO BOOKING PORTAL</button>
            </div>
            <div class="col-md-6 travelex-box-two">
              <img class="ribbon-logo" src="{{asset('assets/images/ribbon-tag.svg')}}" alt="" />
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
                <img src="{{asset('assets/images/contact-img.png')}}" alt="" />
                <div class="ms-3">
                  <h5>Rob Gilbert</h5>
                  <p>rob@flewber.com</p>
                </div>
                <span>Senior Vice President</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="banner-two-sec lg-mt-5">
        <img src="{{asset('assets/images/experiences-bg-2.png')}}" alt="banner" />
      </section>
@endsection
