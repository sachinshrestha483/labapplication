
<?php

session_start();
$a=$_SESSION['uid'];
  if ($_SESSION['uid'])
  {
      echo"";
  }
  else{
      header('location:index.html');
  }
?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



  <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#">LifeLineClinic</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

</header>
<br>
<br>
<br>
<br>
<br>
<br>


    <h1 align="center"> Welcome <?php  echo $a;  ?></h1>


<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" id="addreport" href="bill.php"><h5>Make bill</h1></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link active" href="./report/seereport.php"><h5>See Report</h1></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="addp.php"><h5>Add Patient</h5></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="seepat.php"><h5>See Patient </h5></a>
  </li>
  

  <li class="nav-item">
    <a class="nav-link" href="editrr.php"><h5>Refrence Range </h5></a>
  </li>
  
 <li class="nav-item">
    <a class="nav-link" href="adddoctor.php"><h5>Add Doctor </h5></a>
  </li>
  
  
</ul>


<div   id="add1"align="center">

<div class="card text-white bg-info mb-3" style="max-width: 18rem;">


  <div class="card-header">Total Report Today</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <?php
include_once('dbc.php');
  $qry1="SELECT COUNT(`pid`) AS t FROM `testresult` WHERE `pid`IN (SELECT `pid` FROM `patiententry` WHERE `date`= CURDATE())";
  $result1=mysql_query($qry1);
  $rows1 = mysql_fetch_assoc($result1);

    ?>
    <p class="card-text"><h5><?php echo $rows1['t'];?></h5> </p>
  </div>
</div>


</div>

<div class="container" id='dt'>



</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


















































    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>