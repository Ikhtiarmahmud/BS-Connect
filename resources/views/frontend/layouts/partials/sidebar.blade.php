  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-info-circle"></i>
      </div>
      <div class="sidebar-brand-text mx-3">BS-CONTACT<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="{{ url('/')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    {{-- @php
        $user = DB::table('role_user')->where('user_id',Auth::user()->id)->where('role_id',1)->count();
    @endphp
    @if ($user !== 0) --}}
    <li class="nav-item">
      <a class="nav-link" href="{{ route('contact.index')}}">
        <i class="fas fa-fw fa-align-center"></i>
        <span>Contact</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.create')}}">
          <i class="fas fa-fw fa-align-center"></i>
          <span>New User</span></a>
      </li>
    {{-- @endif --}}




    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->