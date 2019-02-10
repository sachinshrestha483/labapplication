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
    





$qry="INSERT INTO `patiententry`( `name`, `refby`,`age`, `sex`, `date`, `phone`, `entryby`, `examineby`, `test1`, `test2`, `test3`, `test4`, `test5`, `test6`, `test7`, `test8`) VALUES ('$pv','$rv','$av','$sv','$dv','$phv','$ebyv','$exbyv','$t1v','$t2v','$t3v','$t4v','$t5v','$t6v','$t7v','$t8v')";
 
$run=mysql_query( $qry);

if($run==true)
{
  
?>

<script>
alert("id added sucessfully");

location="addp.php";


</script>

 
<?php


}



else{
  ?>
<script>
alert("id  not added sucessfully");
location="addp.php";

</script>
 
<?php

}
}

?>


