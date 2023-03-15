
@extends('layout.template')
@section('content')


    <section>
        <div class="container-fluid bg-light agent-search-section p-4">
            <div class="row px-lg-5">
                <div class="col-lg-2 col-md-4">
                    <div class="dropdown-center custom-dropdown">
                        <button class="btn btn-tranparent" data-bs-auto-close="outside" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            By Location
                        </button>
                        <ul class="dropdown-menu parent-menu">
                            <li><a class="dropdown-item dropdown-center text-center" data-bs-toggle="dropdown"href="#">Buca Raton</a>
                                <ul class="dropdown-menu  sub-menu-list" >
                                </ul>
                            </li>
                            <li><a class="dropdown-item dropdown-center text-center" data-bs-toggle="dropdown" href="#">USA</a>
                                <ul class="dropdown-menu  sub-menu-list" >
                                    <li><a class="dropdown-item" href="#">Washington D.C</a></li>
                                    <li><a class="dropdown-item" href="#">Connecticut</a></li>
                                    <li><a class="dropdown-item" href="#">Phoenix</a></li>
                                    <li><a class="dropdown-item" href="#">Arizona</a></li>
                                    <li><a class="dropdown-item" href="#">Las Vegas</a></li>
                                    <li><a class="dropdown-item" href="#">Hawai</a></li>
                                    <li><a class="dropdown-item" href="#">Maryland</a></li>
                                    <li><a class="dropdown-item" href="#">Oklahoma City</a></li>
                                    <li><a class="dropdown-item" href="#">Geogia</a></li>
                                    <li><a class="dropdown-item" href="#">Florida</a></li>
                                    <li><a class="dropdown-item" href="#">New York</a></li>
                                    <li><a class="dropdown-item" href="#">New Jersy</a></li>
                                    <li><a class="dropdown-item" href="#">California</a></li>
                                    <li><a class="dropdown-item" href="#">Utah</a></li>
                                    <li><a class="dropdown-item" href="#">Washington</a></li>
                                    <li><a class="dropdown-item" href="#">Colorado</a></li>
                                    <li><a class="dropdown-item" href="#">Texas</a></li>
                                    <li><a class="dropdown-item" href="#">Massachusetts</a></li>
                                    <li><a class="dropdown-item" href="#">South Carolina</a></li>
                                    <li><a class="dropdown-item" href="#">Verginia</a></li>
                                    <li><a class="dropdown-item" href="#">Missouri</a></li>
                                    <li><a class="dropdown-item" href="#">Minnesota</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item dropdown-center text-center" data-bs-toggle="dropdown" href="#">Aus</a>
                                <ul class="dropdown-menu  sub-menu-list" >
                                    <li><a class="dropdown-item" href="#">Melbourne</a></li>
                                    <li><a class="dropdown-item" href="#">Adelaide</a></li>
                                    <li><a class="dropdown-item" href="#">Gold Coast</a></li>
                                    <li><a class="dropdown-item" href="#">Cairns</a></li>
                                    <li><a class="dropdown-item" href="#">Snowy Mountains</a></li>
                                    <li><a class="dropdown-item" href="#">Sydney</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item dropdown-center text-center" data-bs-toggle="dropdown" href="#">Intl</a>
                                <ul class="dropdown-menu  sub-menu-list" >
                                    <li><a class="dropdown-item" href="#">Florence</a></li>
                                    <li><a class="dropdown-item" href="#">Brussels</a></li>
                                    <li><a class="dropdown-item" href="#">Amsterdam</a></li>
                                    <li><a class="dropdown-item" href="#">Canada</a></li>
                                    <li><a class="dropdown-item" href="#">England</a></li>
                                    <li><a class="dropdown-item" href="#">Mexico</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="dropdown-center custom-dropdown ">
                        <button class="btn btn-tranparent" data-bs-auto-close="outside" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            By Speciality
                        </button>
                        <ul class="dropdown-menu list-nothover-item">
                            <li class=" ">
                                <a class="dropdown-item" href="#">Family Travel <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Honeymoon <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Beach & Sun <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Adventure <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Europe <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Food & wine <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Hotels <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Spa & Wellness <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">History & Culture <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item " href="#">Cruise <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Air Travel <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item " href="#">Safari <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">USA <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item " data-bs-toggle="dropdown" href="#">USA <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3  d-lg-flex d-none offset-md-3 srch-agent">
                        <img class="img-fluid" src="{{asset('assets/images/destinations/search-icon.svg')}}" alt="" />
                        <input id="agent_search"  class="form-control"  placeholder="Find an agent" name="search" type="text">
                        <button  id="search_agent_btn" class="btn btn-sm bg-transparent me-md-5">Search</button>
                </div>
            </div>
        </div>
    </section>

