<?php
include 'connect.php';
if(isset($_POST['submit'])) {
    $roll_no=$_POST['roll_no'];
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $DOB=$_POST['DOB'];
    $department=$_POST['department'];
    $batch=$_POST['batch'];

    $sql=" INSERT INTO student_details (roll_no, name,mail, DOB, department, batch) VALUES('$roll_no', '$name', '$mail', '$DOB', '$department', '$batch')";
    $result=mysqli_query($conn, $sql);
    if($result){
        header("Location: Home.php");
    }else{
        die(mysqli_error($conn));
    }
}
?>

<html lang="en">
<head>
  <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>ADD DETAILS</title>
</head>
<body style="background-color: rgb(233, 229, 229);">
    <div class="container my-5">
        <h1 style="margin-left: 40%; color: rgb(0, 9, 133);">Add Record</h1>
        <form method="post">
            <div class="form-group" style="margin-left:32%;">
                <input type="text" required class="form-control" name="roll_no" autocomplete='off' placeholder='Enter Roll Number' style="width:50%;">
            </div>
            <div class="form-group" style="margin-left:32%;">
                <input type="text" required class="form-control" name="name" autocomplete='off' placeholder='Enter Name' style="width:50%;">
            </div>
            <div class="form-group" style="margin-left:32%;">
                <input type="text" required class="form-control" name="mail" autocomplete='off' placeholder='Enter Mail ID' style="width:50%;">
            </div>
            <div class="form-group" style="margin-left:32%;">
                <input type="text" required class="form-control" name="DOB" autocomplete='off' placeholder='Enter Date Of Birth' style="width:50%;">
            </div>
            <div class="form-group" style="margin-left:32%;">
                <input type="text" required class="form-control" name="department" autocomplete='off' placeholder='Enter Department' style="width:50%;">
            </div>
            <div class="form-group" style="margin-left:32%;">
                <input type="text" required class="form-control" name="batch" autocomplete='off' placeholder='Enter Batch' style="width:50%;">
            </div>
            <div style="margin-left:45%;">
                <button class="btn btn-outline-success my-5 my-sm-0" type="submit" name="submit"  magin-left:40%;>Submit</button>
            </div>
        </form>
    </div>
</body>
</html>