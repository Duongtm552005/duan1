<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= BASE_URL_ADMIN ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Trang chủ
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= BASE_URL_ADMIN .'?act=danh-muc' ?>" class="nav-link">
            <i class="nav-icon fa-solid fa-list"></i>
              <p>
                Danh mục sản phẩm
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= BASE_URL_ADMIN .'?act=san-pham' ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Sản phẩm
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= BASE_URL_ADMIN .'?act=don-hang' ?>" class="nav-link">
              <i class="nav-icon fa-solid fa-file-invoice"></i>
              <p>
                Đơn Hàng
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class = "nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Quản lý tài khoản</p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class ="nav nav-treeview">
              <li class = "nav-item">
                <a href="<?= BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri' ?>" class="nav-link">
                  <i class="nav-icon far fa-user"></i>
                  <p>Tài khoản quản trị</p>
                </a>
              </li>
              
              <li class = "nav-item">
                <a href="<?= BASE_URL_ADMIN . '?act=list-tai-khoan-khach-hang' ?>" class="nav-link">
                  <i class="nav-icon far fa-user"></i>
                  <p>Tài khoản khách hàng </p>
                </a>
              </li>
  
              <li class = "nav-item">
                <a href="<?= BASE_URL_ADMIN . '?act=form-sua-thong-tin-ca-nhan-quan-tri' ?>" class="nav-link">
                  <i class="nav-icon far fa-user"></i>
                  <p>Tài khoản cá nhân</p>
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