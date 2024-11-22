<!-- herder -->
<?php include './views/layout/header.php'; ?>
<!-- end herder -->
<!-- Navbar -->
<?php include './views/layout/navbar.php'; ?>

<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include './views/layout/sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lí tài khoản Khách hàng </h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
  <div class="container">
	<div class="row">
      <!-- left column -->
      
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?= BASE_URL . $thongTin["anh_dai_dien"]; ?>" style = "width: 150px"  class="avatar img-circle" alt="avatar" onerror="this.onerror=null; this.src='https://i0.wp.com/www.stignatius.co.uk/wp-content/uploads/2020/10/default-user-icon.jpg?w=415&ssl=1'">
          <h6 class = "mt-2">Họ tên: <?= $thongTin['ho_ten'] ?></h6>
          <h6 class = "mt-2">Chức vụ: <?= $thongTin['chuc_vu_id'] ?></h6>
          
        </div>
      </div>
      
      
      <div class="col-md-9 personal-info">
      <form action="<?= BASE_URL_ADMIN . '?act=sua-thong-tin-ca-nhan-quan-tri'  ?> " method = "POST">
      <!-- edit form column -->
        <hr>
        <h3>Thông tin cá nhân</h3>
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Họ tên:</label>
            <div class="col-lg-12">
              <input class="form-control" type="text" value="" name = "">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-12">
              <input class="form-control" type="text" value="Bishop">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-12">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-12">
              <input class="form-control" type="text" value="janesemail@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-12">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-012:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>  
                  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary" value="Save Changes">
            </div>
        </div> 
        </form>
          <hr>
          
          <h3>Đổi mật khẩu</h3>
          <?php if(isset($_SESSION['success'])){ ?>
    <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        <?= $_SESSION['success']; ?>
    </div>
    <?php } ?>
      
          <form action="<?= BASE_URL_ADMIN . '?act=sua-mat-khau-ca-nhan-quan-tri' ?>" method = "POST">
          <div class="form-group">
            <label class="col-md-3 control-label">Mật khẩu cũ:</label>
            <div class="col-md-12">
              <input class="form-control" type="text" name = "old_pass"value="">
              <?php if(isset($_SESSION['error']['old_pass'])){?>
                       <p class="text-danger"><?= $_SESSION['error']['old_pass'] ?></p>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Mật khẩu mới:</label>
            <div class="col-md-12">
              <input class="form-control" type="text" name = "new_pass" value="">
              <?php if(isset($_SESSION['error']['new_pass'])){?>
                       <p class="text-danger"><?= $_SESSION['error']['new_pass'] ?></p>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Nhập lại mật khẩu mới :</label>
            <div class="col-md-12">
              <input class="form-control" type="text" name ="confirm_pass" value=""> 
              <?php if(isset($_SESSION['error']['confirm_pass'])){?>
                       <p class="text-danger"><?= $_SESSION['error']['confirm_pass'] ?></p>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary" value="Save Changes">
            </div>
          </div>
          </form>

      </div>
  </div>
</div>
<hr>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- footer -->
<?php include './views/layout/footer.php';   ?>
<!-- end footer -->
<!-- Page specific script -->

<!-- Code injected by live-server -->

</body>

</html>