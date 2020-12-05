<html>
<head>
	 <meta charset="UTF-8">
    <title>UPLOAD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <link rel="stylesheet" href="css/upload.css" type="text/css">
</head>
<body>
	<?php
error_reporting(0);

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

	$subject="";
	$qlevel="";
  $ques="";
  $op1="";
  $op2="";
  $op3="";
  $op4="";
  $ans="";
  $marks="";
  $subid=0;
  $levid=0;

	if(isset($_GET['cat']) && isset($_GET['qtype']))
     {
        $subject=$_GET['cat'];
        $qlevel=$_GET['qtype'];

       // echo "$category";
        //echo "$qtype";
      }

$qry1="insert into subject(sname) values('$subject')";
      if ($conn->query($qry1) === TRUE) {
    echo "New subject added successfully";
} else {
    echo "Error: " . $qry1 . "<br>" . $conn->error;
}

$sql="select sid from subject where sname='".$subject."'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      $row=$result->fetch_assoc();
      $subid=$row['sid'];
    }

   
        ?>
           <a href="logout.php" class="btn btn-danger " style="float: right;margin: 10px 40px">Logout</a><br>
           <div class="wrapper">
        <h1 style="text-align: center;">Multiple Choice Questions(Single Answer)</h1>
        <form action=" " method="post" style="text-align:center;">
      	 <h3>Enter question:</h3><br><input type="text" placeholder="Question" name="ques" size="50"><br>
      	<h3>Enter options</h3>
      	<input type="text" placeholder="Option 1" name="op1" size="50"><br><br>
      	<input type="text" placeholder="Option 2" name="op2" size="50"><br><br>
      	<input type="text" placeholder="Option 3" name="op3" size="50"><br><br>
      	<input type="text" placeholder="Option 4" name="op4" size="50"><br><br>
        <h3>Correct Answer:</h3><br><input type="text"placeholder="answer" name="ans" size="50"><br>
        <h3>Marks:</h3><br><input type="text" placeholder="marks" name="marks" size="50"><br><br>
        <input type="submit" class="btn btn-primary" value="Upload Question" name="submit">
        </form>
       </div>
        <?php
        if(isset($_POST['submit']))
        {



          $ques=$_POST['ques'];
          $op1=$_POST['op1'];
          $op2=$_POST['op2'];
          $op3=$_POST['op3'];
          $op4=$_POST['op4'];
          $ans=$_POST['ans'];
          $marks=$_POST['marks'];

        
      
        $qry1="insert into question(subject,diff_level,question,op1,op2,op3,op4,answer,marks) values('$subject','$qlevel','$ques','$op1','$op2','$op3','$op4','$ans','$marks')";
       if ($conn->query($qry1) === TRUE) {
      echo "New question added successfully";
      } else {
    echo "Error: " . $qry1 . "<br>" . $conn->error;
      }
    
        }
     


$conn->close();
	?>
  

	</body>
</html>