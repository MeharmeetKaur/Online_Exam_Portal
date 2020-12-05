<?php
// Initialize the session
session_start();
 $id = isset($_GET['ID']) ? $_GET['ID'] : '';
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
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
    <style type="text/css">
        body{ background-image: linear-gradient(blue, white);
    background-repeat: no-repeat;
    font: 14px sans-serif;
    text-align: center;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.  Welcome to our Online Examination Portal!!!</h1>
    </div>
    <p>
     
        <a href="reset-password.php" class="btn btn-warning" style="float: right;margin: 10px 10px">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger" style="float: right;margin: 10px 10px">Log Out</a><br>
         <img src="img/ans.jpg" class="center" style="margin-left: 350px;border-radius: 50%;height: 300px;width: 300px;"><br>
           <a href="test.php?ID=<?php echo urlencode($id) ?>" class="btn btn-success" style="margin-left: 70px;margin-top: 30px;">Give test</a>
    </p>
</body>
</html>