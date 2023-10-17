<?php session_start(); ?>

<?php include 'layouts/main.php'; ?>

<head>

    <title>Create New Password</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper solid-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 right-bg h-100">
                                        <div class="1bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.php" class="d-block">
                                                    <img src="" alt="" height="18">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <h5 class="text-primary">Create new password</h5>
                                        <p class="text-muted">Please enter a secure password with minium eight (8) characters. </p>

                                        <div class="p-2">

                                            <form action="/api/dashboard/update/update_usr_change_password.php" method="post" >
                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input name= "input_new_password" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                    <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="confirm-password-input">Confirm Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input name="input_confirm_new_password" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="confirm-password-input" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon" type="button" id="confirm-password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-color w-100" type="submit">Reset Password</button>
                                                </div>

                                            </form>
                                        </div>


                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
    </div>
    <!-- end auth-page-wrapper -->

    <?php include 'layouts/vendor-scripts.php'; ?>

    <!-- password-addon init -->
    <script src="assets/js/pages/password-create.init.js"></script>
</body>

<style>
    .solid-bg-cover {
        background-color: #0a2b3d;
        /* Replace this with the desired background color */
        /* Add any other styles you want for the solid background cover */
    }

    .btn-color{
color: white;
background-color: #0dcaf0;

    }

    .right-bg {
        background-color: #0dcaf0;
        background-image: url("/assets/images/bs-coat-of-arms.svg");
        /* Replace this with the path to your image */
        background-size: 65%;
        /* Adjust background sizing as needed */
        background-position: center;
        /* Adjust background position as needed */
        background-repeat: no-repeat;
    }
    .col-lg-6 {
            height: 575px;
            /* Increase the height to 150 pixels on mobile */
            
        }

    /* Media query for mobile devices */
    /* Media query for mobile devices */
    @media (max-width: 768px) {
        .col-lg-6 {
            height: 450px;
            /* Increase the height to 150 pixels on mobile */
            width: 100%;
        }

        .right-bg {
            background-color: #0dcaf0;
            background-image: url("/assets/images/bs-coat-of-arms.svg");
            /* Replace this with the path to your image */

            background-size: 85%;
            /* Adjust background sizing as needed */
            background-position: center;
            /* Adjust background position as needed */
            background-repeat: no-repeat;

        }
    }
</style>




</html>