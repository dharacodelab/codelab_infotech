<header>
    <nav class=" navbar navbar-expand-lg py-lg-0 ">
        <a class="navbar-brand" href="#">
            <img src="{{ url('public/images/logo.png') }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
             id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-uppercase">
                    <a class="{{ Request::is('index') ? 'active' : '' }} nav-link" href="{{route('index')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item text-uppercase">
                    <a class="{{ Request::is('about') ? 'active' : '' }} nav-link" href="{{route('about')}}">
                        About
                    </a>
                </li>
                <li class="nav-item text-uppercase">
                    <a class="{{ Request::is('services') ? 'active' : '' }} nav-link" href="{{route('services')}}">
                        Services
                    </a>
                </li>
                <li class="nav-item text-uppercase">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item text-uppercase">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


