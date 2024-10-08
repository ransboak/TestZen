<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list dropdown d-none d-lg-inline-block ml-2">
            <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{asset('backend/assets/images/flags/us.jpg')}}" alt="lang-image" height="12">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{asset('backend/assets/images/flags/germany.jpg')}}" alt="lang-image" class="mr-1" height="12"> <span
                        class="align-middle">German</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{asset('backend/assets/images/flags/italy.jpg')}}" alt="lang-image" class="mr-1" height="12"> <span
                        class="align-middle">Italian</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{asset('backend/assets/images/flags/spain.jpg')}}" alt="lang-image" class="mr-1" height="12"> <span
                        class="align-middle">Spanish</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{asset('backend/assets/images/flags/russia.jpg')}}" alt="lang-image" class="mr-1" height="12"> <span
                        class="align-middle">Russian</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="mdi mdi-bell-outline noti-icon"></i>
                <span class="noti-icon-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="font-16 text-white m-0">
                        <span class="float-right">
                            <a href="" class="text-white">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>

                <div class="slimscroll noti-scroll">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-success">
                            <i class="mdi mdi-settings-outline"></i>
                        </div>
                        <p class="notify-details">New settings
                            <small class="text-muted">There are new settings available</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-bell-outline"></i>
                        </div>
                        <p class="notify-details">Updates
                            <small class="text-muted">There are 2 new updates available</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-danger">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <p class="notify-details">New user
                            <small class="text-muted">You have 10 unread messages</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">4 days ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-secondary">
                            <i class="mdi mdi-heart"></i>
                        </div>
                        <p class="notify-details">Carlos Crouch liked
                            <b>Admin</b>
                            <small class="text-muted">13 days ago</small>
                        </p>
                    </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                    View all
                    <i class="fi-arrow-right"></i>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="mdi mdi-email-outline noti-icon"></i>
                <span class="noti-icon-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="font-16 text-white m-0">
                        <span class="float-right">
                            <a href="" class="text-white">
                                <small>Clear All</small>
                            </a>
                        </span>Messages
                    </h5>
                </div>

                <div class="slimscroll noti-scroll">

                    <div class="inbox-widget">
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Chadengle</p>
                                <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('backend/assets/images/users/avatar-2.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text text-truncate">I've finished it! See you so...</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('backend/assets/images/users/avatar-3.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text text-truncate">This theme is awesome!</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('backend/assets/images/users/avatar-4.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Kurafire</p>
                                <p class="inbox-item-text text-truncate">Nice to meet you</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('backend/assets/images/users/avatar-5.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Shahedk</p>
                                <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>

                            </div>
                        </a>
                    </div> <!-- end inbox-widget -->

                </div>
                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                    View all
                    <i class="fi-arrow-right"></i>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Alex M.</span>
                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow text-white m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="{{route('profile.edit')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-outline"></i>
                    <span>Profile</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-settings-outline"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-outline"></i>
                    <span>Lock Screen</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout-variant"></i>
                        <span>Logout</span>
                    </x-dropdown-link>
                </form>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="mdi mdi-settings-outline noti-icon"></i>
            </a>
        </li>

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center logo-dark">
            <span class="logo-lg mt-2">
                <img src="{{asset('TZ-lg.png')}}" alt="" height="70">
                <!-- <span class="logo-lg-text-dark">Uplon</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-lg-text-dark">U</span> -->
                <img src="{{asset('TZ-sm.png')}}" alt="" height="50">
            </span>
        </a>

        <a href="index.html" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="{{asset('TZ-lg.png')}}" alt="" height="22">
                <!-- <span class="logo-lg-text-dark">Uplon</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-lg-text-dark">U</span> -->
                <img src="{{asset('TZ-sm.png')}}" alt="" height="24">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>

        <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>

        <li class="dropdown dropdown-mega d-none d-lg-block">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                Mega Menu
                <i class="mdi mdi-chevron-down"></i>
            </a>
            <div class="dropdown-menu dropdown-megamenu p-0">
                <div class="row">
                    <div class="col-sm-5">

                        <div class="p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="font-16 mt-0"><i class="mdi mdi-toolbox-outline mr-1"></i> UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Widgets</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Sliders</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Ratings</a>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0);">Treeview Page</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tour Page</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <h5 class="font-16 mt-0"><i class="mdi mdi-flip-horizontal mr-1"></i> Layouts</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Dark Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Small Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sidebar Collapsed</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Unsticky Layout</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Boxed Layout</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Topbar Light</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="p-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <div>
                                                    <i class="fab fa-bootstrap text-purple h2 mb-0"></i>
                                                </div>
                                                <h5 class="font-16">Bootstrap</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center mt-4 mt-md-0">
                                                <div>
                                                    <i class="fab fa-npm text-danger h2 mb-0"></i>
                                                </div>
                                                <h5 class="font-16">Npm</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center mt-4 mt-md-0">
                                                <div>
                                                    <i class="fab fa-sass text-pink h2 mb-0"></i>
                                                </div>
                                                <h5 class="font-16">Sass support</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text-center mt-4">
                                                <div>
                                                    <i class="fas fa-tablet-alt text-dark h2 mb-0"></i>
                                                </div>
                                                <h5 class="font-16">Responsive</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center mt-4">
                                                <div>
                                                    <i class="fab fa-gulp text-primary h2 mb-0"></i>
                                                </div>
                                                <h5 class="font-16">Gulp Support</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center mt-4">
                                                <div>
                                                    <i class="far fa-file-code text-warning h2 mb-0"></i>
                                                </div>
                                                <h5 class="font-16">Free Landing</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="text-center">
                                    <div class="p-4">
                                        <h4 class="mt-0">Special Discount Sale!</h4>
                                        <h5 class="mt-4">Save up to <span class="text-primary">60%</span> off.</h5>
                                        <p class="text-muted">Get free updates lifetime</p>
                                        <a href="https://1.envato.market/XY7j5" target="_blank" class="btn btn-primary btn-rounded">Download Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </li>
    </ul>
</div>
