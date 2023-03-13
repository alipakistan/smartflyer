@extends('layout.template')

@section('content')
    <section class="banner-sec position-relative">
        <img src="{{asset('assets/images/seabourn-banner-1.png')}}" alt="" />
        <div class="banner-heading position-absolute">
            <h1 class="text-white">Seabourn Cruises</h1>
            <p class="text-white">ultra luxury cruises</p>
        </div>
    </section>
    <div class="banner-bottom-nav">
        <ul class="p-0 m-0 list-unstyled align-items-center">
            <li class="mx-3 active py-3"><a href="#">OVERVIEW</a></li>
            <li class="mx-3 py-3"><a href="#">OVERVIEW</a></li>
            <li class="mx-3 py-3"><a href="#">THINGS TO KNOW</a></li>
            <li class="mx-3 py-3"><a href="#">BOOKINGS+ COMMISSIONS</a></li>
            <li class="mx-3 py-3"><a href="#">ASSETS+TRAININGS</a></li>
            <li class="mx-3 py-3"><a href="#">LINKS+ARTICLES</a></li>
            <li class="mx-3 py-3"><a href="#">PROMOS+UPDATES</a></li>
        </ul>
    </div>
    <section class="travelex-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 travelex-box-one">
                    <h2>Overview</h2>
                    <p class="smal-description">
                        Seabourn is a pioneer of ultra‐luxury cruising that has earned
                        unanimous accolades from cruising guidebooks, travel critics and
                        traveler polls since its launch in 1987. With five all‐suite
                        vessels roaming the globe and two brand new purpose-built
                        expedition style ships on the way, Seabourn has earned a
                        reputation for extraordinary levels of personalized service,
                        with nearly one staff member per guest. Seabourn represents the
                        pinnacle of ultra‐luxury travel with intimate ships offering key
                        elements that set the line apart: spacious, thoughtfully
                        appointed suites, many with verandas and all 100% ocean front;
                        superb dining in a choice of venues; complimentary premium
                        spirits and fine wines available on board at all times;
                        award‐winning service and a relaxed, sociable atmosphere that
                        makes guests feel right at home on board. The ships travel the
                        globe to many of the world’s most desirable destinations,
                        including marquee cities, UNESCO World Heritage Sites thanks to
                        the line’s official partnership, and lesser‐known ports and
                        hideaways. The brand&#39;s experience is well-known by luxury
                        travelers, multi- generational and professional groups, and even
                        full ship charter clients.
                    </p>

                    <h4 class="mt-5 mb-2">Perfect For:</h4>
                    <div class="d-flex justify-content-between flex-wrap">
                        <div>
                            <h6 class="fs-5 fw-normal">GLOBETROTTING LEARNERS</h6>
                            <ul class="curise-list overview-list">
                                <li>Retired affluent</li>
                                <li>Adults 65+</li>
                                <li>Highly-educated</li>
                                <li>Household income $250k +</li>
                                <li>Net worth of $3M +</li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="fs-5 fw-normal">ADVENTUROUS EXPLORERS</h6>
                            <ul class="curise-list overview-list">
                                <li>The working wealthy</li>
                                <li>Adults 45-64</li>
                                <li>Highly-educated</li>
                                <li>Household income $250k +</li>
                                <li>Net worth of $1M +</li>
                            </ul>
                        </div>
                    </div>
                    <h4 class="mb-2">Average Passenger Ship Size</h4>
                    <p class="smal-description">
                        Currently 5 ships; Seabourn Odyssey, Seabourn, Sojourn, Seabourn
                        Quest, Seabourn Ovation and Seabourn Ovation with 2 expedition
                        ships being built; Seabourn Venture and the second is yet to be
                        named.
                    </p>
                </div>
                <div class="col-md-6 travelex-box-two">
                    <img
                        class="travelex-logo"
                        src="{{asset('assets/images/seabourn-logo.svg')}}"
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
                            src="{{asset('assets/images/b&w-profile.png')}}"
                            alt="img" />
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
        <div class="row justify-content-between">
            <div class="col-lg-7 col-xl-8 col-xxl-7 smartflyer-heading">
                <span>special features</span>
                <h3>Seabourn Journeys</h3>

                <p>
                    Superbly crafted pre- and post-cruise extensions, exploring many
                    of the world’s most treasured sites that cannot be accessed on
                    single-day excursions from the ship, including iconic UNESCO World
                    Heritage locations. Our options enable your guests to combine
                    exceptional land and sea experiences seamlessly. Most Seabourn
                    Journeys welcome between two and ten guests, guaranteeing an
                    intimate, personalized adventure in Seabourn style. As a travel
                    advisor you have the opportunity to earn a 14% commission in
                    addition to the cruise commission.
                </p>
                <img class="mt-5"  src="{{asset('assets/images/Line.svg')}}" alt="img" />
            </div>
        </div>
        <div class="row justify-content-end mt-5">
            <div class="col-lg-6 position-relative mt-xxl-5">
                <div class="position-absolute slyer-plan">
                    <img src="{{asset('assets/images/smartflyer-pan-img.png')}}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="aero-img-sec seabourn-img-sec">
        <div class="assest-box-heading">
            <div class="container">
                <span>things to know</span>
                <p>
                    Destinations include Antarctica, the British Isles and Arctic, and
                    Northwest Passage.
                </p>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-6">
                <img src="{{asset('assets/images/seabourn-img-1.png')}}" alt="img" />
            </div>

            <div class="col-md-6">
                <img src="{{asset('assets/images/seabourn-img-2.png')}}" alt="img" />
            </div>
        </div>
    </section>

    <section class="assests-sec">
        <div class="container">
            <h2 class="mb-4">Links</h2>
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
    <section class="promo-sec pb-5">
        <div class="container">
            <h2>Promo</h2>
            <div class="row justify-content-between mt-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 promo-images">
                            <img src="{{asset('assets/images/seabourn-img-3.png')}}" alt="img" />
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
                                LEARN MORE  <img src="{{asset('assets/images/arrow-right.svg')}}" alt="arrow" />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3 lg-mt-0">
                    <div class="row">
                        <div class="col-md-6 promo-images">
                            <img src="{{asset('assets/images/seabourn-img-4.png')}}"  alt="img" />
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
                                LEARN MORE <img src="{{asset('assets/images/arrow-right.svg')}}"  alt="arrow" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-two-sec mt-5">
        <img src="{{asset('assets/images/seabourn-banner-2.png')}}" alt="banner" />
    </section>
@endsection
