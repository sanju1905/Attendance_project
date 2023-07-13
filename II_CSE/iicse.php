<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body bgcolor="purple">
    <div class="container bg-purple mt-6">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <br>
                    <h3><b>Insert Attendance of II CSE</b><a href="../login.php"> <br><br><button class="btn btn-warning float-end">Back</button></a></h3>
                   
                </div>
                <div class="card-body">
                    <form action="iicsecode.php" method="POST">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Date :</label>
                            <input type="date" name="date" class="form-control" placeholder="Date" required>
                        </div>
                        <div class="form-group">
                            <label for="period">Period:</label>
                            <select name="period" id="period">
                            <option value="1">1 hour</option>
                          <option value="2">2 hour</option>
                          <option value="3">3 hour</option>
                             <option value="4">4 hour</option>
                             <option value="5">5 hour</option>
                             <option value="6">6 hour</option>
                             <option value="1-3">Mrng </option>
                             <option value="4-6">Half</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <select name="subject" id="subject">
                            <option value="nmps">NPMS</option>
                          <option value="flat">FLAT</option>
                          <option value="os">DAA</option>
                             <option value="se">SE</option>
                             <option value="mad">MAD</option>
                             <option value="oslab">CE Lab</option>
                             <option value="daalab">AP Lab</option>
                             <option value="selab">CPDS Lab</option>
                             <option value="a&rs">A & RS</option>
                             <option value="uhv">UHV</option>
                              </select>
                        </div>


                        <div class="form-group">
                            <label for="">Absenties Numbers:</label>
                            <input type="text" name="absent" class="form-control" placeholder="Absenties numbers" required>
                        </div>
                       
                        
                        <div class="form-group">
                          
                            <button type="submit" name="saveii_data" class="btn btn-primary">Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </
        <?php include 'footer.php' ?>
    </div>
    
</body>
</html>