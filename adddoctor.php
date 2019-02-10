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
    <h1 align="center">Add Doctor</h1>
<br>
<br>
<div align="center">
<a  class="btn btn-primary" href="user.php"><--Back To Dashboard</a>
</div>
<div align="center">
<form action="adddoctor.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text"  name='dname'style="width:400px;text-align:center" class="form-control"  placeholder="Add Doctor">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include_once('dbc.php');
if(isset($_POST['submit']))
  {
$dname=rtrim(ltrim($_POST['dname']));       


    
$qry="INSERT INTO `doctr`( `drname`) VALUES ('$dname')";
$run=mysql_query( $qry);
if($run==true)
     {
       
     ?>
    
 <script>
     alert(" Done");
      </script>
     <?php
      
     
     }


else{
  ?>
<script>
alert("notdone");

</script>
 
<?php


}
}
?>



</div>
<div class="container" align="center">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Doctor Name </th>
      
    </tr>
  </thead>
   <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `doctr` ORDER By sno DESC ";
$run=mysql_query($sql);
$sno=1
?>
  <tbody><?php


while($rows=mysql_fetch_assoc($run)){
  ?>
   
    <tr>
    	<td><?php echo $sno?></td>
      <th scope="row"><?php echo $rows['drname'];?></th>
      
     
    </tr>
    <?php
    $sno=$sno+1;
}?>
   
  </tbody>
</table>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>