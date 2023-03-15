@extends('layout.template')

@section('content')

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 agent-cover">
                    <img class="img-fluid" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="agent-profile">
                        <img class="img-fluid" src="{{isset($agent->image_relative_url)?\Illuminate\Support\Facades\Storage::disk('s3')->url($agent->image_relative_url):''}}" alt="">
                        <h2>{{$agent->name}}</h2>
                        <h5 class="mt-3">Melbourne</h5>
                        <h5>9 Years of Experience</h5>
                        <div class="mt-4 agent-specialities">
                            <h5>Specialities</h5>
                            <a href="">CRUISE , AIR TRAVEL , HOTELS </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-12 my-5">
                    <div class="agent-description ps-md-5 border-md-start mt-md-5">

                        <h3>
                            A native Texan who moved to Washington D.C. to pursue politics, Virginia quickly learned that travel is her true passion.
                        </h3>

                        <p class="mt-5">
                            At a young age, Virginia remembers taking summer vacations with family and how much she loved learning about people, cultures and places around the world. As a travel advisor, Virginia aims to share that same fulfillment brought by experiencing new destinations with clients. She crafts personalized itineraries around the globe for families, couples, and solo travelers, customizing each adventure to keep all ages engaged. For the kids, she likes to create active trips whereas for couples or solo travelers, sometimes it’s more about a fabulous hotel room with a view accompanied by a refreshing pool and craft cocktail. Whatever your travel needs are, Virginia has you covered.
                        </p>

                        <div class="mt-5">
                            <h5>WHAT IS YOUR MOST MEMORABLE TRAVEL EXPERIENCE?</h5>
                            <p class="mt-3">
                                My most memorable travel experience was watching my daughter see the Eiffel Tower for the first time. Instilling the passion for travel in my children is something they will take with them for the rest of their lives. I love that travel educates the next generation to learn about other cultures and meet new people all over the world!
                            </p>
                        </div>

                        <div class="mt-5">
                            <h5>WHAT DOES YOUR PERFECT VACATION DAY LOOK LIKE?</h5>
                            <p class="mt-3">
                                My perfect vacation day is a mix of culture and relaxation. I prefer to go out and visit the sites with a local guide in the morning, followed by grabbing lunch at a café, then hit the pool or spa during the afternoon before finishing the day off with a drink at sunset and dinner.
                            </p>
                        </div>

                        <div class="mt-5 agent-travel-tip">
                            <h5>Travel Tip</h5>
                            <p class="mt-3">
                                The lighter you pack the better! If you think you might not use it, leave it at at home! Leave room for a little shopping along the way but don't forget your passport.
                            </p>
                        </div>

                        <div class="mt-5 agent-testimonial">
                            <h5>Testimonial</h5>
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit impedit tempore adipisci, provident ullam amet quo, recusandae esse porro nemo ducimus nobis sunt doloribus fuga sapiente nisi, velit pariatur non.
                            </p>

                            <span>-Client Name</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
