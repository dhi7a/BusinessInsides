<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        {{-- @if (Auth::user()->hasRole('admin')) --}}
            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-people"></i>
                    <span>Users</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="bi bi-book"></i>
                <span>Business Education</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="bi bi-briefcase"></i>
                <span>Business Consultants</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Measure Perfomance</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="bi bi-bullseye"></i>
                <span>Business Objectives</span>
                </a>
            </li><!-- End Login Page Nav -->

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="bi bi-truck"></i>
                <span>Consigners</span>
                </a>
            </li><!-- End Error 404 Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="bi bi-truck"></i>
                <span>Courier</span>
                </a>
            </li><!-- End Error 404 Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="bi bi-person"></i>
                <span>Users</span>
                </a>
            </li><!-- End Error 404 Page Nav --> --}}

        {{-- @elseif (Auth::user()->hasRole('courier'))
            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('courier-shipments') }}">
                    <i class="bi bi-truck"></i>
                    <span>Shipments</span>
                </a>
            </li>
        @elseif (Auth::user()->hasRole('consigner'))
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('consigner-dashboard') }}">
                    <i class="bi bi-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('consigner-transit') }}">
                    <i class="bi bi-truck"></i>
                    <span>Transit</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('consigner-warehouse') }}">
                    <i class="bi bi-flag"></i>
                    <span>Warehouse</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('consigner-delivered') }}">
                    <i class="bi bi-pin-map-fill"></i>
                    <span>Delivered</span>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user-shopping') }}">
                    <i class="bi bi-house"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user-orders') }}">
                    <i class="bi bi-list-check"></i>
                    <span>Orders</span>
                </a>
            </li>
        @endif --}}

        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            <a class="nav-link collapsed" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="bi bi-lock"></i>
            <span>Logout</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

  </aside>
