<div class="header">

    <div class="header-left active">
        <a href="index.html" class="logo">
            <img src="/assets/img/logo/logo.png" alt="">
        </a>
        <a href="index.html" class="logo-small">
            <img src="/assets/img/logo/logo-sm.png" alt="">
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <ul class="nav user-menu">


        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img src="/assets/img/icons/users.svg" alt="">
                    {{-- <img src="{{ asset(Auth::user()->image) ? '/assets/img/icons/users.svg' }}" alt=""> --}}
                    <span class="status online"></span></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        {{-- <span class="user-img">
                            <img src="{{ Auth::user()->image ? asset(Auth::user()->image) : '/assets/img/icons/users.svg' }}" alt="">
                        </span> --}}

                        <div class="profilesets">
                            <h6>{{ Auth::user()->name }}</h6>
                            <h5>Admin</h5>
                        </div>
                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}"> <i class="me-2" data-feather="user"></i>
                        My
                        Profile</a>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="me-2"
                            data-feather="settings"></i>Settings</a>
                    <hr class="m-0">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                            class="dropdown-item has-icon text-danger">
                            <img src="/assets/img/icons/log-out.svg" class="me-2" alt="img">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="generalsettings.html">Settings</a>
            <a class="dropdown-item" href="signin.html">Logout</a>
        </div>
    </div>

</div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><img src="/assets/img/icons/dashboard.svg" alt="img"><span>
                            Dashboard</span> </a>
                </li>
                <li class="{{ Request::routeIs('category*') ? 'active' : '' }}">
                    <a href="{{ route('category.index') }}"><img src="/assets/img/icons/product.svg"
                            alt="img"><span>
                            Category</span> </a>
                </li>

                <li class="{{ Request::routeIs('author*') ? 'active' : '' }}">
                    <a href="{{ route('author.index') }}"><img src="/assets/img/icons/users1.svg" alt="img"><span>
                            Author</span> </a>
                </li>

                <li class="{{ Request::routeIs('rack*') ? 'active' : '' }}">
                    <a href="{{ route('rack.index') }}"><img src="/assets/img/icons/rack.svg" alt="img"><span>
                            Rack</span> </a>
                </li>


                <li class="{{ Request::routeIs('book*') ? 'active' : '' }}">
                    <a href="{{ route('book.index') }}"><img src="/assets/img/icons/book.svg" alt="img"><span>
                            Books</span> </a>
                </li>


                <li class="{{ Request::routeIs('UserBook*') ? 'active' : '' }}">
                    <a href="{{ route('UserBook') }}"><img src="/assets/img/icons/book.svg" alt="img"><span>
                            Books</span> </a>
                </li>


            </ul>
        </div>
    </div>
</div>
