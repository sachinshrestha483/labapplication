<?php
if(isset($_POST['nam']))
  {
    $name=rtrim(ltrim($_POST['nam']));
include_once('dbc.php');
  $qry="INSERT INTO `doctr`( `drname`) VALUES ('$name')";
  $run=mysql_query( $qry);



}




?>

