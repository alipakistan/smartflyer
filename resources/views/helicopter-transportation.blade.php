@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/blade-banner.png')}}" alt="banner" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">Blade</h1>
          <p class="text-white">Fly the future</p>
        </div>
      </section>
      <div class="banner-bottom-nav">
        <ul class="p-0 m-0 list-unstyled">
          <li class="mx-5 active py-3"><a href="#">OVERVIEW</a></li>
          <li class="mx-5 py-3"><a href="#">CONTACTS</a></li>
          <li class="mx-5 py-3"><a href="#">THINGS TO KNOW</a></li>
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
                BLADE is a technology-powered, global urban air mobility
                platform committed to reducing travel friction by enabling
                cost-effective air transportation alternatives to some of the
                most congested ground routes in the U.S. and abroad.
              </p>

              <p class="smal-description mt-5">
                No company flies more people in and out of city centers than
                BLADE. See BLADE's helicopter and jet charter routes.
              </p>

              <p class="smal-description mt-5">
                With BLADE, you can book by-the-seat on scheduled flights
                throughout the Northeast and West Coast or charter or
                crowdsource a flight anywhere in the world. From the moment you
                book, you’ll experience a level of precision, culture of
                accommodation and on-the-ground experience that is unmatched.
                Whether you’re traveling by helicopter, seaplane or jet, BLADE
                is the most time-efficient, cost-effective and inspiring way to
                mitigate urban travel pain points that have increasingly become
                a significant part of our daily lives.
              </p>

              <p class="smal-description mt-5">
                BLADE adheres to the most advanced Health and Safety Protocol in
                the aviation industry today.
              </p>

              <h4 class="mt-5 mb-2">Major areas of service</h4>
              <p class="smal-description mb-5">
                Commute by helicopter or seaplane within and around cities and
                jet to popular destinations.
              </p>
            </div>
            <div class="col-md-6 travelex-box-two">
              <img
                class="travelex-logo lg-mt-4"
                src="{{asset('assets/images/blade-logo.svg')}}"
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
                <img src="{{asset('assets/images/blade-profile.png')}}" alt="" />
                <div class="ms-3">
                  <h5>
                    Flyer Relations
                    <span class="ms-3">GM</span>
                  </h5>
                  <p class="d-flex flex-wrap">
                    884.359.2523
                    <span class="px-3 d-block"> | </span>fr@flyblade.com
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="aero-img-sec">
        <div class="row justify-content-between">
          <div class="col-md-6">
            <img src="{{asset('assets/images/ahoy-club-img-1.png')}}" alt="img" />
          </div>

          <div class="col-md-6">
            <img src="{{asset('assets/images/ahoy-club-img-2.png')}}"s alt="img" />
          </div>
        </div>
      </section>

      <section class="assests-sec">
        <div class="container">
          <div class="assest-box-heading">
            <span>things to know</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
              pharetra ligula neque, commodo rutrum elit placerat sit amet.
            </p>
          </div>
          <h2 class="mb-4">Links</h2>
          <h3 class="text-black fs-3 pt-4">Trainings</h3>
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
      <section class="banner-two-sec">
        <img src="{{asset('assets/images/blade-banner-2.png')}}" alt="banner" />
      </section>
@endsection
