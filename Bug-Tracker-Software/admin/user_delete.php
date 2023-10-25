<?php include_once("class/function.php") ?>

<?php 
        $ids = $_GET['id'];
        // $rece = $_REQUEST['id'];
       $query = "DELETE FROM users WHERE id = $ids";

        // $run_delete_query = mysqli_query($conn, $query);
        $result = mysqli_query($conn, $query);
    
    if($result ){

        header("Location: show_user.php");
        exit();
    }
?>