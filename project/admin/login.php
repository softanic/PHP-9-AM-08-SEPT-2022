 <!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<!-- Mirrored from html.designstream.co.in/pick/html/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 08:58:27 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Pick Admin</title>
        <link rel="shortcut icon" href="dist/images/favicon.ico" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">        
        <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css"> 

        <!-- END Template CSS-->     

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="dist/vendors/social-button/bootstrap-social.css"/>   
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="dist/css/main.css">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">
        <!-- START: Main Content-->
        <div class="container">
            <div class="row vh-100 justify-content-between align-items-center">
                <div class="col-12">
                    <form action="login-validate.php" method='post' class="row row-eq-height lockscreen  mt-5 mb-5">
                        <div class="lock-image col-12 col-sm-5"></div>
                        <div class="login-form col-12 col-sm-7">
                            <div class="form-group mb-3">
                                <label for="">Mobile No</label>
                                <input class="form-control" type="text"  required="" placeholder="Enter your mobile no" name='mobile_no'>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name='password'>
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>
                           
                            
                            <div class="mt-2">Don't have an account? <a href="page-register.html">Create an Account</a></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- END: Content-->

        <!-- START: Template JS-->
        <script src="dist/vendors/jquery/jquery-3.3.1.min.js"></script>
        <script src="dist/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="dist/vendors/moment/moment.js"></script>
        <script src="dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    
        <script src="dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- END: Template JS-->  
    </body>
    <!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pick/html/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 08:58:27 GMT -->
</html>
