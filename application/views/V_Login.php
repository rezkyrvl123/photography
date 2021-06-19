<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="js-validation-signin" action="<?php echo base_url()?>Login/auth" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" id="login-username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="login-password" name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-alt-primary">
                      <i class="si si-login mr-10"></i> Masuk
                  </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <script src="<?php echo base_url();?>assets/js/codebase.core.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/codebase.app.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/pages/op_auth_signin.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/pnotify/dist/pnotify.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/pnotify/dist/pnotify.buttons.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/pnotify/dist/pnotify.nonblock.js"></script>
<?php if($this->session->flashdata('sukses')){?>
      <script>
        new PNotify({
          title: 'Sukses',
          text: '<?php echo $this->session->flashdata('sukses');?>',
          type: 'success',
          nonblock: {
            nonblock: true
          },
          styling: 'bootstrap3'
        });
      </script>
    <?php }?>

    <?php if($this->session->flashdata('gagal')){?>
      <script>
        new PNotify({
          title: 'Gagal',
          text: '<?php echo $this->session->flashdata('gagal');?>',
          type: 'error',
          nonblock: {
            nonblock: true
          },
          styling: 'bootstrap3'
        });
      </script>
    <?php }?>
</body>

</html>
