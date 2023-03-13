@extends('layout.template')
@section('content')

      <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/hotel-banner.png')}}" alt="banner" />
        <div class="banner-heading position-absolute">
          <strong class="mb-2 fw-light text-white"
            >auberge resorts collection</strong
          >
          <h1 class="text-white">Mauna Lani</h1>
          <p class="text-white">KOHALA COAST, hawaii</p>
          <span class="mt-2 d-block text-white"
            >A Big Island getaway filled with activities for all ages.</span
          >
        </div>
      </section>
      <div class="banner-bottom-nav">
        <ul class="p-0 m-0 list-unstyled align-items-center">
          <li class="mx-3 active py-3"><a href="#">OVERVIEW</a></li>
          <li class="mx-3 py-3"><a href="#">CONTACTS</a></li>
          <li class="mx-3 py-3"><a href="#">PROPERTY SPECIFICS</a></li>
          <li class="mx-3 py-3"><a href="#">BOOKING + COMMISSIONS</a></li>
          <li class="mx-3 py-3"><a href="#">OFFERS AND TRAININGS</a></li>
          <li class="mx-3 py-3"><a href="#">MARKETING</a></li>
          <li class="mx-3 py-3"><a href="#">AGENT REVIEWS</a></li>
          <li class="mx-3 py-3"><a href="#">LINKS AND ARTICLES</a></li>
        </ul>
      </div>
      <section class="travelex-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 travelex-box-one">
              <h2>Property Overview</h2>
              <p class="smal-description mt-4">
                On the dramatic Kohala Coast, Mauna Lani’s secluded beaches,
                coral reefs, and ancient fishponds set the stage for a memorable
                Hawaiian getaway. This hotel’s design is highly unique with
                bright, inviting pops of color. One thing we love is how
                accessible everything is on property: wander down to the Surf
                Shack, connecting the Great Lawn to an expansive white sand
                beach. After exploring the storied coastline, make new memories
                with dinner at the celebrated CanoeHouse. All of these
                oceanfront experiences are just short walks between each other,
                keeping all of Mauna Lani well within reach.
              </p>
              <p class="smal-description mt-4">
                This upmarket oceanfront resort is a 12-minute walk from The
                Shops at Mauna Lani open-air mall.
              </p>
              <p class="smal-description mt-4">
                The airy, tropical-inspired rooms feature private lanais (many
                with sea views), plus flat-screen TVs, coffeemakers and
                minifridges. Suites add separate living areas, and bungalows
                provide kitchens, private pools and hot tubs. A daily resort fee
                covers in-room Wi-Fi.
              </p>
              <p class="smal-description mt-4">
                Complimentary activities include hula and ukulele lessons. The
                hotel offers 2 championship golf courses, a luxe spa, and a
                fitness center with a lap pool, as well as an oceanfront
                restaurant and a relaxed bar/grill. Bikes, canoes, kayaks and
                surfboards are available to hire.
              </p>

              <h4 class="mt-5">Virtuoso Amenities</h4>
              <div class="row justify-content-between w-75 mt-3">
                <div class="col-md-6 d-flex d-md-block align-items-center">
                  <img src="{{asset('assets/images/coffee.svg')}}" alt="icon" />
                  <p class="mt-2 ms-3 md-ms-0">Daily breakfast for two</p>
                </div>
                <div class="col-md-6 d-flex d-md-block align-items-center">
                  <img src="{{asset('assets/images/credit-card.svg')}}" alt="icon" />
                  <p class="mt-2 ms-3 md-ms-0">
                    $100 Resort Credit once during stay
                  </p>
                </div>
              </div>

              <h4 class="mt-5 mb-2">Offers and Latest Trainings</h4>
              <a class="text-dark-green d-flex align-items-center" href="#"
                ><img src="{{asset('assets/images/tag-icon.svg')}}" alt="icon" />
                <p class="ms-2 mb-0">Mauna Lani Special Offers</p></a
              >
            </div>
            <div class="col-md-6 travelex-box-two">
              <img
                class="travelex-logo"
                src="{{asset('assets/images/hotel-logo.svg')}}"
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
                <img src="{{asset('assets/images/b&w-profile.png')}}"  alt="img" />
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
      <section class="checked-sec">
        <div class="row">
          <div class="col-xl-5 col-lg-6 m-0 p-0 height-img">
            <div class="check-in-main">
              <div class="check-in-box">
                <div class="d-flex">
                  <img src="{{asset('assets/images/hotel-profile-1.png')}}" alt="img" />
                  <div class="check-in-heading ms-3">
                    <span>CHECKED IN May 7, 2022</span>
                    <h4>Maureen Esses</h4>
                  </div>
                </div>
                <p>
                  “This was a great experience. Overall the service is amaznig
                  and a perfect place to relax after a long day of activities at
                  the sea.”
                </p>
              </div>
              <div class="check-in-box mt-5">
                <div class="d-flex">
                  <img src="{{asset('assets/images/hotel-profile-1.png')}}" alt="img" />
                  <div class="check-in-heading ms-3">
                    <span>CHECKED IN May 7, 2022</span>
                    <h4>Maureen Esses</h4>
                  </div>
                </div>
                <p>
                  “This was a great experience. Overall the service is amaznig
                  and a perfect place to relax after a long day of activities at
                  the sea.”
                </p>
              </div>
              <h5>SUBMIT MY STAY</h5>
            </div>
            <img
              class="img-height-small w-100"
              src="{{asset('assets/images/hotel-img-2.png')}}"
              alt="img"
            />
          </div>
          <div class="col-xl-7 col-lg-6 m-0 p-0">
            <img class="w-100 height-img" src="{{asset('assets/images/hotel-img-1.png')}}"
                 alt="" />
          </div>
        </div>
      </section>
      <section class="smartflyer-sec">
        <div class="assest-box-heading smartflyer-heading pb-0">
          <span class="text-white">THE ROOMS</span>
          <h3 class="mt-3 mb-2">Soulful Hawaiian Escape</h3>
          <p class="text-white smal-description">
            Mauna Lani’s guestrooms come with a furnished lanai balcony
            overlooking mountain and ocean views. Guests will find an
            understated, natural décor that’s bright and refined with hardwood,
            natural fabrics, and textures that embody the essence of the soulful
            Hawaiian escape. The luxury suites are ideal for guests traveling
            with extended family and friends, or simply desire more space.
          </p>
        </div>

        <div class="row justify-content-between">
          <div class="col-lg-6 col-xl-4 smartflyer-heading">
            <img src="{{asset('assets/images/Line.svg')}}"
             class="mb-5" alt="img" />
            <span class="d-block opecity">Featured rooom</span>
            <h4 class="my-2">oceanfront rooms</h4>
            <p class="opecity">
              The oceanfront rooms feature a spacious balcony that’s perfect for
              catching the sunset.
            </p>
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col-lg-6 position-relative">
            <div class="position-absolute slyer-plan">
              <img src="{{asset('assets/images/smartflyer-pan-img.png')}}" alt="" />
            </div>
          </div>
        </div>
      </section>
      <section class="category-sec">
        <div class="container">
          <div>
            <span>FUN</span>
            <h2>Pool & Gym</h2>
            <p class="smal-description">
              Mauna Lani has three pools: a family pool, an adult pool, and a
              kids pool. The resort also has an on-property, open-air terraced
              fitness center. A variety of high-performance weight-training
              equipment and cardio machines are available for optimal, full-body
              workouts, including outdoor Peloton bikes, free weights, and
              various cardio units. They also offer a variety of private or
              group fitness classes, including beachfront yoga.
            </p>
          </div>
        </div>
      </section>
      <section class="banner-two-sec">
        <img src="{{asset('assets/images/hotel-img-3.png')}}" alt="banner" />
      </section>

      <section class="category-sec">
        <div class="container">
          <div>
            <span>rellaxation</span>
            <h2>Spa</h2>
            <p class="smal-description">
              The Auberge Spa offers treatments crafted with local oils, herbs,
              honey, and flowers that canvas the Island of Hawaii. Offering a
              true farm-to-spa experience, their partners and treatments support
              a model for a more sustainable Hawaiian wellness experiment. Their
              Goop Glow Facial is a highlight, and you can buy every ingredient
              involved at the on-site Goop Store.
            </p>
          </div>
        </div>
      </section>
      <section class="aero-img-sec">
        <div class="row justify-content-between">
          <div class="col-md-6">
            <img src="{{asset('assets/images/aman-resort-img-4.png')}}" alt="img" />
          </div>

          <div class="col-md-6">
            <img src="{{asset('assets/images/aman-resort-img-5.png')}}" alt="img" />
          </div>
        </div>
      </section>

      <section class="category-sec">
        <div class="container">
          <div>
            <span>food and drinks</span>
            <h2>Restaurants & Bars</h2>
            <p class="smal-description">
              The CanoeHouse features a five-course tasting menu from Matt and
              Yuka Raso, the talented Chef and General Manager duo that created
              this dining experience. With unparalleled Pacific Ocean views and
              contemporary indoor-outdoor space, guests will enjoy this vibrant
              meal amidst the mesmerizing tiki torches and fire pits all evening
              long. Their breakfast is particularly exquisite: the Purple Ube
              Pancakes and french toast are a must!
            </p>
            <p class="smal-description mt-3">
              Mauna Lani boasts an extensive variety of international wines that
              pair excellently with their Hawaiian-inspired dinners. Make sure
              to also enjoy the resort’s handcrafted Lani Tai – their signature
              drink – with some homemade ceviche at the HaBar.
            </p>
          </div>
        </div>
      </section>

      <section class="banner-two-sec">
        <img src="{{asset('assets/images/retal-escape-banner-2.png')}}" alt="banner" />
      </section>
@endsection
