<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Rewind The Trend</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Rewind Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Devices
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('posts.create') }}" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                Add New Device
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('posts.index') }}" class="nav-link">
              <i class="nav-icon fa fa-eye"></i>
              <p>
                View All
              </p>
            </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Sports News
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('sports.create') }}" class="nav-link">
              <i class="nav-icon fa fa-plus"></i>
              <p>
                Add News
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('sports.index') }}" class="nav-link">
              <i class="nav-icon fa fa-futbol"></i>
              <p>
                View All
              </p>
            </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview" id="crypto_tab">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Crpto News
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('crypto.create') }}" class="nav-link">
              <i class="nav-icon fa fa-plus"></i>
              <p>
                Add News
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('crypto.index') }}" class="nav-link">
              <i class="nav-icon fa fa-futbol"></i>
              <p>
                View All
              </p>
            </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
