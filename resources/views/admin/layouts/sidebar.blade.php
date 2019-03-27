<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{url('/public/images/logo.png')}}" alt="Laravel Shop"/>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{ route('admin.dashboard.home') }}">
                        <i class="fas fa-bar-chart-o"></i>Dashboard
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container">
