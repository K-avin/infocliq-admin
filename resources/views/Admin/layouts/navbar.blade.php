<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="#"><img src="{{asset('assets/img/logo.png')}}" class="mr-3" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="{{asset('assets/img/logo.png')}}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                <i class="icon-search"></i>
              </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
            </li>
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="info-button">
                    <a class="nav-link active" aria-current="page">
                        <p><span class="material-icons-outlined office-in">directions_walk</span> 9:15 AM</p>
                    </a>
                </div>
            </li>
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="info-button">
                    <a class="nav-link active" aria-current="page">
                        <p><span class="material-icons-outlined office-out">directions_walk</span> 6:30 PM</p>
                    </a>
                </div>
            </li>
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="info-button">
                    <a class="nav-link active" aria-current="page">
                        <p><span class="material-icons-outlined active-time">schedule</span> 01:54:02</p>
                    </a>
                </div>
            </li>
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="info-button">
                    <a class="nav-link active" aria-current="page">
                        <p><span class="material-icons-outlined recent-activity">tips_and_updates</span> Task started
                        </p>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{asset('admin/images/faces/face28.jpg')}}" alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i> Settings
                    </a>
                    <a class="dropdown-item">
                        <i class="ti-power-off text-primary"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
</nav>