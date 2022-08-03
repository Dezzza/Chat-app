<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>


<?php include_once "header.php";?>

    <body class=" bg-soft-primary" >
        <div class="account-pages" id="loader" >
        </div>
            <div class="container">
                <div class="row justify-content-center p-4">
                    <div class="col-md-8 col-lg-6 col-xl-6">
<<<<<<< HEAD
                        <div class="card">
                            <div class="card-body col-12 p-4">
                                    <form action="#" id="formdatas" method="POST" enctype="multipart/form-data">
                                    <div class="text-center">
                                        <h3 style="color: purple;"><b>REGISTER NOW</b></h3>                
                                    </div>
=======
                        <div class="text-center pt-4">
                            <h3 style="color: purple;"><b>REGISTER NOW</b></h3>                
                        </div>
                        <div class="card">
                            <div class="card-body col-12 p-4">
                                    <form action="#" id="formdatas" method="POST" enctype="multipart/form-data">
>>>>>>> 2f0c52dd718ada22dc31c1125f6fdf78a3d19824
                                    <div class="msg">
                                        
                                        </div>
                                        <div class="name-details">
                                        <div class="mb-3">
                                            <div class="input-group bg-soft-light rounded-3  mb-3">
                                                <span class="input-group-text text-muted" id="basic-addon5">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <div class="field input col-10">
                                                <input type="text" name="fname" class="form-control form-control-lg bg-soft-light border-light" placeholder="Enter Firstname" aria-label="Enter Email" aria-describedby="basic-addon5"> 
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="input-group bg-soft-light rounded-3  mb-3">
                                                <span class="input-group-text text-muted" id="basic-addon5">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <div class="field input col-10">
                                                <input type="text" name="lname" class="form-control form-control-lg bg-soft-light border-light" placeholder="Enter Lastname" aria-label="Enter Lastname" aria-describedby="basic-addon5"> 
                                                </div>   
                                            </div>
                                        </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="input-group bg-soft-light mb-3 rounded-3">
                                                <span class="input-group-text border-light text-muted" id="basic-addon6">
                                                    <i class="fa fa-envelope-open"></i>
                                                </span>
                                                <div class="field input col-10">
                                                <input type="email" name="email" class="form-control form-control-lg bg-soft-light border-light" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="basic-addon6">
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group bg-soft-light mb-3 rounded-3">
                                                <span class="input-group-text border-light text-muted" id="basic-addon7">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                                <div class="field input col-10">
                                                <input type="phone" name="phone" class="form-control form-control-lg bg-soft-light border-light" placeholder="Enter Phone" aria-label="Enter Phone" aria-describedby="basic-addon6">
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input class="form-control" id="pass" type="password"  name="password" placeholder="Password" value="">
                                            <span class="input-group-text"id="icon-click"><i class="fas fa-eye" id="icon"></i></span>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input class="form-control" id="passw" type="password" name="cpassword" placeholder="Confirm Password" value="">
                                            <span class="input-group-text" id="icon-clicks"><i class="fas fa-eye" id="icons"></i></span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4">
                                                <select name="day" id="" class="form-control ">
                                                    <option value="" selected disabled>Day</option>
                    
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select name="month" id="" class="form-control ">
                                                    <option value="" selected disabled>Month</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select name="year" id="" class="form-control ">
                                                    <option value="" selected disabled>Year</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="split row">
                                            <div class="col-lg-6 ">
                                                <div class="left">
                                                    <select name="gender" id="" class="form-control mb-2" id="gender">
                                                        <option value="" selected disabled>Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="right">
                                                    <select name="country" class="form-control mb-2" id="country">
                                                        <option value="" disabled selected>Select Country</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <div class="input-group bg-soft-light mb-3 rounded-3">  
                                                <div class="col-12">
                                            <input type="file" name="image" class="form-control mb-2">
                                        </div>                                              
                                            </div>
                                        </div>                  
                                          <div class="field button">
                                          <div class="d-grid">
                                            <button type="submit" name="reg" class="btn btn-primary waves-effect waves-light" >Register</button>
                                        </div>
                                          </div>
                                        <div class="pt-4 text-center">
                                        <p>Already have an account ? <a href="auth-login.php" class="fw-medium text-primary"> Login here </a> </p>
                                        </div> 
                                   </form>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="mt-2 text-center">
                            <p>Chat. Crafted with <i class="mdi mdi-heart text-danger"></i> by Dezza</p>
                        </div>
                        <div class="text-center">
                            <p class="text-muted mb-0">By registering you agree to the Dezza's <a href="#" class="text-primary">Terms of Use</a></p>
=======

                        <div class="text-center">
                            <p class="text-muted mb-0">By registering you agree to the Wimit <a href="#" class="text-primary">Terms of Use</a></p>
>>>>>>> 2f0c52dd718ada22dc31c1125f6fdf78a3d19824
                            <p>© <script>document.write(new Date().getFullYear())</script></p>
                            <!-- <p>© <script>document.write(new Date().getFullYear())</script> Chatvia. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->



        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="./javascript/signup.js"></script>
        <script src="./javascript/pass-show.js"></script>

        


    </body>

<!-- Mirrored from themesbrand.com/chatvia/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 12:38:15 GMT -->
</html>
