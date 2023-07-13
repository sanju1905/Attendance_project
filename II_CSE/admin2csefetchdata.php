
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Data of I-CSE</title>
    
</head>
<body>
    <div class="container pt-5px">

        <div class="jumbotron">

            <div class="row">
                <div class="col-md-6">
                    <h2>Absenties Data of II-CSE </h2>
                </div>
                <form method="POST" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="filter_value"/>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="filter_btn">Search</button>
    </form>
               <span class="pl-5"> 
                <div class="col-md-6">
                    <a href="../admin.php" class="btn btn-secondary" style="margin-left: 80%;">LOGOUT </a>    
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php
                $con= mysqli_connect("localhost","root","","attendance");
             

                $query = "SELECT * FROM iicse";
                $query_run = mysqli_query($con, $query);
            ?>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                
                                <th>  Name </th>
                                <th> Date</th>
                                <th>Period </th>
                                <th>Subject</th>
                                <th> Absent </th>
                                <!-- <th>Add Data</th>
                                <th>Update Data</th>
                                <th>Delete Data</th> -->
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                           include './dbcon.php' ;
                           if(isset($_POST['filter_btn']))
                           {
                            $value_filter=$_POST['filter_value'];
                            $query_search="SELECT * FROM iicse WHERE CONCAT(absent,date) LIKE '%$value_filter%' ";
                            $query_run=mysqli_query($con,$query_search);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                               while($row =mysqli_fetch_array($query_run))
                               {
                                 ?>
                                    <tr>
                                      
                                      <th> <?php echo $row['name']; ?> </th>
                                      <th> <?php echo $row['date']; ?> </th>
                                      <th> <?php echo $row['period']; ?> </th>
                                      <th> <?php echo $row['subject']; ?> </th>
                                      <th> <?php echo $row['absent']; ?> </th>
                                      <!-- <th><a href="icse.php" class="btn btn-success"> ADD   </a> </th>         
                                      <th><a href="icseupdate.php" class="btn btn-primary" > UPDATE </a> </th>
                                      <th><a href="icseDelete.php" class="btn btn-danger" > DELETE </a> </th>
                                      -->
                                      
                                    
                                  </tr>
                                 <?php
                               }
                            }
                            else{
                                echo "No Records Found";
                            }

                           }
                        else{
                            ?>
                               <tr>
                                <td>No Records Found</td>
                               </tr>
                            
                              <?php
                        }   
                           ?>            
                        <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                                    <tr>
                                      
                                        <th> <?php echo $row['name']; ?> </th>
                                        <th> <?php echo $row['date']; ?> </th>
                                        <th> <?php echo $row['period']; ?> </th>
                                        <th> <?php echo $row['subject']; ?> </th>
                                        <th> <?php echo $row['absent']; ?> </th>
                                        <!-- <th><a href="icse.php" class="btn btn-success"> ADD   </a> </th>         
                                        <th><a href="icseupdate.php" class="btn btn-primary" > UPDATE </a> </th>
                                        <th><a href="icseDelete.php" class="btn btn-danger" > DELETE </a> </th>
                                        -->
                                        
                                      
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6"> No Record Found </th>
                                    </th>
                                <?php
                            }
                        ?>
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
       
        </div>
      

        <?php include 'footer.php' ?>  
    </div>
   
</body>
</html>