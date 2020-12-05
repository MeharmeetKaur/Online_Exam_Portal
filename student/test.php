<!doctype html>
<html lang=''>
<head>
	<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>TEST</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/test.css" type="text/css">
	</head>
	<body>

		<div class="d-flex justify-content-center align-items-center container">
			<div class="row" >
				<form class="form-inline" action="generate.php" method="get">
				<div class="col-sm-6 mt-5 wrapper1">
					<h1>Select the subject</h1>

					<?php
						$id = isset($_GET['ID']) ? $_GET['ID'] : '';
						$servername = "localhost";
        				$username = "root";
        				$password = "";
        				$dbname = "wtlproj";

       				    $conn = new mysqli($servername, $username, $password, $dbname);

       				     if ($conn->connect_error) {
            			die("Connection failed: " . $conn->connect_error);
       					 }
        				$sql="select sname from subject";
   						 $result=$conn->query($sql);
    					if($result->num_rows>0)
   						 {
     						 while($row=$result->fetch_assoc())
     						 {
     						 echo "<input type='radio' name='cat' value=".$row['sname'].">".$row['sname']."<br><br>";
     						}
   						 }

   						?>				
						
						
					
				</div>
				<input type="hidden" name="ID" value="<?php echo urlencode($id) ?>">
				<div class="col-sm-6 mt-5 wrapper1">
					<h1>Select the difficulty level</h1>                 
            <input type="radio" name="qtype[]" value="Easy" /> Easy<br><br>
            <input type="radio" name="qtype[]" value="Moderate" /> Moderate<br><br>
            <input type="radio" name="qtype[]" value="Difficult" /> Difficult<br><br>
                             
                        
						 
                   
						
					<!--	<input type="checkbox" name="qtype[]" value="Easy">Easy<br>
						<input type="checkbox" name="qtype[]" value="Moderate">Moderate<br>
						<input type="checkbox" name="qtype[]" value="Difficult">Difficult<br>
						
					-->
					
				</div>
				
				<input type="submit" class="btn btn-primary" name="Submit" style="margin-top: 30px;margin-left: 550px;">

			</form>
			</div>
		</div>

	</body>
</html>