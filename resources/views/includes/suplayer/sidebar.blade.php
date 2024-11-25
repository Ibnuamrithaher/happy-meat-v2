<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Happy Meat Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  {{ Request::is('suplayer') ? 'active' : null }}">
        <a class="nav-link" href="{{ route('dashboard.suplayer') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Request::is('suplayer/meat-package') ? 'active' : null }}">
        <a class="nav-link" href="{{ route('suplayer.meat-package.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>List Produk</span></a>
    </li>
    <li class="nav-item {{ Request::is('suplayer/list-order') ? 'active' : null }}">
        <a class="nav-link" href="{{ route('suplayer.list-order') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>List Orders</span></a>
    </li>

    <li class="nav-item {{ Request::is('suplayer/withdraw') ? 'active' : null }}">
        <a class="nav-link" href="{{ route('withdraw.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Withdraw</span></a>
    </li>
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
