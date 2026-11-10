<?php include("includes/head.php") ; 
session_start();
?>

<?php include_once("class/function.php") ?>
<?php 
       $query = "SELECT * FROM users ";

    $show =   $result = mysqli_query($conn, $query);
    
    
?>
<body class="sb-nav-fixed">
    <?php include_once("includes/top_navbar.php")  ?>
    <div id="layoutSidenav">
        <?php include_once("includes/sidebar.php")  ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">User Report</h1>

                    <ol class="breadcrumb mb-4">
                        <!-- <li class="breadcrumb-item active">Create User</li> -->
                        <a class="breadcrumb-item active" href="create_user.php">Create User</a>
                        <!-- <?php 
                        $_SESSION['status'];
                        ?> -->
                    </ol>
                    <!--======================== page-content =================================-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Of Birth</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                    while($row = mysqli_fetch_assoc($show)){
                                        $did = $row['id'];
                                        $name = $row['fullName'];
                                        $email = $row['email'];
                                        $dob = $row['dob'];
                                        $phone = $row['phone'];
                                        $address = $row['address'];
                                        $role = $row['role'];
                                
                                
                                    

                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $name ; ?></td>
                                        <td><?php echo $email ; ?></td>
                                        <td><?php echo $dob ; ?></td>
                                        <td><?php echo $phone ; ?></td>
                                        <td><?php echo $address ; ?></td>
                                        <td><?php echo $role ; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="user_edit.php?id=<?php echo $row['id']; ?>"> Edit</a>
                                            <a class="btn btn-danger" href="user_delete.php?id=<?php echo $row['id']; ?>"> Delete</a>
                                        </td>
                                    </tr>
                                   </tbody>
                                <?php
                                    }
                                ?>
                                    
                                
                             
                            </table>
                        <script>
                            let table = new DataTable('#dataTable');
                        </script>
                        </div>

                    </div>

                    <!--======================== page-End =================================-->
                </div>
            </main>
            <?php include_once("includes/footer.php")   ?>
        </div>
    </div>
    <?php include("includes/scripts.php") ?>
</body>

</html>