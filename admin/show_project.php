<?php include("includes/head.php")  ?>
<?php include_once("class/function.php") ?>
<?php 
       $query = "SELECT * FROM projects ";

    $show =   $result = mysqli_query($conn, $query);
    
    
?>
<body class="sb-nav-fixed">
    <?php include_once("includes/top_navbar.php")  ?>
    <div id="layoutSidenav">
        <?php include_once("includes/sidebar.php")  ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Project All Details</h1>
                    <ol class="breadcrumb mb-4">
                        <!-- <li class="breadcrumb-item active">Create User</li> -->
                        <a class="breadcrumb-item active" href="create_project.php">Create New Project</a>
                    </ol>
                    <!--======================== page-content =================================-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Project Title </th>
                                        <th>Type</th>
                                        <th>Manager</th>
                                        <th>Frontend</th>
                                        <th>Backend</th>
                                        <th>Client Name</th>
                                        <th>Project Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <?php
                                    while($row = mysqli_fetch_assoc($show)){
                                        $id = $row['pro_id'];
                                        $title = $row['title'];
                                        $type = $row['type'];
                                        $manager = $row['manager'];
                                        $frontend = $row['frontend'];
                                        $backend = $row['backend'];
                                        $client = $row['clint_name'];
                                        $msg = $row['msg'];
                                
                                
                                    

                                ?>
                                <tbody>

                                    <tr>
                                       
                                    <td><?php echo $title ; ?></td>
                                    <td><?php echo $type ; ?></td>
                                    <td><?php echo $manager ; ?></td>
                                    <td><?php echo $frontend ; ?></td>
                                    <td><?php echo $backend ; ?></td>
                                    <td><?php echo $client ; ?></td>
                                    <td><?php echo $msg ; ?></td>
                                   
                                        
                                        <td>
                                            <a class="btn btn-primary" href="http://">Edit</a>
                                            <a class="btn btn-danger" href="project_delete.php?pro_id= <?php echo $row['pro_id'] ; ?> "> Delete</a>
                                        </td>

                                    </tr>
                                 
                                </tbody>
                                <?php }?>
                            </table>
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