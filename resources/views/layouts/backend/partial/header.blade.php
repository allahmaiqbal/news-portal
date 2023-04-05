<header>
    <nav class="navbar page-navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Aside expand button -->
            <div class="expand-button">
                <button class="btn btn-success p-1" onclick="asideExpand()">
                    <i class="bi bi-list-nested"></i>
                </button>
            </div>
            <!-- End aside expand button -->

            <!-- Responsive button -->
            <button class="navbar-toggler p-1 ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            <!-- End responsive button -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-2 text-end ms-auto mb-lg-0 py-3 py-lg-0">
                    <!-- Help -->
                    {{-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            <span class=" me-3 me-lg-1">Help</span>
                            <i class="bi bi-info-circle"></i>
                        </a>
                    </li>
                    <!-- Search -->
                    <li class="nav-item ">
                        <a class="nav-link" href="#" id="search-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-lg-none me-3">Search</span>
                            <i class="bi bi-search"></i>
                        </a>
                        <div class="dropdown-menu search-dropdown p-2"  aria-labelledby="search-dropdown">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search ....">
                                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-search"></i>
                                    <span>Dapibus ac facilisis in</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-search"></i>
                                    <span>Dapibus ac facilisis in</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-search"></i>
                                    <span>Dapibus ac facilisis in</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <!-- Notification -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="notification-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-lg-none me-3">Notification </span>
                            <i class="bi bi-bell"></i>
                            @if ($emails->count() > 0)
                            <span class="position-absolute top-1  start-60 translate-middle badge rounded-pill bg-danger">{{ count($emails) }} </span>
                            @endif

                        </a>
                        <ul class="dropdown-menu notification-dropdown py-2" aria-labelledby="notification-dropdown">
                            <h5 class="ms-3 mb-1">Notification</h5>
                            <li><a class="dropdown-item " href="{{ route('email-list.page') }}">Email list</a></li>
                            <hr>
                            @foreach ($emails->take(5) as $email )
                                <li><a class="dropdown-item " href="{{ route('email-show.page',$email) }}">{{  $email->name }} ({{ $email->updated_at->diffForHumans() }})</a></li>
                            @endforeach
                            @if ($emails->count() > 5)
                                <hr>
                                <div class="text-center mt-1">
                                    <a href="{{ route('email-list.page') }}">See all</a>
                                </div>
                            @endif

                        </ul>
                    </li>
                    <!-- Settings -->
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#"  id="settings-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-lg-none me-3">Settings</span>
                            <i class="bi bi-gear"></i>
                        </a>

                        <div class="dropdown-menu settings-dropdown"  aria-labelledby="settings-dropdown">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pb-2"><strong>Settings</strong></li>
                                        <li class="list-group-item"><a href="{{ route('contact.page') }}" class="list-group-item-action">Contact</a></li>
                                        <li class="list-group-item"><a href="employee_list.html" class="list-group-item-action">Employees</a></li>
                                        <li class="list-group-item"><a href="about_us.html" class="list-group-item-action">About Us</a></li>
                                        <li class="list-group-item"><a href="services.html" class="list-group-item-action">Services</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pb-2"><strong>Cras justo odio</strong></li>
                                        <li class="list-group-item"><a href="terms.html" class="list-group-item-action">Terms & Conditions</a></li>
                                        <li class="list-group-item"><a href="asked_question.html" class="list-group-item-action">FAQs</a></li>
                                        <li class="list-group-item"><a href="license.html" class="list-group-item-action">License</a></li>
                                        <li class="list-group-item"><a href="copyright.html" class="list-group-item-action">Copyright</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pb-2"><strong>Cras justo odio</strong></li>
                                        <li class="list-group-item"><a href="#" class="list-group-item-action">Cras justo odio</a></li>
                                        <li class="list-group-item"><a href="#" class="list-group-item-action">Cras justo odio</a></li>
                                        <li class="list-group-item"><a href="#" class="list-group-item-action">Cras justo odio</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pb-2"><strong>Cras justo odio</strong></li>
                                        <li class="list-group-item"><a href="#" class="list-group-item-action">Cras justo odio</a></li>
                                        <li class="list-group-item"><a href="#" class="list-group-item-action">Cras justo odio</a></li>
                                        <li class="list-group-item"><a href="#" class="list-group-item-action">Cras justo odio</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-lg-none me-3">Profile</span>
                            <i class="bi bi-person"></i>
                        </a>
                        <ul class="dropdown-menu"  aria-labelledby="user-dropdown">
                            <li>
                                <a class="dropdown-item" href="user_profile.html">
                                    <div class="d-flex align-items-center my-2">
                                        {{-- <img src="{{ module_asset('resources/statics/backend/resources/images/user/user.jpg') }}" class="user-icon" alt=""> --}}
                                        <div class="ms-2">
                                            <h6>Musab Osman</h6>
                                            <div class="text-small">
                                                musabosman3104@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>role based authentication ...(up comming)</li>
                            {{-- <hr>
                                <li class="dropdown-menu m-0" aria-labelledby="navbarDropdown">
                                    @can('users.index')
                                    <li><a class="dropdown-item" href="{{ route('users.index') }}">Users</a></li>
                                    @endcan
                                    @can('roles.index')
                                    <li><a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a></li>
                                    @endcan
                                </li>
                            <li><a class="dropdown-item" href="user_settings.html">Settings</a></li>
                            <li><a class="dropdown-item" href="attendance.html">Attendance</a></li>
                            <li><a class="dropdown-item" href="change_password.html">Change Password</a></li>
                            <hr> --}}
                            <li>
                                <a class="dropdown-item" href="{{ route('admin-logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('admin-logout-form').submit();">
                                    Logout
                                </a>
                                <form id="admin-logout-form" class="d-none" action="{{ route('admin-logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                           {{-- <li><a class="dropdown-item" href="{{ route('admin-logout') }}">Log Out</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
