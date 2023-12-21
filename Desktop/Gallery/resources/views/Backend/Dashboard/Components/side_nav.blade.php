<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('Backend') }}/assets/images/sm-logo.png" alt="" class="img-fluid p-3" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('Backend') }}/assets/images/lg-logo.png" alt="" class="img-fluid p-3" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                {{-- <img src="{{ asset('Backend') }}/assets/images/logo-sm.png" alt="" height="22" /> --}}
            </span>
            <span class="logo-lg">
                {{-- <img src="{{ asset('Backend') }}/assets/images/logo-light.png" alt="" height="17" /> --}}
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <i data-feather="home" class="icon-dual"></i>
                        <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>
            </ul>


            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#ImageLayout" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="ImageLayout">
                        <i data-feather="image" class="icon-dual"></i>
                        <span data-key="t-dashboards">Menu</span>
                    </a>
                    <div class="collapse menu-dropdown" id="ImageLayout">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-analytics">
                                    Dropdown Menu
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
