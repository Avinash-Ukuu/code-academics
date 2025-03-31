<header class="theme-main-menu py-lg-4">
    <div class="main-header-area">
        <div class="container custom-container-nav">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xxl-3 col-xl-2 col-lg-2 col-6 text-start">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{ asset('assets/frontend/images/logoca.svg') }}"
                                alt="Header-logo"></a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 d-none d-lg-block">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mb-2 mb-lg-0 ps-1">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('home') }}"
                                            id="navbarDropdownOne" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Home
                                        </a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarDropdownTwo" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Pages
                                        </a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="projectDetail"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Project
                                        </a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarDropdownThree" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Blog
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-6 text-end">
                    <ul class="right-nav mb-0 d-flex align-items-center justify-content-end">
                        <li>
                            <div class="d-none d-xxl-inline-block right-language pr-40">
                                <div class="dropdown">
                                    <a class="language-btn dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        English
                                        <!-- <i class="fal fa-chevron-down"></i> -->
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li class="search-area">
                            <a class="search_input" href="#" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                <i class="bi bi-search"></i>
                            </a>
                        </li>
                        <li>
                            <div class="hamburger-menu">
                                <a class="round-menu" href="javascript:void(0);">
                                    <i class="bi bi-list"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.theme-main-menu -->
</header>
