<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <a href="/admin-dashboard"><img src="assets/img/bluelogo.png" alt height="150px" width="200px"
                style="margin-bottom: 10px; margin-left: 30px;"></a>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="/admin-dashboard">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Vehicle Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.add') }}">Add Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.list') }}">List Category</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.listvehicles') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">List Vehicles </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.approvevehicle') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Approved Vehicles </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.bookedvehicles') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Booked Vehicles List </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Blog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.add') }}">Add Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.list') }}">List Blog</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false"
                aria-controls="ui-basic12">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">FAQ</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic12">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq.add') }}">Add </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq.list') }}">List </a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
