<header class="d-none">
    <nav class="navbar fixed-top navbar-expand-lg navbar-custom">
        <div class="container-fluid px-5 py-4">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{asset('assets/images/destinations/logo.svg')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item nav-item-custom dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="{{route('destination-main')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Destinations
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            @php
                                $destinations = \App\Models\Destination::all();
                            @endphp

                            @foreach($destinations as $destination)
                                <li><a class="dropdown-item destinations-dropdown" href="/destination/{{$destination->title}}">{{$destination->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item nav-item-custom me-2">
                        <a class="nav-link" href="#">Stories</a>
                    </li>
                    <li class="nav-item nav-item-custom dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li><a class="dropdown-item" href="#">Brand Team</a></li>
                            <li><a class="dropdown-item" href="#">Careers</a></li>
                            <li><a class="dropdown-item" href="#">Smart Flyers Au</a></li>
                            <li><a class="dropdown-item" href="#">Press</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-custom dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            What we do
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            <li><a class="dropdown-item" href="#">Leisur Travel</a></li>
                            <li><a class="dropdown-item" href="#">Flights & Private Charters</a></li>
                            <li><a class="dropdown-item" href="#">Corporate Travel</a></li>
                            <li><a class="dropdown-item" href="#">Celebrations</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-custom me-2">
                        <a class="nav-link" href="{{route('agents')}}">Agents</a>
                    </li>
                </ul>
                <div class="nav-actions align-items-center d-flex">
                    <div class="mx-2 d-xxl-block d-none">
                        <a href="#">
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <img class="img-fluid" src="{{asset('assets/images/destinations/search-icon.svg')}}" alt="" />
                            </button></a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="user-info me-3">
                            <strong class="d-block ">Rachel Braylovsky</strong>
                            <span class="d-block">rachelbr@smartflyer.com</span>
                        </div>


                        <div class="dropdown dropstart">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('assets/images/profile-img.svg')}}" alt="" />
                            </button>

                            <ul class="dropdown-menu dropdown-menu-lg-start">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-custom">
        <div class="container-fluid px-5 py-4">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{asset('assets/images/destinations/logo.svg')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item nav-item-custom dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="{{route('destination-main')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Destinations
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            @php
                                $destinations = \App\Models\Destination::all();
                            @endphp

                            @foreach($destinations as $destination)
                                <li><a class="dropdown-item destinations-dropdown" href="/destination/{{$destination->title}}">{{$destination->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item nav-item-custom me-2">
                        <a class="nav-link" href="#">Stories</a>
                    </li>
                    <li class="nav-item nav-item-custom dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li><a class="dropdown-item" href="#">Brand Team</a></li>
                            <li><a class="dropdown-item" href="#">Careers</a></li>
                            <li><a class="dropdown-item" href="#">Smart Flyers Au</a></li>
                            <li><a class="dropdown-item" href="#">Press</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-custom dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            What we do
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            <li><a class="dropdown-item" href="#">Leisur Travel</a></li>
                            <li><a class="dropdown-item" href="#">Flights & Private Charters</a></li>
                            <li><a class="dropdown-item" href="#">Corporate Travel</a></li>
                            <li><a class="dropdown-item" href="#">Celebrations</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-custom me-2">
                        <a class="nav-link" href="{{route('agents')}}">Agents</a>
                    </li>
                </ul>
                <div class="nav-actions align-items-center d-flex">
                    <div class="mx-2 d-xxl-block d-none">
                        <a href="#">
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <img class="img-fluid"  src="{{asset('assets/images/destinations/search-icon.svg')}}"  alt="" />
                            </button></a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="user-info me-3">
                            <strong class="d-block ">Rachel Braylovsky</strong>
                            <span class="d-block">rachelbr@smartflyer.com</span>
                        </div>


                        <div class="dropdown dropstart">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img  src="{{asset('assets/images/destinations/profile-img.svg')}}" alt="" />
                            </button>

                            <ul class="dropdown-menu dropdown-menu-lg-start">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
