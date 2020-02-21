<?php
 
  if (isset($_SESSION['name'])){
    header('location:Admin');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FabArtist</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/node_modules/mdi/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/node_modules/simple-line-icons/css/simple-line-icons.css'); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('/assets/images/favicon.png') ?>" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <?php if ($this->session->flashdata('msg')) { ?>
           <div id="mydiv" class="alert alert-danger"><?= $this->session->flashdata('category_success') ?>
         Please enter valid Email or password.
         </div>
         <?php } ?>
          <?php if ($this->session->flashdata('block')) { ?>
           <div id="mydiv" class="alert alert-danger"><?= $this->session->flashdata('category_success') ?>
         You action has been block. Contact to admin.
         </div>
         <?php } ?>
            <div class="auth-form-dark text-left p-5">
              <h2>FabArtist</h2>
              <h4 class="font-weight-light">Hello! let's get started</h4>
              
              <form  action="<?php echo base_url('Admin/login') ?>" method="POST"  data-parsley-validate>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required="">
                    <i class="mdi mdi-account"></i>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
                    <i class="mdi mdi-lock"></i>
                  </div>
                  <div class="mt-5">
                   <input class="btn btn-block btn-warning btn-lg font-weight-medium" type="submit" name="Sign in">
                  </div>
<!--                   <div class="mt-3 text-center">
                    <a href="#" class="auth-link text-white">Forgot password?</a>
                  </div> -->
                </form>                  
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
  <script src="<?php echo base_url('/assets/node_modules/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/node_modules/popper.js/dist/umd/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url('/assets/js/off-canvas.js'); ?>"></script>
  <script src=".<?php echo base_url('/assets/js/misc.js'); ?>"></script>
  <!-- endinject -->
<script type="text/javascript">
setTimeout(function() {
   $('#mydiv').fadeOut('fast');
}, 5000); // <-- time in milliseconds
</script>
</body>
</html>