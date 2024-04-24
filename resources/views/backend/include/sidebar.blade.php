<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <a href="#"><img src="assets/img/bluelogo.png" alt height="150px" width="200px"
                style="margin-bottom: 10px; margin-left: 30px;"></a>
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    @if (!empty(Auth::user()->thumbnail))
                        <img class="img-xs rounded-circle"
                            src="{{ asset('userinformation/' . Auth::user()->thumbnail) }}" alt="Profile image">
                    @else
                        <img class="img-xs rounded-circle" src="{{ asset('logo.jpg') }}" alt="Profile image">
                    @endif
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{ Auth::user()->name }}</< /p>

                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->status == 1)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-1" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Vehicle Basic Information</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic-1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vehicle.add') }}">Add </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vehicle.list') }}">List </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-2" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Vehicle Image</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic-2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vehicle.imageadd') }}">Add </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vehicleimages.list') }}">List </a>
                        </li>
                    </ul>
                </div>
            </li>
        @elseif(Auth::user()->status == 0)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-3" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Booked Vehicles</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic-3">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vehicle.bookedpending') }}">Pending Booked </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vehicle.bookedapproval') }}">Pending Approval </a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="/orderhistory">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Order History</span>
                </a>
            </li>
        @endif

    </ul>
</nav>
