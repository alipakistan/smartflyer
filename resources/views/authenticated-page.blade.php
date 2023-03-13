@extends('layout.template')
@section('content')

    <style>
        .places-sec,footer{
            display: none;
        }
    </style>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="mb-4">Login</h2>
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-12 borde-bottom">
            <label for="validationCustomUsername" class="form-label">USERNAME</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control input-img-one" placeholder="Name" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>

            </div>
          </div>

          <div class="col-12 borde-bottom mt-5">
            <label for="validationCustomPassword" class="form-label">PASSWORD</label>
            <div class="input-group has-validation">
<div class="hide-show position-relative w-100">
              <input type="text" class="form-control input-img-one input-img-two" placeholder="Password" id="validationCustomPassword" aria-describedby="inputGroupPrepend" required>
            </div>
            </div>

          </div>


          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
            <div class="form-check d-flex align-items-center">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label ms-2" for="invalidCheck">
                remember me
              </label>

            </div>
            <div>
              <span class="forget-pass">forgot password</span>
            </div>
          </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">LOGIN</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
      <section class="authenticated-banner-main banner-sec position-relative">
        <img src="{{asset('assets/images/authenticated-banner.png')}}" alt="banner" />
        <div class="banner-heading authenticated-banner position-absolute">
          <p class="text-white">
            full-service luxury travel agency built for curious travelers
          </p>
          <h1 class="text-white">Find Yourself Here</h1>
          <span class="smal-description pr-0 text-white">
            We specialize in creating exceptional experiences worldwide through
            curated travel recommendations, decades of trusted relationships,
            and continuous boots-on-the-ground research.
          </span>
          <button>SEE WHAT’S NEW</button>
        </div>
        <div class=" position-relative">
          <div class="banner-bottom-heading">
          <img src="{{asset('assets/images/hyatt-logo.svg')}}" alt="logo" />
          <div>
            <span>grand hyatt kochi bolgatty</span>
            <p>Featured partner (October 2022)</p>
          </div>
        </div>
        </div>
      </section>
      <section class="hotel-sec">
        <div class="container">
          <h2 class="text-center">Hotels</h2>
          <h3>Hotel Partners <sup>NEW!</sup></h3>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="hotels-box">
                  <img src="{{asset('assets/images/image-1.png')}}" class="radius-two-side" alt="img" />
                  <div class="hotel-slide-heading">
                    <span>added 10.06.2021</span>
                    <h2>Silversands Resort</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Ultricies odio nec
                      arcu nisl ut libero sem. Etiam ut diam augue ultrices
                      lectus vel vulputate eget. Volutpat dui euismod id feugiat
                      pharetra. Feugiat sed quam gravida sed bibendum tellus
                      massa.
                    </p>
                    <div class="d-flex">
                      <img src="{{asset('assets/images/map-pin.svg')}}" alt="icon" />
                      <strong>silversands, grenada</strong>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="hotels-box">
                  <img  src="{{asset('assets/images/image-2.png')}}" alt="img" />
                  <div class="hotel-slide-heading">
                    <span>added 10.06.2021</span>
                    <h2>Conrad Punta de Mita</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Ultricies odio nec arcu nisl ut libero sem. Etiam ut diam augue ultrices lectus vel vulputate eget. Volutpat dui euismod id feugiat pharetra. Feugiat sed quam gravida sed bibendum tellus massa.
                    </p>
                    <div class="d-flex">
                      <img  src="{{asset('assets/images/map-pin.svg')}}" alt="icon" />
                      <strong>silversands, grenada</strong>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="hotels-box">
                  <img class="radius-one-side"  src="{{asset('assets/images/image-3.png')}}" alt="img" />
                  <div class="hotel-slide-heading">
                    <span>added 10.06.2021</span>
                    <h2>Excellence Playa Mujares</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Ultricies odio nec
                      arcu nisl ut libero sem. Etiam ut diam augue ultrices
                      lectus vel vulputate eget. Volutpat dui euismod id feugiat
                      pharetra. Feugiat sed quam gravida sed bibendum tellus
                      massa.
                    </p>
                    <div class="d-flex">
                      <img  src="{{asset('assets/images/map-pin.svg')}}" alt="icon" />
                      <strong>silversands, grenada</strong>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="hotels-box">
                  <img class="radius-two-side"  src="{{asset('assets/images/image-4.png')}}" alt="img" />
                  <div class="hotel-slide-heading">
                    <span>added 10.06.2021</span>
                    <h2>Oasis Hotel Santorini</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Ultricies odio nec
                      arcu nisl ut libero sem. Etiam ut diam augue ultrices
                      lectus vel vulputate eget. Volutpat dui euismod id feugiat
                      pharetra. Feugiat sed quam gravida sed bibendum tellus
                      massa.
                    </p>
                    <div class="d-flex">
                      <img  src="{{asset('assets/images/map-pin.svg')}}" alt="icon" />
                      <strong>silversands, grenada</strong>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="hotels-box">
                  <img  src="{{asset('assets/images/image-1.png')}}" alt="img" />
                  <div class="hotel-slide-heading">
                    <span>added 10.06.2021</span>
                    <h2>Silversands Resort</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Ultricies odio nec
                      arcu nisl ut libero sem. Etiam ut diam augue ultrices
                      lectus vel vulputate eget. Volutpat dui euismod id feugiat
                      pharetra. Feugiat sed quam gravida sed bibendum tellus
                      massa.
                    </p>
                    <div class="d-flex">
                      <img  src="{{asset('assets/images/map-pin.svg')}}" alt="icon" />
                      <strong>silversands, grenada</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>
      <section class="hotel-promotion">
        <div class="container">
          <h3>Hotel Promotions</h3>
          <span>SmartFlyer exclusive</span>
          <div class="row">
            <div class="col-xxl-8 col-lg-6">
              <div class="position-relative">
                <img class="w-100"  src="{{asset('assets/images/image-5.png')}}" alt="img" />
                <div class="place-heading">
                  <h4>10.10.2022</h4>
                  <p class="smal-description text-white pr-0">Fall for Grenada at Silversands</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-6 mt-4 mt-lg-0">
              <div class="d-flex mb-3 align-items-center">
                <img  src="{{asset('assets/images/image-6.png')}}" alt="img" />
                <div class="hotel-promotion-heading">
                  <span>10.01.2022</span>
                  <h4>Festive with Conrad Punta de Mita</h4>
                </div>
              </div>
              <div class="d-flex mb-3 align-items-center">
                <img  src="{{asset('assets/images/image-7.png')}}" alt="img" />
                <div class="hotel-promotion-heading">
                  <span>10.01.2022</span>
                  <h4>LaCure available villas + additional commissions!</h4>
                </div>
              </div>
              <div class="d-flex mb-3 align-items-center">
                <img src="{{asset('assets/images/image-8.png')}}" alt="img" />
                <div class="hotel-promotion-heading">
                  <span>10.01.2022</span>
                  <h4>FS Advisor Rewards </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="industrt-wide-sec">
        <div class="container">
          <h6>Industry-wide</h6>
          <div class="row">
            <div class="col ">
              <img src="{{asset('assets/images/image-9.png')}}" alt="img" />
              <div class="hotel-promotion-heading">
                <span>10.01.2022</span>
                <h4>FS Advisor Rewards </h4>
              </div>
            </div>
            <div class="col ">
              <img src="{{asset('assets/images/image-10.png')}}" alt="img" />
              <div class="hotel-promotion-heading">
                <span>10.01.2022</span>
                <h4>FS Advisor Rewards </h4>
              </div>
            </div>
            <div class="col ">
              <img src="{{asset('assets/images/image-11.png')}}" alt="img" />
              <div class="hotel-promotion-heading">
                <span>10.01.2022</span>
                <h4>FS Advisor Rewards </h4>
              </div>
            </div>
            <div class="col ">
              <img src="{{asset('assets/images/image-12.png')}}" alt="img" />
              <div class="hotel-promotion-heading">
                <span>10.01.2022</span>
                <h4>FS Advisor Rewards </h4>
              </div>
            </div>
            <div class="col ">
              <img src="{{asset('assets/images/image-13.png')}}" alt="img" />
              <div class="hotel-promotion-heading">
                <span>10.01.2022</span>
                <h4>FS Advisor Rewards </h4>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="smartflyer-sec">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-xl-6 col-xxl-5 smartflyer-heading">
            <h3 class="pe-0 pe-xl-5 me-xl-4 me-xxl-5">High commission map for hotels</h3>
            <p class="smal-description text-white pe-1">Lorem ipsum dolor sit amet consectetur. Nullam enim sit libero tristique donec. Sit est malesuada risus in scelerisque. Nunc congue donec non nibh in tortor.</p>


            <div class="d-flex align-items-center percent-box justify-content-between w-md-75">
              <div class="text-center">
                <span>red</span>
                <h5>15%</h5>
              </div>
              <div class="text-center">
                <span>green</span>
                <h5>11% - 13%</h5>
              </div>
              <div class="text-center">
                <span>blue</span>
                <h5>16% - 25%</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5   position-relative">
            <div class="position-absolute slyer-plan w-100">
              <img src="{{asset('assets/images/map-img-blue.png')}}" alt="img" />
            </div>
          </div>
        </div>
      </section>

      <section class="hotel-sec">
        <div class="container">
          <h2 class="text-center">Partners</h2>
          <h3>DMC Partners <sup>NEW!</sup> </h3>
          <div class="swiper partner1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-1.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-2.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-3.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-4.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-5.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-2.svg')}}" alt="logo" />
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>

      <section class="hotel-sec">
        <div class="container">
          <h3 class="mt-0">Additional Partners <sup>NEW!</sup></h3>
          <p class="smal-description pr-0">Lorem ipsum dolor sit amet consectetur.</p>

          <div class="swiper partner1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-6.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-7.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-8.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-9.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-10.svg')}}" alt="logo" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partner-box">
                  <img src="{{asset('assets/images/logo-6.svg')}}" alt="logo" />
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>

      <section class="frequently-sec">
        <div class="container">

          <div class="row">
            <div class="col-md-3 mb-3 mb-md-0">
              <div class="position-relative">
                <img src="{{asset('assets/images/frequently-1.png')}}" alt="img" />
                <div class="place-heading">
                  <h4>Additional Partners </h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 frequently-images-box">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="position-relative">
                    <img src="{{asset('assets/images/frequently-2.png')}}" alt="img" />
                    <div class="place-heading">
                      <h4>air request form</h4>
                    </div>
                  </div>
                  <div class="position-relative">
                    <img src="{{asset('assets/images/frequently-4.png')}}" alt="img" />
                    <div class="place-heading">
                      <h4>air request form</h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="position-relative">
                    <img src="{{asset('assets/images/frequently-3.png')}}" alt="img" />
                    <div class="place-heading">
                      <h4>air request form</h4>
                    </div>
                  </div>
                  <div class="position-relative">
                    <img src="{{asset('assets/images/frequently-5.png')}}" alt="img" />
                    <div class="place-heading">
                      <h4>air request form</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="position-relative">
                <img src="{{asset('assets/images/frequently-6.png')}}" alt="img" />
                <div class="place-heading">
                  <h4>air request form</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
