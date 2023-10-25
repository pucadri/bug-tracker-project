<?php include("includes/head.php")  ?>
<?php include_once("class/function.php") ?>
<?php 
       $query = "SELECT * FROM users ";

    $show =   $result = mysqli_query($conn, $query);
    
    
?>
<?php 
        if(isset($_POST['btn'])){

         $title = $_POST['title'];
         $type = $_POST['type'];
         $manager = $_POST['manager'];
         $frontend = $_POST['frontend'];
         $backend = $_POST['backend'];
         $clname = $_POST['clname'];
         $msg = $_POST['msg'];

         

         $query = "INSERT INTO `projects` (`title`, `type`, `manager`, `frontend`, `backend`, `clint_name`, `msg`, `user_id`)
          VALUES ('$title', '$type', '$manager ', '$frontend', ' $backend', ' $clname ', ' $msg ', '35'); ";

         $result = mysqli_query($conn, $query);

         if (!$result) {
            echo "not insearted";
         }
        }
?>
<body class="sb-nav-fixed">
    <?php include_once("includes/top_navbar.php")  ?>
    <div id="layoutSidenav">
        <?php include_once("includes/sidebar.php")  ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Create New Project</h1>
                    <ol class="breadcrumb mb-4">
                    <a class="breadcrumb-item active" href="show_project.php">Project Details </a>
                    </ol>
<!--======================== page-content =================================-->
                   <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Project Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Type</label>
                            <input type="text" name="type" class="form-control" id="exampleInputPassword1" >
                        </div>

                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Select Manager</label>
                            <select class="form-select form-control mb-3" name="manager" aria-label=".form-select-lg example">
                                <option selected>Select Type</option>
                                <?php
                                    while($row = mysqli_fetch_assoc($show)){
                                        $did = $row['id'];
                                        $name = $row['fullName'];
                                ?>
                                <option value="<?php echo $name ; ?>"><?php echo $name ; ?></option>
                                <?php  } ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Frontend</label>
                            <input type="text" name="frontend" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Backend</label>
                            <input type="text" name="backend" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Client Name </label>
                            <input type="text" name="clname" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Project Details</label>
                            <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" name="btn"   class="btn btn-primary">Submit</button>
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