{{--    Agent Not Found --}}

    @if(isset($agents) && !$agents)
        <div class="container">
        <div class="row mt-5 px-lg-5 ">
            <div class="col-12 agent-location d-flex">
                <div class="">

                    <a class="d-flex py-auto" href="#"> <div class="circle-icon  me-2"> </div>  Country Name</a>
                </div>

                <a class="ms-5 d-flex py-auto" href="#"> <div class="circle-icon  me-2"> </div> Search Value</a>
            </div>
        </div>

        <div class="row mt-5 px-lg-5 ">
            <div class="col-12 mt-5 text-center agent-card">
                <p>Agent Not Found</p>
            </div>
        </div>
    </div>
    @endif

    {{-- View All Agents--}}

    @if(isset($agents) && $agents)
        <section class="">
        <div class="container py-5">
            <div class="row mt-5">
                <div class="col-12 agent-location d-flex">
                    <a class="d-flex py-auto" href="#"> <div class="circle-icon  me-2"> </div> {{strtoupper($search)??''}}</a>
                </div>
            </div>
            <div class="row mt-5 px-md-5">

                @foreach($agents as $agent)
                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <a style="text-decoration: none;" href="{{route('agent',['id'=> $agent->id])}}"><h4 class="mt-md-4 mt-2">{{$agent->name}}</h4></a>
                    <span  class="mt-md-4">Location here</span>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif

    @if(!isset($agents))
        <section class="">
        <div class="container py-5">
            <div class="row px-5">
                <div class="col-lg-7">
                    <img class="img-fluid" src="{{asset('assets/images/destinations/team-map.png')}}" alt="">
                </div>
                <div class="col-lg-5 agent-text-section">
                    <div class="text-dark meet-advisor">
                        <h2 class="px-lg-4 ">Meet Your Travel Advisor</h2>
                        <p class="mt-5">Our agents have traveled the globe, discovering everything from the world's most sought-after cities to the gems you've haven't even heard of (yet, that is). Connect with a specialist to begin planning your next adventure.</p>
                        <div class="srch-agent text-center mt-5 w-100">
                            <button class="btn btn-sm bg-transparent">Explore</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row align-items-center px-md-5 mt-5">
                <div class="col-lg-4 offset-md-3 ">
                    <h2 class="px-4 my-lg-0 my-5">Agents By Specialty</h2>
                </div>
                <div class="col-lg-3">
                    <div class="dropdown-center custom-dropdown ">
                        <button class="btn btn-tranparent border py-3" data-bs-auto-close="outside" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Category
                        </button>
                        <ul class="dropdown-menu list-nothover-item">
                            <li class=" ">
                                <a class="dropdown-item" href="#">Family Travel <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Honeymoon <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Beach & Sun <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Adventure <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Europe <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Food & wine <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Hotels <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Spa & Wellness <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">History & Culture <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item " href="#">Cruise <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">Air Travel <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item " href="#">Safari <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item" href="#">USA <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item " data-bs-toggle="dropdown" href="#">USA <span class="ms-4 text-dark text-sm">63</span></a>
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="col-lg-2  my-lg-0 my-5 text-center">
                    <a href="#" class="custom-theme-btn ctb-fill ">View All</a>
                </div>
            </div>

            <div class="row mt-5 px-md-5">

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

            </div>


            <div class="row align-items-center px-md-5 mt-5">
                <div class="col-lg-4 offset-md-3">
                    <h2 class="px-4 my-lg-0 my-5">Agents By Location</h2>
                </div>
                <div class="col-lg-3">

                    <div class="dropdown-center custom-dropdown">
                        <button class="btn btn-tranparent border py-3" data-bs-auto-close="outside" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Location
                        </button>
                        <ul class="dropdown-menu parent-menu">
                            <li><a class="dropdown-item dropdown-center text-center" data-bs-toggle="dropdown"href="#">Buca Raton</a>
                                <ul class="dropdown-menu  sub-menu-list" >
                                </ul>
                            </li>
                            <li><a class="dropdown-item dropdown-center text-center" data-bs-toggle="dropdown" href="#">USA</a>
                                <ul class="dropdown-menu  sub-menu-list" >
                                    <li><a class="dropdown-item" href="#">Washington D.C</a></li>
                                    <li><a class="dropdown-item" href="#">Connecticut</a></li>
                                    <li><a class="dropdown-item" href="#">Phoenix</a></li>
                                    <li><a class="dropdown-item" href="#">Arizona</a></li>
                                    <li><a class="dropdown-item" href="#">Las Vegas</a></li>
                                    <li><a class="dropdown-item" href="#">Hawai</a></li>
                                    <li><a class="dropdown-item" href="#">Maryland</a></li>
                                    <li><a class="dropdown-item" href="#">Oklahoma City</a></li>
                                    <li><a class="dropdown-item" href="#">Geogia</a></li>
                                    <li><a class="dropdown-item" href="#">Florida</a></li>
                                    <li><a class="dropdown-item" href="#">New York</a></li>
                                    <li><a class="dropdown-item" href="#">New Jersy</a></li>
                                    <li><a class="dropdown-item" href="#">California</a></li>
                                    <li><a class="dropdown-item" href="#">Utah</a></li>
                                    <li><a class="dropdown-item" href="#">Washington</a></li>
                                    <li><a class="dropdown-item" href="#">Colorado</a></li>
                                    <li><a class="dropdown-item" href="#">Texas</a></li>
                                    <li><a class="dropdown-item" href="#">Massachusetts</a></li>
                                    <li><a class="dropdown-item" href="#">South Carolina</a></li>
                                    <li><a class="dropdown-item" href="#">Verginia</a></li>
                                    <li><a class="dropdown-item" href="#">Missouri</a></li>
                                    <li><a class="dropdown-item" href="#">Minnesota</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item dropdown-center text-center" data-bs-toggle="dropdown" href="#">Aus</a>
                                <ul class="dropdown-menu  sub-menu-list" >
                                    <li><a class="dropdown-item" href="#">Melbourne</a></li>
                                    <li><a class="dropdown-item" href="#">Adelaide</a></li>
                                    <li><a class="dropdown-item" href="#">Gold Coast</a></li>
                                    <li><a class="dropdown-item" href="#">Cairns</a></li>
                                    <li><a class="dropdown-item" href="#">Snowy Mountains</a></li>
                                    <li><a class="dropdown-item" href="#">Sydney</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item dropdown-center text-center" data-bs-toggle="dropdown" href="#">Intl</a>
                                <ul class="dropdown-menu  sub-menu-list" >
                                    <li><a class="dropdown-item" href="#">Florence</a></li>
                                    <li><a class="dropdown-item" href="#">Brussels</a></li>
                                    <li><a class="dropdown-item" href="#">Amsterdam</a></li>
                                    <li><a class="dropdown-item" href="#">Canada</a></li>
                                    <li><a class="dropdown-item" href="#">England</a></li>
                                    <li><a class="dropdown-item" href="#">Mexico</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="col-lg-2 my-lg-0 my-5 text-center">
                    <a href="#" class="custom-theme-btn  ctb-fill">View All</a>
                </div>
            </div>

            <div class="row mt-5 px-md-5">

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>

                <div class="col-lg-2 col-md-4 col-6 my-md-5 my-3 text-center agent-card">
                    <img class="" src="{{asset('assets/images/destinations/africa-3.jpg')}}" alt="">
                    <h4 class="mt-md-4 mt-2">User Name</h4>
                    <span  class="mt-md-4">Location here</span>
                </div>
            </div>
        </div>
    </section>
    @endif

    @include('contact_us')
@endsection

@section('footer-scripts')

    <script>
        $(document).on('click','#search_agent_btn',function (){

            let search = $('#agent_search').val();

            window.location.href  = "{{route('agents')}}"+"?search="+search;
        });
    </script>
@endsection
