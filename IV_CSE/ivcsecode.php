<?php 
include 'dbcon.php' ;
if(isset($_POST['saveiv_data']))
{
    $name=$_POST['name'] ;
    $date=$_POST['date'] ;
    $period=$_POST['period'];
    $subject=$_POST['subject'] ;
    $absent=$_POST['absent'] ;

    $query="INSERT INTO ivcse (	name,date,period,subject,absent) VALUES ('$name','$date','$period','$subject','$absent')" ;
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {?>
        <script>
        alert("data saved Successfully") ;
        </script>
        <?php
        $_SESSION['status']="INSERTED SUCCESSFULLY" ;
        header("Location: ivcsefetchdata.php");
    }
    else{
        $_SESSION['status']="Data not Inserted" ;
        header("Location: ivcse.php ")  ;
    }
}






?>