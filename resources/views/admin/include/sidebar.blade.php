<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">

                <div class="text-wrapper">
                    <p class="profile-name">
</p>

                </div>
            </a>
        </li>
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



    </ul>
</nav>
