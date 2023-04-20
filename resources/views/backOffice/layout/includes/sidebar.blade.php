<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" >
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Managers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" >
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Events</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" >
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Formations</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" >
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Inbox</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" >
                <i class="menu-icon fas fa-mail-bulk"></i>
                <span class="menu-title">Newsletter</span>
            </a>
        </li>
        <li class="nav-item">

            <a class="nav-link" onclick="document.getElementById('logoutForm').submit()" href="#">
                <i class="fas fa-sign-out-alt menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
            <form id="logoutForm" method="GET" action="">
                @csrf
            </form>
        </li>
    </ul>
</nav>
