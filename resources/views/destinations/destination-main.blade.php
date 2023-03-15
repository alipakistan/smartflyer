@extends('layout.template')

@section('content')
    <section>
        <div class="destination-hero">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img id="map-image" class="img-fluid" src="{{asset('assets/images/destinations/africa-map.svg')}}" alt="">

                    </div>
                    <div class="col-md-6 destination-list">
                        <ul>
                            <li> <a onmouseover="changeImg('/images/africa-map.svg')" onmouseleave="undo(this)" href="/destinations/africa.html"> Africa <span class="ms-5">Explore <i class="ms-3 fa-sharp fa-solid fa-arrow-right"></i> </span> </a></li>
                            <li> <a onmouseover="changeImg('/images/americas-map.svg')" onmouseleave="undo(this)" href="/destinations/america.html"> Americas <span class="ms-5">Explore <i class="ms-3 fa-sharp fa-solid fa-arrow-right"></i> </span> </a></li>
                            <li> <a onmouseover="changeImg('/images/asia-map.svg')" onmouseleave="undo(this)" href="/destinations/asia.html"> Asia <span class="ms-5">Explore <i class="ms-3 fa-sharp fa-solid fa-arrow-right"></i> </span> </a></li>
                            <li> <a onmouseover="changeImg('/images/caribbean-map.svg')" onmouseleave="undo(this)" href="/destinations/caribbean-mexico.html"> Carribean + Mexico <span class="ms-5">Explore <i class="ms-3 fa-sharp fa-solid fa-arrow-right"></i> </span> </a></li>
                            <li> <a onmouseover="changeImg('/images/europe-map.svg')" onmouseleave="undo(this)" href="/destinations/europe.html"> Europe <span class="ms-5">Explore <i class="ms-3 fa-sharp fa-solid fa-arrow-right"></i> </span> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="des-title ">Reviews</h2>
                </div>
                <div class="col-12 mt-5 shadow-lg py-3">
                    <div class="row g-0">
                        <div class="col-md-4 select-container">
                            <select class="form-select rounded-0 p-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-md-4 select-container">
                            <select class="form-select rounded-0 p-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-md-4 select-container">
                            <select class="form-select rounded-0 p-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-md-4 select-container offset-md-8 mt-3">
                            <button type="button" class="custom-outline-button">Filter</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="places-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 lg-mb-0 mb-3 place-box position-relative">
                    <a href="#">
                        <div class="ca-box">
                            <img class="ca-image img-fluid" src="{{asset('assets/images/destinations/africa-namib-desert.jpg')}}" alt="">
                            <div class="place-heading ca-content">
                                <h4>RAFFLES SEYCHELES</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 lg-mb-0 mb-3 place-box position-relative">
                    <a href="#">
                        <div class="ca-box">
                            <img class="ca-image img-fluid"  src="{{asset('assets/images/destinations/africa-namib-desert.jpg')}}" alt="">
                            <div class="place-heading ca-content">
                                <h4>RAFFLES SEYCHELES</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 lg-mb-0 mb-3 place-box position-relative">
                    <a href="#">
                        <div class="ca-box">
                            <img class="ca-image img-fluid"  src="{{asset('assets/images/destinations/africa-namib-desert.jpg')}}" alt="">
                            <div class="place-heading ca-content">
                                <h4>RAFFLES SEYCHELES</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 lg-mb-0 mb-3 place-box position-relative">
                    <a href="#">
                        <div class="ca-box">
                            <img class="ca-image img-fluid"  src="{{asset('assets/images/destinations/africa-namib-desert.jpg')}}" alt="">
                            <div class="place-heading ca-content">
                                <h4>RAFFLES SEYCHELES</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 lg-mb-0 mb-3 place-box position-relative">
                    <a href="#">
                        <div class="ca-box">
                            <img class="ca-image img-fluid"  src="{{asset('assets/images/destinations/africa-namib-desert.jpg')}}" alt="">
                            <div class="place-heading ca-content">
                                <h4>RAFFLES SEYCHELES</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 lg-mb-0 mb-3 place-box position-relative">
                    <a href="#">
                        <div class="ca-box">
                            <img class="ca-image img-fluid"  src="{{asset('assets/images/destinations/africa-namib-desert.jpg')}}" alt="">
                            <div class="place-heading ca-content">
                                <h4>RAFFLES SEYCHELES</h4>
                            </div>
                        </div>
                    </a>
                </div>


            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 select-container mt-5">
                    <button type="button" class="custom-outline-button">Explore More</button>
                </div>
            </div>
        </div>
    </section>



@endsection
