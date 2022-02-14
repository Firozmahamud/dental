@auth


     <div id="layoutSidenav_nav">

        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <a class="nav-link" href="{{ route('home') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="{{ route('contact.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Add Contact details
                    </a>
                    <a class="nav-link" href="{{ route('contactus.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Contact us
                    </a>
                    <a class="nav-link" href="{{ route('aboutus.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        About us
                    </a>

                    <a class="nav-link" href="{{ route('banner.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Banner
                    </a>
                    <a class="nav-link" href="{{ route('welcome.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        welcome page
                    </a>
                    <a class="nav-link" href="{{ route('welcomehaedings.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        welcome heading
                    </a>
                    <a class="nav-link" href="{{ route('welcomecontent.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        welcome content
                    </a>
                    <a class="nav-link" href="{{ route('doctor.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Doctors
                    </a>
                    <a class="nav-link" href="{{ route('service.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Our services
                    </a>
                    <a class="nav-link" href="{{ route('social.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Social links
                    </a>



                </div>
            </div>

        </nav>
    </div>


@endauth
