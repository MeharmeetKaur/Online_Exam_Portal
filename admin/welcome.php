<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin1"]) || $_SESSION["loggedin1"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

          <link rel="stylesheet" href="css/register.css" type="text/css">
     
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username1"]); ?></b>. Welcome to our Online Examination Portal!!!</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning" style="float: right;margin: 10px 10px">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger " style="float: right;margin: 10px 10px">Logout</a><br>
        <img src="img/ques.png" class="center" style="margin-left: 450px;border-radius: 50%;"><br>
        <a href="ques.html" class="btn btn-primary" style="margin-left: 500px;margin-top: 30px;">Upload questions</a>
    </p>
</body>
</html>