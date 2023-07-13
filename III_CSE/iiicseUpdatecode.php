<?php 
include 'dbcon.php' ;
if(isset($_POST['update_data']))
{
    $name=$_POST['name'] ;
    $date=$_POST['date'] ;
    $period=$_POST['period'];
    $subject=$_POST['subject'] ;
    $absent=$_POST['absent'] ;

    $query = " UPDATE iiicse SET name='$name', date='$date', period='$period',subject='$subject' ,absent='$absent'WHERE date='$date' and period='$period' ";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {?>
        <script>
        alert("data saved Successfully") ;
        </script>
        <?php
        $_SESSION['status']="UPDATED  SUCCESSFULLY" ;
        header("Location: iiicsefetchdata.php");
    }
    else{
        $_SESSION['status']="Data not Updated" ;
        header("Location: iiicseupdate.php ")  ;
    }
}






?>