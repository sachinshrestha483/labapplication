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
    

$tn=rtrim(ltrim($_POST['ten']));
$stn1=rtrim(ltrim($_POST['st1']));
$stn2=rtrim(ltrim($_POST['st2']));
$stn3=rtrim(ltrim($_POST['st3']));
$stn4=rtrim(ltrim($_POST['st4']));
$stn5=rtrim(ltrim($_POST['st5']));
$stn6=rtrim(ltrim($_POST['st6']));
$stn7=rtrim(ltrim($_POST['st7']));
$stn8=rtrim(ltrim($_POST['st8']));
$stn9=rtrim(ltrim($_POST['st9']));
$stn10=rtrim(ltrim($_POST['st10']));

$stn11=rtrim(ltrim($_POST['st11']));

$stn12=rtrim(ltrim($_POST['st12']));


include_once('dbc.php');
    





$qry="INSERT INTO `subtestid`( `testname`, `subtn1`, `subtn2`, `subtn3`, `subtn4`, `subtn5`, `subtn6`, `subtn7`, `subtn8`, `subtn9`, `subtn10`) VALUES ('$tn','$stn1','$stn2','$stn3','$stn4','$stn5','$stn6','$stn7','$stn8','$stn9','$stn10','$stn11','$stn12')";
 
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
     <form action="addsubtest.php" method='post' class="form-signin" oninput="bul.value = idd.value +' '+ wingo.value" >
      
      <h1 class="h3 mb-3 font-weight-normal">Add Subtest(* only for admin)</h1>
               

                <div class="form-group">
                    <label for="ID">Test Name</label>
                    <select name="ten"class="form-control" id="exampleFormControlSelect1" name="ten">
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
                    <label for="ID"> SubTest Name 1 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st1"   required>
                </div>
<div class="form-group">
                    <label for="ID"> SubTest Name 2 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st2"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 3 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st3"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 4 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st4"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 5 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st5"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 6</label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st6"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 7 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st7"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 8 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st8"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 9 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st9"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 10 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st10"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 11 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st11"   required>
                </div>
 <div class="form-group">
                    <label for="ID"> SubTest Name 12 </label>
                    <input type="ID"  style="text-align:center" class="form-control"class="sr-only" id="ID"   name="st12"   required>
                </div>
 
               


            
                
               
               
                <button type="submit"  name="submit" class="btn btn-default">Submit</button>
            </form>
</body>
</html>
