<?php
include 'connect.php';
if(isset($_GET['roll_no'])) {
    $roll=$_REQUEST['roll_no'];
    header("Location : Home.php");
    $sql="DELETE FROM student_details WHERE roll_no='$roll'";
    $result=mysqli_query($conn, $sql);
    if($result){
        header("Location : Home.php");
    }else{
        header("Location : Home.php");
    }
}
?>