<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
            <!-- <img src="{{ asset('agency') }}/img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/')?'active':'' }}">{{
                    trans('menu.home') }}</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link {{ (request()->is('about'))?'active':'' }}">{{
                    trans('menu.about') }}</a>
                <a href="{{ url('/service') }}"
                    class="nav-item nav-link {{ (request()->is('service'))?'active':'' }}">{{ trans('menu.services')
                    }}</a>
                <a href="{{ url('/package') }}"
                    class="nav-item nav-link {{ (request()->is('package'))?'active':'' }}">{{ trans('menu.packages')
                    }}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/destination') }}" class="dropdown-item">Destination</a>
                        <a href="{{ url('/booking') }}" class="dropdown-item">Booking</a>
                        <a href="{{ url('/guide') }}" class="dropdown-item">Travel Guides</a>
                        <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>

                    </div>
                </div>
                <a href="{{ url('/contact') }}"
                    class="nav-item nav-link {{ (request()->is('contact'))?'active':'' }}">{{ trans('menu.contact')
                    }}</a>
            </div>
            <?php  
            $flag = app()->getlocale();
                    if($flag=="en"){
                        $flag="us";
                    }
                ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle               
                " data-bs-toggle="dropdown"><i
                        class="flag-icon flag-icon-{{ $flag=='kh'?'kh':'' }}{{ $flag=='us'?'us':'' }} mr-2"></i> {{
                    $flag=='kh'?'ភាសាខ្មែរ':'' }}{{
                    $flag=='us'?"English":'' }}</a>
                <div class="dropdown-menu m-0">
                    <a href="{{url('lang/kh')}}" class="dropdown-item {{ $flag=='kh'?'active':'' }}                    
                        "><i class="flag-icon flag-icon-kh mr-2"></i> ភាសាខ្មែរ</a>
                    <a href="{{url('lang/en')}}" class="dropdown-item {{ $flag=='us'?'active':'' }}"><i
                            class="flag-icon flag-icon-us mr-2"></i> English</a>
                </div>
            </div>
            <a href="{{ url('register') }}" class="btn btn-primary rounded-pill py-2 px-4">Register</a>


        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                @yield('banner_page')
            </div>
        </div>
    </div>
</div>