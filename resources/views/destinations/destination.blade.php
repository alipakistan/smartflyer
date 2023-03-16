@extends('layout.template')

@section('content')
<section class="destination-header" 
style="background-image: url({{asset('assets/images/destinations/africa.jpg')}});
background-position: center;background-size: cover;background-repeat: no-repeat;">
    <div class="container">
        <div class="row py-5 justify-content-center">
            <div class="col-12 africa-map ">
                <img class="mx-auto d-block" src="{{ $destination ? \Illuminate\Support\Facades\Storage::disk('s3')->url($destination->header_image) : asset('assets/images/destinations/africa-map.svg')}}" alt="africa map">
            </div>
            <div class="col-12 mt-5 text-center ">
                <p class="destination-title">{{$destination->title}}</p>
            </div>
        </div>
    </div>
</section>

<section class="explore-destination">

    <div class="container h-100 mt-5 py-5">
        <div class="row">
            <div class="col-md-5 col-12 order-md-0 order-1">
                <div class="des-img-1">
                    <img class="img-fluid" src="{{ $destination_images ? \Illuminate\Support\Facades\Storage::disk('s3')->url($destination_images[1]) : asset('assets/images/destinations/africa-morroco.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-md-7 col-12 px-md-5 order-md-2 order-0">
                <h2 class="des-title mb-4">Explore {{$destination->title}}</h2>
                <p class="body-text">{!!$destination->detail  !!}</p>

                <img class="img-fluid des-img-2" src="{{ $destination_images ? \Illuminate\Support\Facades\Storage::disk('s3')->url($destination_images[2]) : asset('assets/images/destinations/africa-namib-desert.jpg') }}" alt="">
            </div>
        </div>

        <div class="row ">
            <div class="col-md-6 col-12">
                <img class="img-fluid stamp-img" src="{{asset('assets/images/destinations/stamp.png')}}" alt="">
                <div class="des-img-3 ">
                    <img src="{{ $destination_images ? \Illuminate\Support\Facades\Storage::disk('s3')->url($destination_images[0]) : asset('assets/images/destinations/africa-3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="third-section h-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="des-title ">A little inspiration for your next getaway</h2>
            </div>

            <div class="col=12 mt-5 border-0">

                <div class="owl-carousel owl-theme">
                    <div class="item card-content">
                        <img src="{{asset('assets/images/destinations/img (1).jpg')}}" alt="">

                        <h5 class="my-3">Industry Intel</h5>
                        <h3 class="">Luxury Safari: The Greater Impact of Your Tourism Dollars</h3>
                        <p class="">
                            We given a great deal of thought to how one’s personal investment in travel impacts the broader global communities with whom we aim to connect. In the past, we’ve highlighted how philanthropic trips around the world – including visits with locals living nearby the spectacularly rugged Nihi Sumba in Indonesia and iconic Laucala Island in Fiji – can empower guests to return home with all the benefits of traveling for the greater good. But we’re forever swooning over the long-lasting impact of embarking on a luxury safari.
                        </p>

                        <h5 class="my-3 card-blog-writter">Contributed By: <span> Kayla Douglas</span></h5>
                    </div>

                    <div class="item card-content">
                        <img src="{{asset('assets/images/destinations/img (2).jpg')}}" alt="">

                        <h5 class="my-3">Industry Intel</h5>
                        <h3 class="">Luxury Safari: The Greater Impact of Your Tourism Dollars</h3>
                        <p class="">
                            We given a great deal of thought to how one’s personal investment in travel impacts the broader global communities with whom we aim to connect. In the past, we’ve highlighted how philanthropic trips around the world – including visits with locals living nearby the spectacularly rugged Nihi Sumba in Indonesia and iconic Laucala Island in Fiji – can empower guests to return home with all the benefits of traveling for the greater good. But we’re forever swooning over the long-lasting impact of embarking on a luxury safari.
                        </p>

                        <h5 class="my-3 card-blog-writter">Contributed By: <span> Kayla Douglas</span></h5>
                    </div>

                    <div class="item card-content">
                        <img src="{{asset('assets/images/destinations/img (3).jpg')}}" alt="">

                        <h5 class="my-3">Industry Intel</h5>
                        <h3 class="">Luxury Safari: The Greater Impact of Your Tourism Dollars</h3>
                        <p class="">
                            We given a great deal of thought to how one’s personal investment in travel impacts the broader global communities with whom we aim to connect. In the past, we’ve highlighted how philanthropic trips around the world – including visits with locals living nearby the spectacularly rugged Nihi Sumba in Indonesia and iconic Laucala Island in Fiji – can empower guests to return home with all the benefits of traveling for the greater good. But we’re forever swooning over the long-lasting impact of embarking on a luxury safari.
                        </p>

                        <h5 class="my-3 card-blog-writter">Contributed By: <span> Kayla Douglas</span></h5>
                    </div>

                    <div class="item card-content">
                        <img src="{{asset('assets/images/destinations/img (4).jpg')}}" alt="">

                        <h5 class="my-3">Industry Intel</h5>
                        <h3 class="">Luxury Safari: The Greater Impact of Your Tourism Dollars</h3>
                        <p class="">
                            We given a great deal of thought to how one’s personal investment in travel impacts the broader global communities with whom we aim to connect. In the past, we’ve highlighted how philanthropic trips around the world – including visits with locals living nearby the spectacularly rugged Nihi Sumba in Indonesia and iconic Laucala Island in Fiji – can empower guests to return home with all the benefits of traveling for the greater good. But we’re forever swooning over the long-lasting impact of embarking on a luxury safari.
                        </p>

                        <h5 class="my-3 card-blog-writter">Contributed By: <span> Kayla Douglas</span></h5>
                    </div>

                    <div class="item card-content">
                        <img src="{{asset('assets/images/destinations/img (5).jpg')}}" alt="">

                        <h5 class="my-3">Industry Intel</h5>
                        <h3 class="">Luxury Safari: The Greater Impact of Your Tourism Dollars</h3>
                        <p class="">
                            We given a great deal of thought to how one’s personal investment in travel impacts the broader global communities with whom we aim to connect. In the past, we’ve highlighted how philanthropic trips around the world – including visits with locals living nearby the spectacularly rugged Nihi Sumba in Indonesia and iconic Laucala Island in Fiji – can empower guests to return home with all the benefits of traveling for the greater good. But we’re forever swooning over the long-lasting impact of embarking on a luxury safari.
                        </p>

                        <h5 class="my-3 card-blog-writter">Contributed By: <span> Kayla Douglas</span></h5>
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
                        <img class="ca-image img-fluid" src="{{asset('assets/images/destinations/africa-namib-desert.jpg')}}" alt="">
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
