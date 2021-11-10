<?php 
session_start();

if (isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Home</title>
</head>
<body style="background-color: rgb(233, 229, 229);">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <h1 style="font-size: 30px; color: aqua;"><i class="fa fa-user"></i> Hello, <?php echo $_SESSION['user_name']; ?></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" style="font-size: 20px;"></i><span class="sr-only">(current)</span></a>
                  </li>   
                  <li>
                  <form method="post">
                    <a id="add" href="add.php" class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="sub">Add Details</a>
                </form>
</li>              
                </ul>
              </div>
        </nav>
        <div class="container" style="margin-top: 100px;">
        <div class="row">
        <h1 style="margin-left: 400px; color: rgb(0, 9, 133);">Student Details</h1><br>
            <table class="table table-bordered table table-striped table-hover table-dark" >
                <caption>Student Details</caption> 
                <tr>
                        <th style="text-align: center;">Roll No</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Mail</th>
                        <th style="text-align: center;">Date Of Birth</th>
                        <th style="text-align:center;">Department</th>
                        <th style="text-align:center;">Batch</th>
                        <th style="text-align: center;">Delete</th>
                    </tr>
                    <?php
                      $conn = mysqli_connect('localhost', 'root', '', 'student_details');
                      $query = "SELECT * FROM student_details";
                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)):?> 
                    <tr>
                      <td><?php echo $row['roll_no'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['mail'];?></td>
                      <td><?php echo $row['DOB'];?></td>
                      <td><?php echo $row['department'];?></td>
                      <td><?php echo $row['batch'];?></td>
                      <td><a class="btn btn-outline-danger my-2 my-sm-0" type="submit" href="delete.php?roll_no=<?php echo $row['roll_no']; ?>">Delete</a></td>
                    </tr>
                    <?php endwhile;?>
            </table>      
        </div>
    </div>

    <script src="./bootstrap-3.4.1-dist/js/jquery.min.js"></script>
    <script src="./bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>