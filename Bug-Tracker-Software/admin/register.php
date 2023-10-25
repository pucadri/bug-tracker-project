<?php include_once("class/function.php"); ?>
<?php

error_reporting(0);
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $cnfpass = $_POST['cnfpass'];

    if (empty($email)) {
        $err = "Please enter email....";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = "Invalid email address....";
    } else {
        if ($pass == $cnfpass) {
            // $pas = "Successfull";

            $query = "INSERT INTO `users` (`fullName`,`email`,`password`)
          VALUES ('$name','$email','$pass'); ";

            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo "not insearted";
            }
            else{
                header("Location: template.php");
            }
        } else {
            $pas = "Password doesn't match";
        }
    }
}
?>


<?php include("includes/head.php")  ?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputFirstName">Full Name</label>
                                            <input class="form-control py-4" name="name" id="inputFirstName" type="text" placeholder="Enter Full name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label> <span style="color:red;"> <?php echo $err ?> </span>
                                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter email address" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control py-4" name="pass" id="inputPassword" type="password" placeholder="Enter password" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label> <span style="color:red;"> <?php echo $pas ?> </span>
                                                    <input class="form-control py-4" name="cnfpass" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0">
                                            <button class="btn btn-primary btn-block" name="btn" type="submit">Create Account</button>
                                            <!-- <a  href="login.html"></a> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="index.php">Have an account? Go to login</a></div>
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