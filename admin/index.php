<?php include_once("class/function.php") ?>
<?php

error_reporting(0);
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $userpass = $_POST['password'];

    if (!empty($email) && !empty($userpass)) {

        // echo "$email";

        $sql = "SELECT id FROM users WHERE email='$email' AND password= '$userpass' ";
        $sql_query = mysqli_query($conn, $sql);
        $mysqli_query_rows = mysqli_num_rows($sql_query);
        if ($mysqli_query_rows) {
            header("Location: template.php");
        } else {
            $msg = 'Invalid Email oR Password ';
        }
    } else {
        $msg = 'Fill up all fields!';
    }
    // if (isset($_SESSION["id"])) {
    //     header("Location: template.php");
    // }
}



?>
<?php include("includes/head.php")  ?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <h3 class="text-center font-weight-light my-4">BUG TRACKER SOFTWARE</h3>
                                <h3 class="text-center font-weight-light my-0">All user Login</h3>
                                <div>
                                    <span style="color:red;"> <?php echo $msg ?> </span>
                                </div>
                                <div class="card-body">

                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label><span style="color:red;"> <?php echo $pas ?> </span>
                                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" name="password" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" />
                                        </div>
                                        <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div> -->
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button class="btn btn-primary" name="btn" type="submit">Login</button>
                                            <!-- <a  href="template.php"></a> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <?php include("includes/scripts.php") ?>
</body>

</html>