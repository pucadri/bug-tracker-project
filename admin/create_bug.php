<?php include("includes/head.php")  ?>
<?php include_once("class/function.php") ?>
<?php 
       $query = "SELECT * FROM projects ";
     
    $show =   $result = mysqli_query($conn, $query);
    
    
?>
  
<?php 
  $query1 = "SELECT * FROM users ";

  $show1 = $result = mysqli_query($conn, $query1);
?>

<?php 
        if(isset($_POST['btn'])){

         $bug_creator_name = $_POST['bug_create_name'];
         $project_type = $_POST['sele_typ'];
         $project_title = $_POST['pro_tit'];
         $assignTo = $_POST['assign'];
         $startDate = $_POST['start_date'];
         $dueDate = $_POST['due_date'];
         $msg = $_POST['msg'];

         $query = " INSERT INTO `bugs` ( `bugCreator`, `err_type`, `project_name`, `asign_to`, `start_date`, `due_date`, `msg`, `users_id`, `projects_id`)
          VALUES ('  $bug_creator_name', ' $project_type ', ' $project_title ', ' $assignTo', '$startDate', '$dueDate ', '$msg', '35', '3'); ";

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
                    <h1 class="mt-4">Create New Bugs</h1>
                    <ol class="breadcrumb mb-4">
                    <a class="breadcrumb-item active" href="show_bug.php">Bugs Details </a>
                    </ol>
<!--======================== page-content =================================-->
                   <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bugs Createor Name</label>
                            <input type="text" name="bug_create_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Select Type</label>
                            <select class="form-select form-control mb-3" name="sele_typ" aria-label=".form-select-lg example">
                                <option selected>Select Type</option>
                                <option value="Functional Bugs">Functional Bugs</option>
                                <option value="Logical Bugs">Logical Bugs</option>
                                <option value="Workflow Bugs">Workflow Bugs</option>
                                <option value="Unit Level Bugs">Unit Level Bugs</option>
                                <option value="System-Level Integration Bugs"> System-Level Integration Bugs</option>
                                <option value="ut of Bound Bugs">Out of Bound Bugs</option>
                                <option value="Security Bugs"> Security Bugs</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Select project </label>
                            <select class="form-select form-control mb-3" name="pro_tit" aria-label=".form-select-lg example">
                                <option selected>Select Project</option>
                                <?php
                                    while($row = mysqli_fetch_assoc($show)){

                                        $title = $row['title'];

                                ?>
                                <option value="<?php echo $title ; ?>"> <?php echo $title ; ?> </option>
                                <?php  } ?>
                            </select>
                            
                        </div>
                        



                        <div class="form-group">
                            <label for="exampleInputPassword1">Assign To</label>
                            <select class="form-select form-control mb-3" name="assign" aria-label=".form-select-lg example">
                                <option selected>Select Type</option>
                                <?php
                                    while($row = mysqli_fetch_assoc($show1)){
                                        $did = $row['id'];
                                        $name = $row['fullName'];
                                ?>
                                <option value="<?php echo $name ; ?>"><?php echo $name ; ?></option>
                                <?php  } ?>
                            </select>
                        </div>




                        <div class="form-group">
                            <label for="exampleInputPassword1">Start Date</label>
                            <input type="date" name="start_date" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Due Date </label>
                            <input type="date" name="due_date" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
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