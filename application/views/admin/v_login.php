<!DOCTYPE html>
<html lang="en">

<head>

   <?php $this->load->view("admin/_templates/head.php") ?>

</head>


<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                  </div>
                  <form class="user" method="post" action="<?php echo base_url('index.php/Login/proses_login') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username..." name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password..." name="password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- Footer -->
      <?php $this->load->view("admin/_templates/footer.php") ?>
      <!-- End of Footer -->
      </div>

    </div>

  </div>

  <!-- End of Page Wrapper -->
  <?php $this->load->view("admin/_templates/scrolltop.php") ?>
  <?php $this->load->view("admin/_templates/modal.php") ?>
  <?php $this->load->view("admin/_templates/js.php") ?>  

</body>

</html>
