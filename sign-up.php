<?php include 'comp/header.php' ?>

<body>
  <div class="page-loader"></div>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg transparent center-nav navbar-dark navbar-bg-dark">
      <?php include 'comp/nav.php' ?>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->

    </header>
    <!-- /header -->
    <section class="wrapper bg-dark text-white">
      <div class="container pt-18 pt-md-11 pb-21 pb-md-21 text-center">
        <div class="row" data-cues="fadeIn">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-8 col-xxl-5 mx-auto">
            <h1 class="display-1 text-white mb-3">Sign Up</h1>
            <p class="lead px-xl-10 px-xxl-10">We are committed to providing you with the best experience possible.<br />Start Booking!</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col mt-n19 mb-16">
            <div class="card shadow-lg">
              <div class="row gx-0">
                <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="assets/img/truck-transport.jpg" data-cues="fadeIn">
                </div>
                <!--/column -->
                <div class="col-lg-6">
                  <div class="p-10 p-md-11 p-lg-13" data-cues="fadeIn">
                    <h2 class="mb-3 text-start">You're welcome</h2>
                    <p class="lead mb-6 text-start">Fill your email and password to sign in</p>
                    <form class="text-start mb-3">
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Name" id="loginName">
                        <label for="loginName">Name</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                        <label for="loginEmail">Email</label>
                      </div>
                      <div class="form-floating mb-4">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Sign up as</option>
                          <option value="1">Transporter</option>
                          <option value="2">Client</option>
                        </select>
                      </div>
                      <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPassword">Password</label>
                      </div>
                      <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPasswordConfirm">Confirm Password</label>
                      </div>
                      <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</a>
                    </form>
                    <!-- /form -->
                    <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                    <p class="mb-0">Already have an account? Login as <a href="transporters.php" class="hover">Transporter</a> or <a href="clients.php" class="hover">Client</a></p>
                    </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'comp/footer.php' ?>
</body>

</html>