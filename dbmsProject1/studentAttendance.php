<?php
require 'config/config.php';
require 'config/db.php';

//     $error = '';
//     $errorC = '';
//    if(isset($_POST['submitS'])){
//     $reg = mysqli_real_escape_string($conn, $_POST['reg']);
//     $pwd = mysqli_real_escape_string($conn, $_POST['password']); 
//     $query = "SELECT * from student where `reg` = '$reg' and `password` = '$pwd'";

//     if($result = mysqli_query( $conn,$query)){
//         if(mysqli_num_rows($result)==1){
//             $row = mysqli_fetch_assoc($result);
//             header("Location: studentAttendance.php");

//         }else {
//             $error = "User not found";
//             $errorC = "alert alert-danger m-5 p-3";
//         }     
        
//     }
//     // $query = 'select * from Student where regNo = $reg';
//    }

$name ='';
$reg = '';
$attendance = '';
$year = $sem = '';
$reg = mysqli_real_escape_string($conn, $_GET['reg']);
$query = "SELECT * from student where `reg` = $reg";

if($result = mysqli_query($conn, $query)){
    $row = mysqli_fetch_assoc($result);
    $reg = $row['reg'];
    $name= $row['name'];
    $attendance = $row['attendance'];
    $year = $row['year'];
    $sem = $row['sem'];
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

    <h1>Name: <?php echo  $name; ?></h1>
    <h1>Registration No: <?php echo $reg; ?></h1>
    <h2><?php echo $year ?> year <?php echo $sem ?> semester.</h2>
    <h1>Attendance: <?php echo $attendance; ?></h1>

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