@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/retal-escape-banner-1.png')}}" alt="banner" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">Rental Escapes</h1>
          <p class="text-white">luxury villas rental </p>
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
                Since launching in 2012, Rental Escapes has been committed to
                providing guests with unparalleled travel experiences throughout
                the world. With a selection of more than 4,500 private rentals
                in 65 destinations and a portfolio of industry-leading personal
                concierge services, Rental Escapes pays great attention to
                detail to deliver top-tier travel experiences that are tailored
                to each guest’s dreams.
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
                src="{{asset('assets/images/retal-escape-logo.svg')}}"
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
            </div>
          </div>
        </div>
      </section>
      <section class="smartflyer-sec">
        <div class="assest-box-heading smartflyer-heading pb-0">
          <span class="text-white">about rental escapes</span>
          <p class="text-white pe-lg-5 me-lg-5">
            Rental Escapes will work with you and their partners on the ground
            to coordinate all the logistics of your arrival, your return home
            and everything in between.
          </p>
        </div>

        <div class="row justify-content-between">
          <div class="col-lg-6 col-xl-4 smartflyer-heading">
            <img class="mb-5" src="{{asset('assets/images/Line.svg')}}"  alt="img" />
            <span class="d-block opecity">KEY SELLING POINT</span>
            <h4 class="my-2">this is a sample title</h4>
            <p class="opecity">
              The oceanfront rooms feature a spacious balcony that’s perfect for
              catching the sunset.
            </p>
          </div>
          <div class="col-lg-6 position-relative">
            <div class="position-absolute slyer-plan">
              <img src="{{asset('assets/images/retal-escape-img-1.png')}}" alt="img" />
            </div>
          </div>
        </div>
      </section>

      <section class="aero-img-sec seabourn-img-sec">
        <div class="assest-box-heading">
          <div class="container">
            <span>things to know</span>
            <p>
              Most requested destinations are Caribbean, Mexico, Italy, Florida
            </p>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-md-6">
            <img src="{{asset('assets/images/retal-escape-img-2.png')}}" alt="img" />
          </div>

          <div class="col-md-6">
            <img src="{{asset('assets/images/retal-escape-img-3.png')}}" alt="img" />
          </div>
        </div>
      </section>

      <section class="assests-sec">
        <div class="container">
          <h2 class="mb-4">Promotions</h2>
          <h3 class="text-black fs-3 pt-4">Promotions by Destination</h3>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Barbados</h5>
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
                  <h5>Cayman Islands</h5>
                  <span
                    >https://static1.squarespace.com/static/55fa61eee4b0ff96fa20ac0e/t/629d544660486d1970c23369/1654477895822/Hyatt+Brand+Bar+with+Brand+Descriptions.pdf</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Dominican Republic</h5>
                  <span>https://www.hyatt.com/prive/login?next=/prive</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Italy</h5>
                  <span
                    >https://static1.squarespace.com/static/55fa61eee4b0ff96fa20ac0e/t/5f860cdd1ad6726ebbc86ca2/1602620641081/Work+From+Hyatt.pdf</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Jamaica</h5>
                  <span
                    >https://static1.squarespace.com/static/55fa61eee4b0ff96fa20ac0e/t/5f860cdd1ad6726ebbc86ca2/1602620641081/Work+From+Hyatt.pdf</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Maldives</h5>
                  <span
                    >https://drive.google.com/file/d/15flqPEUSVH5ps7aURyNfSfOxixjyIOgT/view</span
                  >
                </div>
              </div>
            </div>
          </div>

          <h2 class="mb-4 mt-5">Links</h2>
          <h3 class="text-black fs-3 pt-4">Compare Destinations</h3>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Antigua vs St Lucia</h5>
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
                  <h5>Barbados vs The Bahamas</h5>
                  <span
                    >https://static1.squarespace.com/static/55fa61eee4b0ff96fa20ac0e/t/629d544660486d1970c23369/1654477895822/Hyatt+Brand+Bar+with+Brand+Descriptions.pdf</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Punta Mita vs Puerto Vallarta</h5>
                  <span>https://www.hyatt.com/prive/login?next=/prive</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Provence vs. Tuscany</h5>
                  <span
                    >https://static1.squarespace.com/static/55fa61eee4b0ff96fa20ac0e/t/5f860cdd1ad6726ebbc86ca2/1602620641081/Work+From+Hyatt.pdf</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Anguilla vs St. Barts</h5>
                  <span
                    >https://static1.squarespace.com/static/55fa61eee4b0ff96fa20ac0e/t/5f860cdd1ad6726ebbc86ca2/1602620641081/Work+From+Hyatt.pdf</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div
                class="mt-3 d-flex primary-contact primary-contact2 bg-white p-3"
              >
                <div>
                  <h5>Montego Bay vs Ocho Rios: Nightlife</h5>
                  <span
                    >https://drive.google.com/file/d/15flqPEUSVH5ps7aURyNfSfOxixjyIOgT/view</span
                  >
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
