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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br>
    <br>
    <br>
    <h1 align="center">Hello <?php echo$a;?></h1>
    <div class="container">
      <div align="center">
    <a  class="btn btn-primary" href="user.php"><h4>Back To Dashboard</h4></a>
    </div>
    <div class="table-responsive">


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" style="width: 50%">pid</th>
       <th scope="col" style="width: 50%">Bill</th>
      <th scope="col"  class="col-md-2">&nbsp;PatientName&nbsp;</th>
      <th scope="col">ReferredBy(doctorname)</th>
      <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">EntryBy</th>
      <th scope="col">Examineby</th>
      <th scope="col" width="130">Test1Name</th>
      <th scope="col">Test2Name</th>
      <th scope="col">Test3Name</th>
      <th scope="col">Test4Name</th>
      <th scope="col">Test5Name</th>
      <th scope="col">Test6Name</th>
      <th scope="col">Test7Name</th>
      <th scope="col">Test8Name</th>
      
    </tr>
  </thead>
   <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `patiententry`  ORDER BY pid DESC ";
$run=mysql_query($sql);
?>
 <tbody><?php


while($rows=mysql_fetch_assoc($run)){
  ?>
   
  
  <tr>
  <td><?php echo $rows['pid'];?></td>
  <td><a  class="btn btn-primary" href="./report/bill.php?update=<?php echo $rows['pid'] ;?>">See Bill</a>
 
  <td><?php echo $rows['name'];?></td>
  <td><?php echo $rows['refby'];?></td>
<td><?php echo $rows['date'];?></td>
<td><?php echo $rows['phone'];?></td>
<td><?php echo $rows['entryby'];?></td>
<td><?php echo $rows['examineby'];?></td>






<?php
      if(strlen($rows['test1'])<3)
      {
        ?>
        <td>  </td>
      
  <?php
  }
  else{
    $y=$rows['pid'];
    $z=$rows['test1'];
    $sql2="SELECT `sno`   FROM `testresult` WHERE `pid`=$y  AND `testname`='$z' ";


$run2=mysql_query($sql2);
$rows2=mysql_fetch_assoc($run2)

    ?>
    <?php if($rows2['sno']== NULL){
      ?>
    
    <td> <a href="./report/<?php echo$rows['test1'];?>.php?update=<?php echo $rows['pid'] ;?>"><?php echo $rows['test1'];?></a>
       <?php
   }


  else{
   
  ?>
    <td> <?php echo $rows['test1'];?></td>
 
<?php
}
?>


<?php
  }
?>








<?php
      if(strlen($rows['test2'])<3){
        ?>
        <td>  </td>
      
  <?php

  }
  else{
    $y=$rows['pid'];
    $z=$rows['test2'];
    $sql2="SELECT `sno`   FROM `testresult` WHERE `pid`=$y  AND `testname`='$z' ";

$run2=mysql_query($sql2);
$rows2=mysql_fetch_assoc($run2)

    ?>

   <?php if($rows2['sno']== NULL){

  ?>
  <td> <a href="./report/<?php echo$rows['test2'];?>.php?update=<?php echo $rows['pid'] ;?>"><?php echo $rows['test2'];?></a>
 
  <?php
   }


  else{
   
  ?>
    <td> <?php echo $rows['test2'];?></td>
 
<?php
}
?>



    
   
<?php
  }
?>





<?php
      if(strlen($rows['test3'])<3){
        ?>
        <td>  </td>
      
  <?php

  }
  else{
    $y=$rows['pid'];
    $z=$rows['test3'];
    $sql2="SELECT `sno`   FROM `testresult` WHERE `pid`=$y  AND `testname`='$z' ";

$run2=mysql_query($sql2);
$rows2=mysql_fetch_assoc($run2)

    ?>

   <?php if($rows2['sno']== NULL){

  ?>
  <td> <a href="./report/<?php echo$rows['test3'];?>.php?update=<?php echo $rows['pid'] ;?>"><?php echo $rows['test3'];?></a>
 
  <?php
   }


  else{
   
  ?>
    <td> <?php echo $rows['test3'];?></td>
 
<?php
}
?>



    
   
<?php
  }
?>





<?php
      if(strlen($rows['test4'])<3){
        ?>
        <td>  </td>
      
  <?php

  }
  else{
    $y=$rows['pid'];
    $z=$rows['test4'];
    $sql2="SELECT `sno`   FROM `testresult` WHERE `pid`=$y  AND `testname`='$z' ";

$run2=mysql_query($sql2);
$rows2=mysql_fetch_assoc($run2)

    ?>

   <?php if($rows2['sno']== NULL){

  ?>
  <td> <a href="./report/<?php echo$rows['test4'];?>.php?update=<?php echo $rows['pid'] ;?>"><?php echo $rows['test4'];?></a>
 
  <?php
   }


  else{
   
  ?>
    <td> <?php echo $rows['test4'];?></td>
 
<?php
}
?>



    
   
<?php
  }
?>





<?php
      if(strlen($rows['test5'])<3){
        ?>
        <td>  </td>
      
  <?php

  }
  else{
    $y=$rows['pid'];
    $z=$rows['test5'];
    $sql2="SELECT `sno`   FROM `testresult` WHERE `pid`=$y  AND `testname`='$z' ";

$run2=mysql_query($sql2);
$rows2=mysql_fetch_assoc($run2)

    ?>

   <?php if($rows2['sno']== NULL){

  ?>
  <td> <a href="./report/<?php echo$rows['test5'];?>.php?update=<?php echo $rows['pid'] ;?>"><?php echo $rows['test5'];?></a>
 
  <?php
   }


  else{
   
  ?>
    <td> <?php echo $rows['test5'];?></td>
 
<?php
}
?>



    
   
<?php
  }
?>







<?php
      if(strlen($rows['test6'])<3){
        ?>
        <td>  </td>
      
  <?php

  }
  else{
    $y=$rows['pid'];
    $z=$rows['test6'];
    $sql2="SELECT `sno`   FROM `testresult` WHERE `pid`=$y  AND `testname`='$z' ";

$run2=mysql_query($sql2);
$rows2=mysql_fetch_assoc($run2)

    ?>

   <?php if($rows2['sno']== NULL){

  ?>
  <td> <a href="./report/<?php echo$rows['test6'];?>.php?update=<?php echo $rows['pid'] ;?>"><?php echo $rows['test6'];?></a>
 
  <?php
   }


  else{
   
  ?>
    <td> <?php echo $rows['test6'];?></td>
 
<?php
}
?>



    
   
<?php
  }
?>





<?php
      if(strlen($rows['test7'])<3){
        ?>
        <td>  </td>
      
  <?php

  }
  else{
    $y=$rows['pid'];
    $z=$rows['test7'];
    $sql2="SELECT `sno`   FROM `testresult` WHERE `pid`=$y  AND `testname`='$z' ";

$run2=mysql_query($sql2);
$rows2=mysql_fetch_assoc($run2)

    ?>

   <?php if($rows2['sno']== NULL){

  ?>
  <td> <a href="./report/<?php echo$rows['test7'];?>.php?update=<?php echo $rows['pid'] ;?>"><?php echo $rows['test7'];?></a>
 
  <?php
   }


  else{
   
  ?>
    <td> <?php echo $rows['test7'];?></td>
 
<?php
}
?>



    
   
<?php
  }
?>






<?php
      if(strlen($rows['test8'])<3){
        ?>
        <td>  </td>
      
  <?php

  }
  else{
    $y=$rows['pid'];
    $z=$rows['test8'];
    $sql2="SELECT `sno`   FROM `testresult` WHERE `pid`=$y  AND `testname`='$z' ";

$run2=mysql_query($sql2);
$rows2=mysql_fetch_assoc($run2)

    ?>

   <?php if($rows2['sno']== NULL){

  ?>
  <td> <a href="./report/<?php echo$rows['test8'];?>.php?update=<?php echo $rows['pid'] ;?>"><?php echo $rows['test8'];?></a>
 
  <?php
   }


  else{
   
  ?>
    <td> <?php echo $rows['test8'];?></td>
 
<?php
}
?>



    
   
<?php
  }
?>



















</tr><?php


}
?>



</tbody>


   </table>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>