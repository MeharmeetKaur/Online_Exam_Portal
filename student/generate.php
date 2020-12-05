<?php
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

       // $catgry=array();
        $tp=array();
        if(isset($_GET['cat']) && isset($_GET['qtype']))
        {

        $count = 0;
        $total = 0;
        $id = $_GET['ID'];
        $catgry=$_GET['cat'];
        $tp=$_GET['qtype']; 
        $t= serialize($tp);
        // $qry3="select * from question where subject= '".$catgry."' and diff_level= '".$tp."' ";

        $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        //echo $actual_link ;
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TEST</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <link rel="stylesheet" href="css/generate.css" type="text/css">
    </head>
    <body>
         <center>
            <form action="compute.php?ID=<?php echo urlencode($id) ?>&cat=<?php echo urlencode($catgry)?>&qtype=<?php echo urlencode($t)?>&url=<?php echo urlencode($actual_link)?>" method="post">
            <h1><b>Your Test Is Here! All The Best!</b></h1>  
      <table>
                                
            <tr style="background-color:#ff6347;color:white">
                                <td><b>Subject</b></td>
                                <td><b>Question level</b></td>
                                <td><b>Question</b></td>
                                <td><b>A</b></td>
                                <td><b>B</b></td>
                                <td><b>C</b></td>
                                <td><b>D</b></td>
                                
                                </tr>
        
        <?php 
        
            foreach ($tp as $level)
             {
                  
                    $qry3="select * from question where subject= '".$catgry."' and diff_level= '".$level."' ";
                    $rs3=$conn2->query($qry3);
                                if($rs3->num_rows>0)
                                {
                                while($row = $rs3->fetch_assoc())
                                {
                                    ?>
                                   <tr>
                                    <td><?php echo $row['subject'] ?></td>
                                    <td><?php echo $row['diff_level']?></td>
                                    <td><?php echo $row['question']?></td>
                                   <td><input type="radio" name="answer[<?php echo $row['qid']?>]" value="<?php echo $row['op1']?>"><?php echo $row['op1']?></td>
                                    <td><input type="radio" name="answer[<?php echo $row['qid']?>]" value="<?php echo $row['op2']?>"><?php echo $row['op2']?></td>
                                    <td><input type="radio" name="answer[<?php echo $row['qid']?>]" value="<?php echo $row['op3']?>"><?php echo $row['op3']?></td>
                                    <td><input type="radio" name="answer[<?php echo $row['qid']?>]" value="<?php echo $row['op4']?>"><?php echo $row['op4']?></td>

                                   </tr> 

                                <?php
                                  
                                }
                            }
                            else
                            {
                                echo "No questions!!!";
                            }

                
                
             }
       
        
        }
       // $count=sizeof($catgry);
        //$count1=sizeof($tp);

        ?>

        

        
       </table>
       <br>
       <button type="Submit" name="Submit" class="btn btn-primary">Submit Test</button>
   </form>
</center>
    </body>
</html>
