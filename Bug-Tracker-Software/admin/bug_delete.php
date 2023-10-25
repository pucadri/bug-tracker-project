<?php include_once("class/function.php") ?>

<?php 
        // $idss = $_GET['bugID'];
        $rece = $_REQUEST['id'];
       $query = "DELETE FROM bugs WHERE bugID = $rece";

        // $run_delete_query = mysqli_query($conn, $query);
        $result = mysqli_query($conn, $query);
    
    if($result ){

        header("Location: show_bug.php");
exit();
    }
?>