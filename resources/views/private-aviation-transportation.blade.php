@extends('layout.template')
@section('content')
      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/aero-banner-1.png')}}" alt="" />
        <div class="banner-heading position-absolute">
          <h1 class="text-white">Aero</h1>
          <p class="text-white">The Future of First Class</p>
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
                What we believe- Traveling with Aero is not merely flying — it
                is an event
              </p>
              <p class="smal-description mt-4">
                We believe a life well lived is not about getting from A to B.
                It's about getting the most from the entire journey. We value
                curation over endless selection, authenticity over influence,
                and ease over extravagance because we are committed to making
                your travel experience exceptional from the moment you are
                inspired to take a trip. We do it all because we know the "why"
                and "how" of the journey is often a more meaningful story than
                the "where".
              </p>

              <h4 class="mt-4 mb-2">Flight Inclusions</h4>
              <p class="smal-description mb-5">Private Concierge</p>
              <h4 class="mb-2">Areas Serviced</h4>
              <p class="smal-description mb-5">
                North America and the Caribbean
              </p>

              <h4 class="mb-2">SF Exclusives</h4>
              <p class="smal-description mb-4 pe-3">
                Pre-planning services, on the ground services, on-property
                amenities etc.
              </p>
              <p class="smal-description mt-4 pe-3">
                Rental Escapes offers complimentary concierge services including
                in-villa services as well as in destination experiences.
                Services include, chef, housekeeping, massage. The team also
                arranges ground transportation, private yacht and jet charters,
                and more
              </p>
            </div>
            <div class="col-md-6 travelex-box-two">
              <img class="aero-logo" src="{{asset('assets/images/aero-logo.svg')}}" alt="" />
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
                  <h5>
                    Rob Gilbert<span class="ms-3">Senior Vice President</span>
                  </h5>
                  <p>rob@flewber.com</p>
                </div>
              </div>
              <div class="mt-5">
                <h3>Sales Contact</h3>
                <div class="mt-4 d-flex primary-contact bg-white p-4">
                  <img src="{{asset('assets/images/contact-img.png')}}" alt="" />
                  <div class="ms-3">
                    <h5>
                      Rob Gilbert<span class="ms-3">Senior Vice President</span>
                    </h5>
                    <p>rob@flewber.com</p>
                  </div>
                </div>
              </div>
              <div class="mt-5">
                <h3>Global Contact</h3>
                <div class="mt-4 d-flex primary-contact bg-white p-4">
                  <img src="{{asset('assets/images/contact-img.png')}}" alt="" />
                  <div class="ms-3">
                    <h5>
                      Rob Gilbert<span class="ms-3">Senior Vice President</span>
                    </h5>
                    <p>rob@flewber.com</p>
                  </div>
                </div>
              </div>
              <div class="mt-5">
                <h3>Commission Inquiry Contact</h3>
                <div class="mt-4 d-flex primary-contact bg-white p-4">
                  <img src="{{asset('assets/images/contact-img.png')}}" alt="" />
                  <div class="ms-3">
                    <h5>
                      Rob Gilbert<span class="ms-3">Senior Vice President</span>
                    </h5>
                    <p>
                      jana.mirkovic@aero.com | WhatsApp: EU +44 7401 292376/ US
                      +1 415 650 2376
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="aero-img-sec">
        <div class="row justify-content-between">
          <div class="col-md-6">
            <img src="{{asset('assets/images/aero-img-1.png')}}" alt="img" />
          </div>

          <div class="col-md-6">
            <img src="{{asset('assets/images/aero-img-2.png')}}" alt="img" />
          </div>
        </div>
      </section>

      <section class="assests-sec">
        <div class="container">
          <h2 class="mb-4">Links</h2>
          <h3 class="text-black fs-3 pt-4">Marketing Assets</h3>
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

          <h3 class="text-black fs-3 mt-5">Trainings</h3>
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
        <img src="{{asset('assets/images/aero-banner-two.png')}}" alt="banner" />
      </section>
@endsection
