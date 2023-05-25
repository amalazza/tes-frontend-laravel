<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand navbar-logo d-flex align-items-center justify-content-center" href="#">
            <span class="text-white text-bold navbar-logo-text">{{ __('messages.nav_logo') }}</span>
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon-close"> <i class="fas fa-times"></i></span>
        </button>


        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item navbar-text ms-lg-5">
                    <a class="nav-link" href="#">{{ __('messages.nav_link1') }}</a>
                </li>
                <li class="nav-item navbar-text ms-lg-5">
                    <a class="nav-link" href="#">{{ __('messages.nav_link2') }}</a>
                </li>
                <li class="nav-item navbar-text ms-lg-5">
                    <a class="nav-link" href="#">{{ __('messages.nav_link3') }}</a>
                </li>
                <li class="nav-item navbar-text ms-lg-5">
                    <a class="nav-link" href="#">{{ __('messages.nav_link4') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>