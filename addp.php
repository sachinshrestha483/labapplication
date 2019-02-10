<?php

session_start();


$a=$_SESSION['uid'];

  if ($_SESSION['uid'])
  {
      echo"";
  }
  else{
    header('location:login.php');
  }
  




    
  

  
  
  if(isset($_POST['submit']))
  {
    $pv=rtrim(ltrim($_POST['pname']));

    $rv=rtrim(ltrim($_POST['rby']));
$dv=rtrim(ltrim($_POST['date']));
$phv=rtrim(ltrim($_POST['phone']));
$ebyv=rtrim(ltrim($_POST['eby']));
$exbyv=rtrim(ltrim($_POST['exby']));
$t1v=rtrim(ltrim($_POST['t1']));
$t2v=rtrim(ltrim($_POST['t2']));
$t3v=rtrim(ltrim($_POST['t3']));
$t4v=rtrim(ltrim($_POST['t4']));
$t5v=rtrim(ltrim($_POST['t5']));
$t6v=rtrim(ltrim($_POST['t6']));
$t7v=rtrim(ltrim($_POST['t7']));
$t8v=rtrim(ltrim($_POST['t8']));
$av=rtrim(ltrim($_POST['age']));
$sv=rtrim(ltrim($_POST['sex']));


include_once('dbc.php');
    





$qry="INSERT INTO `patiententry`( `name`, `refby`, `age`, `sex`, `date`, `phone`, `entryby`, `examineby`, `test1`, `test2`, `test3`, `test4`, `test5`, `test6`, `test7`, `test8`) VALUES ('$pv','$rv','$av','$sv','$dv','$phv','$ebyv','$exbyv','$t1v','$t2v','$t3v','$t4v','$t5v','$t6v','$t7v','$t8v')";
 
$run=mysql_query( $qry);
echo $qry;

if($run==true)
{
  
?>

<script>
alert("id added sucessfully");



</script>

 
<?php


}



else{
  ?>
<script>
alert("id  not added sucessfully");

</script>
 
<?php

}
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Add Patient</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
     <form action="addpd.php" method='post'  name='addem' id='addem'class="form-signin"  >
      
      <h1 class="h3 mb-3 font-weight-normal">Add Patient</h1>
      <a href="user.php" class="btn btn-primary">Back To Dashboard</a>
      <br>
                <div class="form-group">
                    <label for="ID">Patient Name</label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="pname"   required>
                </div>
                <div class="form-group">
                    <label for="ID">Referred By</label>
                     <select name="rby" name="cars"class="form-control" id="exampleFormControlSelect1" name="payfor" required>
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `doctr` ";
$run=mysql_query($sql);
?>
    <option></option>
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['drname'];?></option>
                              
<?php
    }
    ?>
  </select>
              

  <div class="form-group">
    <label for="exampleFormControlSelect1"> select </label>
    <select  name="tb2" class="form-control" id='tb2' onkeyup="calculateTotal()" id="exampleFormControlSelect1">
      <option onkeyup="calculateTotal()" style="text-align:center">Years</option>
      <option onkeyup="calculateTotal()" style="text-align:center">Months</option>
      <option onkeyup="calculateTotal()" style="text-align:center" >Days</option>
      <option  onkeyup="calculateTotal()" style="text-align:center" >Hours</option>
      
    </select>
  </div>




                </div>


<div class="form-group">
                    <label for="ID">Age Number </label>
                    <input type="text" onkeyup="calculateTotal()"  required  name="tb1"  style="text-align:center" class="form-control"class="sr-only" >
                </div>



              

<div class="form-group">
                    <label for="ID">Age</label>
                    <input type="text" id='y' name="age" readonly required   style="text-align:center" class="form-control"class="sr-only" >
                </div>


                <div class="form-group">
    <label for="exampleFormControlSelect1"> SEX </label>
    <select  name="sex" required class="form-control" id="exampleFormControlSelect1">
      <option  style="text-align:center">M</option>
      <option  style="text-align:center">F</option>
      <option  style="text-align:center" >OTHERS</option>
      
    </select>
  </div>




                <div class="form-group">
                    <label for="ID">Date</label>
                    <input type="Date" name="date" value="<?php echo date('Y-m-d'); ?>" required style="text-align:center" class="form-control"class="sr-only" >
                </div>


                 <div class="form-group">
                    <label for="ID">Phone</label>
                    <input type="text" name="phone" required style="text-align:center" class="form-control"class="sr-only" >
                </div>
               
                <div class="form-group">
                    <label for="ID">Entry  By</label>
                    <input type="text" name="eby" style="text-align:center" class="form-control"class="sr-only" id="ID"  name="fown" value="<?php echo$a; ?>" required  readonly>
                </div>





                <div class="form-group">
                    <label for="ID">EXAMINED BY</label>
                    <select name="exby"class="form-control" required id="exampleFormControlSelect1" name="payfor">
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql9="SELECT * FROM `ip`  ";
$run9=mysql_query($sql9);
?>
    <option></option>
    <?php
    while($rows9=mysql_fetch_assoc($run9)){
  ?>
                              <option><?php echo $rows9['id'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>










                
                <div class="form-group">
                    <label for="ID">Test 1</label>
                    <select name="t1"class="form-control" required id="exampleFormControlSelect1" name="payfor">
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `test` ";
$run=mysql_query($sql);
?>
    <option></option>
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['testname'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>



            <div class="form-group">
                    <label for="ID">Test 2</label>
                    <select name="t2"class="form-control" id="exampleFormControlSelect1" name="payfor">
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `test` ";
$run=mysql_query($sql);
?><option></option>
    
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['testname'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>

                



            <div class="form-group">
                    <label for="ID">Test 3</label>
                    <select name="t3"class="form-control" id="exampleFormControlSelect1" name="payfor">
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `test` ";
$run=mysql_query($sql);
?>
  <option></option>  
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['testname'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>





            <div class="form-group">
                    <label for="ID">Test 4</label>
                    <select name="t4"class="form-control" id="exampleFormControlSelect1" name="payfor">
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `test` ";
$run=mysql_query($sql);
?>
  <option></option>  
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['testname'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>






            <div class="form-group">
                    <label for="ID">Test 5</label>
                    <select name="t5"class="form-control" id="exampleFormControlSelect1" name="payfor">
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `test` ";
$run=mysql_query($sql);
?>
<option></option>
    
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['testname'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>






            <div class="form-group">
                    <label for="ID">Test 6</label>
                    <select name="t6"class="form-control" id="exampleFormControlSelect1" name="payfor">
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `test` ";
$run=mysql_query($sql);
?>
    <option></option>
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['testname'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>





            <div class="form-group">
                    <label for="ID">Test 7</label>
                    <select name="t7"class="form-control" id="exampleFormControlSelect1" name="payfor">
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `test` ";
$run=mysql_query($sql);
?>
<option></option>
    
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['testname'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>





            <div class="form-group">
                    <label for="ID">Test 8</label>
                    <select name="t8"class="form-control" id="exampleFormControlSelect1" name="payfor">
    
<option></option>
    <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `test` ";
$run=mysql_query($sql);
?>
    
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['testname'];?></option>
                              
<?php
    }
    ?>
  </select>
                </div>

                
               
               
                <button type="submit"  name="submit" class="btn btn-default">Submit</button>
   


            </form>

<script type="text/javascript">

    function calculateTotal() {
        
       
        
        document.getElementById('y').value = document.addem.tb1.value+" "+ 
        document.getElementById("tb2").value;
                   
    }

</script>


</body>
</html>
