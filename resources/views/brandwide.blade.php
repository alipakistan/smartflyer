@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/aman-resort-banner.png')}}" alt="banner" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">Aman Resorts</h1>
          <p class="text-white">Brandwide </p>
        </div>
      </section>
      <div class="banner-bottom-nav">
        <ul class="p-0 m-0 list-unstyled align-items-center">
          <li class="mx-3 active py-3"><a href="#">OVERVIEW</a></li>
          <li class="mx-3 py-3"><a href="#">CONTACTS</a></li>
          <li class="mx-3 py-3"><a href="#">PROPERTIES</a></li>
          <li class="mx-3 py-3"><a href="#">Things to Know</a></li>
          <li class="mx-3 py-3"><a href="#">BOOKINGS+ COMMISSIONS</a></li>
          <li class="mx-3 py-3"><a href="#">ASSETS+TRAININGS</a></li>
          <li class="mx-3 py-3"><a href="#">MARKETING</a></li>
        </ul>
      </div>
      <section class="travelex-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 travelex-box-one">
              <h2>Overview</h2>
              <p class="smal-description pe-5">
                Amanresorts was founded by Adrian Zecha in 1988 through happy
                accident. While looking for a home in Phuket, Adrian came across
                a beautiful coconut grove overlooking the Andaman Sea. It made
                business sense to build a small resort to recoup part of his
                investment, and thus was Amanpuri conceived – the first Aman
                resort. Amanpuri opened in January 1988 and celebrates its 25th
                anniversary in 2013.
              </p>
              <p class="smal-description pe-5">
                Today Amanresorts owns and manages 28 small luxury resorts and
                hotels worldwide. Every Aman resort is unique but each offers a
                guest experience that is intimate and discreet, while providing
                the highest level of service. Certain elements characterise all
                Aman resorts – a beautiful natural location, outstanding
                facilities, exceptional service and a small number of rooms to
                ensure exclusivity and privacy. The décor of each Aman makes use
                of locally-sourced materials, reflecting the resort’s natural
                surroundings and the traditions of local cultures. luxury
                resorts
              </p>

              <h4 class="mt-5 mb-2">Offers and Latest Trainings</h4>
              <a class="text-dark-green d-flex align-items-center" href="#"
                ><img src="{{asset('assets/images/tag-icon.svg')}}"  alt="icon" />
                <p class="ms-2 mb-0">Mauna Lani Special Offers</p></a
              >

              <div class="d-flex justify-content-between mt-5">
                <div>
                  <h6 class="fs-5">Links:</h6>
                  <ul class="curise-list overview-list mb-2">
                    <li>
                      <a href="#"
                        >Aman Festive Availability + COVID Protocols</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 travelex-box-two">
              <img
                class="travelex-logo"
                src="{{asset('assets/images/aman-resort-logo.svg')}}"
                alt="logo"
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
                <img src="{{asset('assets/images/b&w-profile.png')}}" alt="img" />
                <div class="ms-3">
                  <h5>
                    Rob Gilbert
                    <span class="ms-3">Senior Vice President</span>
                  </h5>
                  <p>rob@flewber.com</p>
                </div>
              </div>
              <div class="articals-links">
                <h6 class="fs-5">Articles:</h6>
                <ul class="curise-list overview-list mb-2">
                  <li>
                    <a href="#">November/December 2020</a>
                  </li>
                  <li>
                    <a href="#">September/October 2019</a>
                  </li>
                  <li>
                    <a href="#">July/August 2019</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="man-sec">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d871282.5971837641!2d74.96584584436175!3d31.45686999132186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1673732132490!5m2!1sen!2s"
          width="100%"
          height="525px"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </section>
      <section class="places-sec">
        <div class="container">
          <h2 class="mb-4">You might also like...</h2>
          <div class="row">
            <div
              class="col-md-6 col-lg-4 lg-mb-0 mb-3 place-box position-relative"
            >
              <img src="{{asset('assets/images/place-img-1.png')}}" alt="" />
              <div class="place-heading">
                <h4>LA RÉSERVE RAMATUELLE</h4>
                <span>Ramatuelle, France</span>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 lg-mb-0 mb-3 place-box position-relative"
            >
              <img src="{{asset('assets/images/place-img-2.png')}}" alt="" />
              <div class="place-heading">
                <h4>SAINT JAMES PARIS</h4>
                <span>Paris, France</span>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 lg-mb-0 mb-3 place-box position-relative"
            >
              <img src="{{asset('assets/images/place-img-3.png')}}" alt="" />
              <div class="place-heading">
                <h4>THE GLENEAGLES HOTEL</h4>
                <span>Auchterarder, Scotland </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="aero-img-sec">
        <div class="assest-box-heading pb-5">
          <div class="container">
            <span>things to know</span>
            <p>
              Aman is the most iconic Asian luxury resort brand known for
              ultra-premium service, quality, high profile clients and the most
              exotic global resort locations.
            </p>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-md-6">
            <img src="{{asset('assets/images/aman-resort-img-4.png')}}" alt="img" />
          </div>

          <div class="col-md-6">
            <img src="{{asset('assets/images/aman-resort-img-5.png')}}" alt="img" />
          </div>
        </div>
      </section>

      <section class="promo-sec adventure-promo-sec pb-5 pt-4">
        <div class="container">
          <h2>Promo</h2>
          <div class="row justify-content-between mt-5">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-6 promo-images">
                  <img src="{{asset('assets/images/aman-resort-img-6.png')}}" alt="img" />
                </div>
                <div class="promo-details col-md-6">
                  <img src="{{asset('assets/images/clock.svg')}}" alt="icon" />
                  <span>DEC 2022 - MAY 2023</span>
                  <h5>AMAN Priority Exclusives</h5>
                  <p class="">
                    Call 844.380.1331 to book. Make it a summer and fall to
                    remember. Perfect the art of relaxation or unleash your
                    spirit of adventure with a $250 Resort Credit and every 4th
                    night on us!
                  </p>
                  <button>
                    LEARN MORE <img src="{{asset('assets/images/arrow-right.svg')}}" alt="arrow" />
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-3 lg-mt-0">
              <div class="row">
                <div class="col-md-6 promo-images">
                  <img src="{{asset('assets/images/aman-resort-img-7.png')}}" alt="img" />
                </div>
                <div class="promo-details col-md-6">
                  <img src="{{asset('assets/images/clock.svg')}}" alt="icon" />
                  <span>DEC 2022 - MAY 2023</span>
                  <h5>AMAN Private Jet Expeditions</h5>
                  <p class="">
                    Call 855.550.5008 to book. Traveling with the family? Book
                    the first guest room at regular price and receive 35% off
                    the second (connecting) guest room, or choose to book a
                    Suite at regular price and receive 50% off the second
                    (connecting) guest room. Connecting room will be set up at
                    the time of the call.
                  </p>
                  <button>
                    LEARN MORE <img src="{{asset('assets/images/arrow-right.svg')}}" alt="arrow" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="banner-two-sec mt-5">
        <img src="{{asset('assets/images/retal-escape-banner-2.png')}}" alt="banner" />
      </section>


@endsection
