<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <img src="{{ asset('be/assets/images/logo-lg.png') }}" alt="" class="logo-large">
            </a>
        </div>
    </div>

    <div class="sidebar-inner niceScrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span> Dashboard <span class="badge badge-pill badge-primary float-right">7</span></span>
                    </a>
                </li>

                <li class="menu-title">Components</li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Role
                        </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.roles.index') }}">All Role</a></li>
                        <li><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span>
                            User</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.users.index') }}">All Users</a></li>
                        <li><a href="{{ route('admin.users.create') }}">Create New User</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>
                            Categories </span> <span class="badge badge-pill badge-info float-right">8</span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.categories.index') }}">All Categories</a></li>
                        <li><a href="{{ route('admin.categories.create') }}">Create New Category</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gauge"></i><span> Products
                        </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.products.index') }}">All Products</a></li>
                        <li><a href="{{ route('admin.products.create') }}">Add New Product</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cards-outline"></i> <span>
                            Product Attributes </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#">All Attributes</a></li>
                        <li><a href="#">Add New Attribute</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cards-outline"></i> <span>
                            Order </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#">Order List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
