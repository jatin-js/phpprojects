<?php
require 'config/config.php';
require 'config/db.php';

    $error = '';
    $errorC = '';
   if(isset($_POST['submitS'])){
    $reg = mysqli_real_escape_string($conn, $_POST['reg']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']); 
    $query = "SELECT * from student where `reg` = '$reg' and `password` = '$pwd'";

    if($result = mysqli_query( $conn,$query)){
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
            header("Location: studentAttendance.php/?reg=".$reg);

        }else {
            $error = "User not found";
            $errorC = "alert alert-danger m-5 p-3";
        }     
        
    }
    // $query = 'select * from Student where regNo = $reg';
   }

   else if(isset($_POST['submitF'])){
    $reg = mysqli_real_escape_string($conn, $_POST['reg']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * from faculty where `reg` = '$reg' and `password` = '$pwd'";

    if($result = mysqli_query( $conn,$query)){
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
            header("Location: faculty.php/?reg=".$reg);

        }else {
            $error = "User not found";
            $errorC = "alert alert-danger m-5 p-3";
        }     
        
    }
   }
   else if(isset($_POST['submitW'])){
    $reg = mysqli_real_escape_string($conn, $_POST['reg']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * from student where `reg` = '$reg' and `password` = '$pwd'";

    if($result = mysqli_query( $conn,$query)){
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
            header("Location: studentAttendance.php/?reg=".$reg);

        }else {
            $error = "User not found";
            $errorC = "alert alert-danger m-5 p-3";
        }     
        
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <button class="studentBtn btn btn-secondary">Student</button>
    <button class="facultyBtn btn btn-secondary">Faculty</button>
    <button class="wardenBtn btn btn-secondary">Warden</button>

    <div class="error <?php echo $errorC; ?>"> <?php echo $error; ?></div>

    <div class="studentL">
        <h1>Student Login</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="reg">Registration Number:</label>
                <input class="form-control" type="number" name="reg" id="reg" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>

            <input class="btn btn-primary" type="submit" name="submitS" value="Login">
        </form>
    </div>
   
   <div class="facultyL">
    <h1>Faculty Login</h1>
        
        <form action="" method="post">
            <div class="form-group">
                <label for="reg">Registration Number:</label>
                <input class="form-control" type="number" name="reg" id="reg"  required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>

            <input class="btn btn-primary" type="submit" name="submitF" value="Login">
        </form>
    </div>

    <div class="wardenL">
        <h1>Warden Login</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="reg">Registration Number:</label>
                <input class="form-control" type="number" name="reg" id="reg" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>

            <input class="btn btn-primary" type="submit" name="submitW" value="Login">
        </form>
    </div>
   

   
</div>

    <script src="main.js"></script>
   
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>