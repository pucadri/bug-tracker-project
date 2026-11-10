<?php include_once("class/function.php") ?>
<?php 
        if(isset($_POST['btn'])){

         $name = $_POST['name'];
         $email = $_POST['email'];
         $pass = md5($_POST['pass']);
         $phone = $_POST['phone'];
         $date_of_birth = $_POST['dob'];
         $role = $_POST['role'];
         $addrss = $_POST['address'];
         $query = "INSERT INTO `users` ( `fullName`, `email`, `password`, `phone`, `dob`, `role`, `address`) 
         VALUES ( '$name', '$email', '$pass', ' $phone', '$date_of_birth', ' $role', '$addrss'); ";

         $result = mysqli_query($conn, $query);

         if (!$result) {
            echo "not insearted";
         }
        }
?>
<?php include("includes/head.php")  ?>

<body class="sb-nav-fixed">
    <?php include_once("includes/top_navbar.php")  ?>
    <div id="layoutSidenav">
        <?php include_once("includes/sidebar.php")  ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Create User</h1>
                    <ol class="breadcrumb mb-4">
                    <a class="breadcrumb-item active" href="show_user.php">All User Report</a>
                    </ol>
<!--======================== page-content =================================-->
                   <form action="" method="post">
                   <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter Full Name ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Of Birth</label>
                            <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Date of Birth">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter Contact Number">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">User Role</label>
                            <select class="form-select form-control mb-3" name="role" required  aria-label=".form-select-lg example">
                                <option >Select User Role</option>
                                <option value="Manager">Manager</option>
                                <option value="Tester">Tester</option>
                                <option value="Developer">Developer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputPassword1"required  placeholder="Enter Adress">
                        </div>
                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit"name="btn" class="btn btn-primary">Submit</button>
                    </form>

<!--======================== page-End =================================-->
                </div>
            </main>
            <?php include_once("includes/footer.php")   ?>
        </div>
    </div>
    <?php include("includes/scripts.php") ?>
</body>

</html>