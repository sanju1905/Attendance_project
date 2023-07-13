<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <?php include './links.php'?>
   </head>

<body class="bg-secondary">
    <center>
            <h1 class="text-violet"><b>ATTENDANCE SYSTEM</b>
           <span> <a href="./admin.php"><button class="btn btn-danger pb-2">    Logout</button></a></span></h1><br />
   <!-- I BTech cse      -->
<div class="card w-50 text-light bg-primary mt-2">
  <div class="card-body">
    <h2 class="card-title" style="color:yellow;">I BTech CSE</h2><hr/>
    <h4 class="card-text"><b>To update the Attendance click below:</b></h4>
    <button> <a class="btn btn-success pr-2px" href="./I_CSE/icse.php">I BTech CSE</a></button>
    <hr/><h4 class="card-text "><b>To View Data click below:</b></h4>
    <button> <a class="btn btn-primary pr-2px" href="./I_CSE/icsefetchdata.php">I CSE Data</a></button>
  </div>
</div>
<br/>
<!-- II BTech cse      -->
<div class="card w-50 text-light bg-primary">
  <div class="card-body">
    <h2 class="card-title" style="color:yellow;">II BTech CSE</h2><hr/>
    <h4 class="card-text"><b>To update the Attendance click below:</b></h4>
    <button> <a class="btn btn-success pr-2px" href="./II_CSE/iicse.php">II BTech CSE</a></button>
    <hr/> <h4 class="card-text"><b>To View Data click below:</b></h4>
    <button> <a class="btn btn-primary pr-2px" href="./II_CSE/iicsefetchdata.php">II CSE Data</a></button>
  </div>
</div>
<br/>

<!-- III BTech cse      -->
<div class="card w-50 text-light bg-primary">
  <div class="card-body">
    <h2 class="card-title" style="color:yellow;">III BTech CSE</h2><hr/>
    <h4 class="card-text"><b>To update the Attendance click below:</b></h4>
    <button> <a class="btn btn-success pr-2px" href="./III_CSE/iiicse.php">III BTech CSE</a></button>
    <hr/><h4 class="card-text"><b>To View Data click below:</b></h4>
    <button> <a class="btn btn-primary pr-2px" href="./III_CSE/iiicsefetchdata.php">III CSE Data</a></button>
  </div>
</div>

<br/>

<!-- IV BTech cse      -->
<div class="card w-50 text-light bg-primary">
  <div class="card-body">
    <h2 class="card-title" style="color:yellow;">IV BTech CSE</h2><hr/>
    <h4 class="card-text"><b>To update the Attendance click below:</b></h4>
    <button> <a class="btn btn-success pr-2px" href="./IV_CSE/ivcse.php">IV BTech CSE</a></button>
    <hr/><h4 class="card-text"><b>To View Data click below:</b></h4>
    <button> <a class="btn btn-primary pr-2px" href="./IV_CSE/ivcsefetchdata.php">IV CSE Data</a></button>
  </div>
</div>
    </center>
  <?php include './I_CSE/footer.php'?>
</body>

</html>