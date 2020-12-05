
<?php
require_once "config.php";
$id = isset($_GET['ID']) ? $_GET['ID'] : '';
$catgry =array();
$catgry = isset($_GET['cat']) ? urldecode($_GET['cat']) : '';
$tp = array();
$tp = isset($_GET['qtype']) ? unserialize(urldecode($_GET['qtype'])) : '';
$url = isset($_GET['url']) ? $_GET['url'] : 'Null';
$count=0;
$total=0;
//echo $catgry;
$options=array();
$options=isset($_POST['answer']) ? $_POST['answer'] : 'ans';
 $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wtlproj";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn2 = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
            foreach ($tp as $level)
             {
             	//echo $level;

             	$qry3="select * from question where subject= '".$catgry."' and diff_level= '".$level."' ";
                    $rs3=$conn2->query($qry3);
                        if($rs3->num_rows>0)
                         {

                         while($row = $rs3->fetch_assoc()) {
                            foreach ($options as $key=> $value){
                            	//echo $key." and Value=>".$value."<br>";
                            	if($key==$row['qid']){
                            		if($value == $row['answer']){
                            		$count=$count + $row['marks'];
                            		$total=$total + $row['marks'];
                            		//echo $key."<br>";
                            		}
                            		else{
                            		$total=$total + $row['marks'];
                            		} 
                            	}
                            	
                        	} 
                       
                        }	  	

                  }
             }	

           
           $sql = "UPDATE users SET testurl=?, marks=? WHERE id=?";
  
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sii", $url,$count,$id);
         

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <link rel="stylesheet" href="css/compute.css" type="text/css">
   
</head>
<body>
     <a href="logout.php" class="btn btn-danger" style="float: right;margin: 10px 10px">Log Out</a>
    <h1>You have successfully completed the Test!!!</h1>
    <img src="img/cong.jpg" class="center">
    <?php
     if(mysqli_stmt_execute($stmt)){
                echo "<h2>Your score is ".$count."/".$total."</h2>";
            } else{
                echo "Something went wrong. Please try again later.";
            }

        }
    ?>
</body>
</html>