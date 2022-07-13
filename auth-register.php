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
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-6">
                        <div class="text-center mb-4">
                            <h4 style="color: purple;">Register Now</h4>
                            <p class="text-muted mb-4">Get a Wimit account now.</p>                 
                        </div>
                        <div class="card">
                            <div class="card-body col-12 p-4">
                                <div class="p-3">
                                    <form action="#" id="formdatas" method="POST" enctype="multipart/form-data">
                                    <div class="msg">
                                        
                                        </div>
                                        <div class="name-details">
                                        <div class="mb-3">
                                            <label class="form-label">Firstname</label>
                                            <div class="input-group bg-soft-light rounded-3  mb-3">
                                                <span class="input-group-text text-muted" id="basic-addon5">
                                                    <i class="ri-user-2-line"></i>
                                                </span>
                                                <div class="field input col-10">
                                                <input type="text" name="fname" class="form-control form-control-lg bg-soft-light border-light" placeholder="Enter Firstname" aria-label="Enter Email" aria-describedby="basic-addon5"> 
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Lastname</label>
                                            <div class="input-group bg-soft-light rounded-3  mb-3">
                                                <span class="input-group-text text-muted" id="basic-addon5">
                                                    <i class="ri-user-2-line"></i>
                                                </span>
                                                <div class="field input col-10">
                                                <input type="text" name="lname" class="form-control form-control-lg bg-soft-light border-light" placeholder="Enter Lastname" aria-label="Enter Lastname" aria-describedby="basic-addon5"> 
                                                </div>   
                                            </div>
                                        </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <div class="input-group bg-soft-light mb-3 rounded-3">
                                                <span class="input-group-text border-light text-muted" id="basic-addon6">
                                                    <i class="ri-mail-line"></i>
                                                </span>
                                                <div class="field input col-10">
                                                <input type="email" name="email" class="form-control form-control-lg bg-soft-light border-light" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="basic-addon6">
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Phone No.</label>
                                            <div class="input-group bg-soft-light mb-3 rounded-3">
                                                <span class="input-group-text border-light text-muted" id="basic-addon7">
                                                    <i class="ri-phone-line"></i>
                                                </span>
                                                <div class="field input col-10">
                                                <input type="phone" name="phone" class="form-control form-control-lg bg-soft-light border-light" placeholder="Enter Phone" aria-label="Enter Phone" aria-describedby="basic-addon6">
                                                </div>
                                                
                                            </div>
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
                                        <div class="mb-4">
                                            <!-- <div class="field input"> -->
                                            <label class="form-label">Confirm Password</label>
                                            <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input class="form-control" id="passw" type="password" name="cpassword" placeholder="Confirm Password" value="">
                                            <span class="input-group-text" id="icon-clicks"><i class="fas fa-eye" id="icons"></i></span>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4">
                                                <label class="form-label">Day</label>
                                                <select name="day" id="" class="form-control ">
                                                    <option value="" selected disabled>Day</option>
                    
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label class="form-label">Month</label>
                                                <select name="month" id="" class="form-control ">
                                                    <option value="" selected disabled>Month</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label class="form-label">Year</label>
                                                <select name="year" id="" class="form-control ">
                                                    <option value="" selected disabled>Year</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="split row">
                                            <div class="col-lg-6 ">
                                                <div class="left">
                                                    <label class="form-label">Gender</label>
                                                    <select name="gender" id="" class="form-control mb-2" id="gender">
                                                        <option value="" selected disabled>Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Country</label>
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
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control mb-2">
                                        </div>                                              
                                            </div>
                                        </div>
                                            
                                          <div class="field button">
                                          <div class="d-grid">
                                            <button type="submit" name="reg" class="btn btn-primary waves-effect waves-light" >Register</button>
                                        </div>
                                          </div>

                                        <div class="mt-4 text-center">
                                            <p class="text-muted mb-0">By registering you agree to the Wimit <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Already have an account ? <a href="auth-login.php" class="fw-medium text-primary"> Login here </a> </p>
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
