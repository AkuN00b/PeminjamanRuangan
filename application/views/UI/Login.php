<?php ob_start();?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <b class="h2">PeminjamanRuangan</b>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login sebagai Admin</p>

      <form action="<?php echo site_url('LoginUser/aksi_login') ?>" method="post" autocomplete="off">
                <div class="form-group">
                  <label><strong>Email</strong></label>
                  <input type="email" class="form-control" value="" name="email">
                </div>
                
                <div class="form-group">
                    <label><strong>Password</strong></label>
                    <input type="password" class="form-control" value="" name="password">
                  </div>
                  <div class="form-row d-flex justify-content-between mt-4 mb-2">
                    <div class="form-group">
                      <div class="form-check ml-2">
                         <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                          <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                  </div>
                  </div>

                  <div class="form-group">
                    <a href="page-forgot-password.html">Forgot Password?</a>
                  </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                  </div>
                  </form>
                  <div class="new-account mt-3">
                     <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                      <li><a href="<?php echo site_url('loginPelanggan') ?>">Login Pelanggan</a></li>
                  </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?php
$data = ob_get_clean();
?>

<?php ob_start();?>

<?php
$script = ob_get_clean();
include('master_login.php');
ob_flush();
?>