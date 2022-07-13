<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>

<?php include_once "header.php";?>

    <body>


        <div class="account-pages my-5 pt-sm-5">
        <section class="form login">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center mb-4">
                            <a href="index.html" class="auth-logo mb-5 d-block">
                                <img src="assets/images/logo-dark.png" alt="" height="30" class="logo logo-dark">
                                <img src="assets/images/logo-light.png" alt="" height="30" class="logo logo-light">
                            </a>

                            <h4>Sign in</h4>
                            <p class="text-muted mb-4">Sign in to continue to Chatvia.</p>
                            
                        </div>

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    <div class="error-text"></div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <div class="input-group mb-3 bg-soft-light rounded-3">
                                                <span class="input-group-text text-muted" id="basic-addon3">
                                                    <i class="ri-user-2-line"></i>
                                                </span>
                                                <input name="email" type="email" class="form-control form-control-lg border-light bg-soft-light" placeholder="Enter Email Address" aria-label="Enter Email" aria-describedby="basic-addon3">
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="float-end">
                                                <a href="auth-recoverpw.html" class="text-muted font-size-13">Forgot password?</a>
                                            </div>
                                            <div class="mb-4">
                                            <!-- <div class="field input"> -->
                                            <label class="form-label">Password</label>
                                            <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input class="form-control" id="pass" type="password"  name="password" placeholder="Password" value="">
                                            <span class="input-group-text"id="icon-click"><i class="fas fa-eye" id="icon"></i></span>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input type="checkbox" class="form-check-input" id="remember-check">
                                            <label class="form-check-label" for="remember-check">Remember me</label>
                                        </div>

                                        <div class="field button">
                                        <div class="d-grid">
                                            <input name="submit" type="submit" class="btn btn-primary waves-effect waves-light" value="Login to Chat"></button>
                                        </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Don't have an account ? <a href="auth-register.php" class="fw-medium text-primary"> Signup now </a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Chatvia. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
        <!-- end account-pages -->


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="javascript/login.js"></script>
        <script src="javascript/pass-show.js"></script>


    </body>

<!-- Mirrored from themesbrand.com/chatvia/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 12:38:05 GMT -->
</html>
