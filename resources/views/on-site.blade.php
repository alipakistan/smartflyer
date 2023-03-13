@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/adventure-banner-1.png')}}" alt="banner" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">HL Adventure</h1>
          <p class="text-white">luxury travel and luxury adventure </p>
        </div>
      </section>
      <div class="banner-bottom-nav">
        <ul class="p-0 m-0 list-unstyled align-items-center">
          <li class="mx-3 active py-3"><a href="#">OVERVIEW</a></li>
          <li class="mx-3 py-3"><a href="#">CONTACTS</a></li>
          <li class="mx-3 py-3"><a href="#">THINGS TO KNOW</a></li>
          <li class="mx-3 py-3"><a href="#">BOOKINGS+ COMMISSIONS</a></li>
          <li class="mx-3 py-3"><a href="#">ASSETS+TRAININGS</a></li>
          <li class="mx-3 py-3"><a href="#">CROWDSOURCING+ARTICLE LINKS</a></li>
          <li class="mx-3 py-3"><a href="#">PROMOS+UPDATES</a></li>
        </ul>
      </div>
      <section class="travelex-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 travelex-box-one">
              <h2>Overview</h2>
              <p class="smal-description">
                HL Adventure is a Destination Management Company (DMC) and an
                authorized tour operator based in Iceland. A DMC is a one-stop
                shop for travel professionals, corporate planners, MICE
                specialists or anyone who’s looking for creative programs
                targeted to a group’s particular needs and interests. A DMC is
                essentially a team of professionals, working one-on-one with
                clients to create tailor-made solutions for meetings, events and
                incentives. As destination experts with first-hand knowledge of
                the local scene, HL Adventure handles all arrangements from
                start to finish, including accommodation, ground transfer, venue
                sourcing, entertainment, dining and much more. Furthermore, with
                an extensive portfolio of trusted local suppliers, HL Adventure
                can offer a truly authentic experience. At HL Adventure we also
                organize luxury travel and luxury adventure trips for people who
                like to travel in a different way. Our main operating
                territories are Iceland and Greenland, Spitsbergen, Antarctica
                and the and the North Pole.
              </p>

              <h4 class="mt-5 mb-2">SF Exclusive Amenities</h4>
              <p class="smal-description">
                Pre-planning services, on the ground services, on-property
                amenities etc.
              </p>
              <p class="smal-description">
                Rental Escapes offers complimentary concierge services including
                in-villa services as well as in destination experiences.
                Services include, chef, housekeeping, massage. The team also
                arranges ground transportation, private yacht and jet charters,
                and more
              </p>
              <div class="d-flex justify-content-between mt-5">
                <div>
                  <h6 class="fs-5">SmartFlyer Trainings</h6>
                  <ul class="curise-list overview-list mb-2">
                    <li><a href="#">Active Campaign Training</a></li>
                    <li>
                      <a href="#"
                        >Sign up for one-on-one email marketing trainings
                        here!</a
                      >
                    </li>
                    <li>
                      <a href="#">ActiveCampaign Contact Import Process</a>
                    </li>
                    <li><a href="#">Outlook Signature How-To</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 travelex-box-two">
              <img
                class="travelex-logo"
                src="{{asset('assets/images/adventure-logo.svg')}}"
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
                <img src="{{asset('assets/images/b&w-profile.png')}}" alt="img" />
                <div class="ms-3">
                  <h5>
                    Rob Gilbert
                    <span class="ms-3">Senior Vice President</span>
                  </h5>
                  <p>rob@flewber.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="smartflyer-sec">
        <div class="assest-box-heading smartflyer-heading pb-0">
          <span class="text-white">seasonality</span>
          <p class="text-white">
            All year long (Northern lights season from September to mid-April;
            midnight sun season from June to end of August)
          </p>
        </div>

        <div class="row justify-content-between">
          <div class="col-lg-6 col-xl-4 smartflyer-heading">
            <img class="mb-5" src="{{asset('assets/images/Line.svg')}}" alt="img" />
            <span class="d-block opecity">top selling itenerary</span>
            <h4 class="my-2">oceanfront luxury stay</h4>
            <p class="opecity">
              The oceanfront rooms feature a spacious balcony that’s perfect for
              catching the sunset.
            </p>
          </div>
          <div class="col-lg-6 position-relative">
            <div class="position-absolute slyer-plan">
              <img src="{{asset('assets/images/smartflyer-pan-img.png')}}" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="promo-sec adventure-promo-sec pb-5">
        <div class="container">
          <h2>Promo</h2>
          <div class="row justify-content-between mt-5">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-6 promo-images">
                  <img src="{{asset('assets/images/adventure-img-1.png')}}" alt="img" />
                </div>
                <div class="promo-details col-md-6">
                  <img src="{{asset('assets/images/clock.svg')}}" alt="icon" />
                  <span>DEC 2022 - MAY 2023</span>
                  <h5>4th Night on Us + $250 Credit | Experience More</h5>
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
                  <img src="{{asset('assets/images/adventure-img-2.png')}}" alt="img" />
                </div>
                <div class="promo-details col-md-6">
                  <h5>Stay Connected with up to 50% Off Your 2nd Room</h5>
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
        <img src="{{asset('assets/images/adventure-banner-2.png')}}" alt="banner" />
      </section>
@endsection
