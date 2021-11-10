<!--====== Start Header ======-->
<header class="template-header navbar-left absolute-header nav-primary-5 submenu-primary-5 sticky-header">
    <div class="container-fluid fluid-gap-70">
        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="{{url('/')}}">
                        <h1>🎓</h1>
                    </a>
                </div>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li>
                            <a href="#">|</a>
                        </li>
                        <li class="active">
                            <a href="{{url('/')}}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{url('fitur')}}">Fitur Aplikasi</a>
                        </li>
                        <li>
                            <a href="{{url('team')}}">Team Member</a>
                        </li>
                        <li>
                            <a href="{{url('tentang')}}">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="{{url('kontak')}}">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        <a href="{{url('/login')}}" class="user-login">
                            <i class="far fa-user-circle"></i> Masuk
                        </a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="{{url('/register')}}" class="template-btn primary-bg-5">
                            Daftar Sekarang <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                    <li class="d-none d-xl-block">
                        <a href="#" class="off-canvas-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <div class="mobile-logo">
                <a href="{{url('/')}}">
                    <h1>🎓</h1>
                </a>
            </div>
            <nav class="mobile-menu">
                <ul>
                    <li class="active">
                        <a href="{{('/')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{('/fitur')}}">Fitur Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/team')}}">Team Member</a>
                    </li>
                    <li>
                        <a href="{{('/tentang')}}">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{('/kontak')}}">Kontak</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->

    <!-- Off Canvas -->
    <div class="off-canvas-wrapper">
        <div class="canvas-overlay"></div>
        <div class="canvas-inner">
            <div class="canvas-logo">
                <h1>🎓</h1>
            </div>
            <div class="about-us">
                <h5 class="canvas-widget-title">About Us</h5>
                <p>
                    Sed perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem
                    aperams eaque ipsa quae abillo inventore veritatis
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Contact Us</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        354 Oakridge, Camden NJ 08102 - USA
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:support@landio.com">support@landio.com</a>
                        <a href="www.landio.net" target="_blank">www.landio.net</a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+01234567899">+012 (345) 678 99</a></span>
                        <span><a href="tel:+8563214">+8563214</a></span>
                    </li>
                </ul>
            </div>
            <a href="#" class="canvas-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
</header>
<!--====== End Header ======-->