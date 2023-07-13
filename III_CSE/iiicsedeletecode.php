<?php 
include 'dbcon.php' ;
if(isset($_POST['delete_data']))
{
    $name=$_POST['name'] ;
    $date=$_POST['date'] ;
    $period=$_POST['period'];
    $subject=$_POST['subject'] ;
    $absent=$_POST['absent'] ;

    $query =  "DELETE FROM iiicse WHERE date='$date' and period='$period' ; ";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {?>
        <script>
        alert("data Deleted Successfully") ;
        </script>
        <?php
        $_SESSION['status']="Deleted  SUCCESSFULLY" ;
        header("Location: iiicsefetchdata.php");
    }
    else{
        $_SESSION['status']="Not Deleted" ;
        header("Location: iiicseDelete.php ")  ;
    }
}






?>