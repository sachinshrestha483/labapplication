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

  include_once('dbc.php');
  $tn=$_GET['tn'];





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
    



<form action="editrr1d.php" method="post">

<input type="hidden" id="custId" name="testname" value="<?php echo$tn;?>">

<div class="container">
	<div class="table-responsive">
		<br>
		<br>
		<div align="center">  
			<h4 height="25" colspan="5" align="center"  valign="top" style="text-transform:uppercase; font-size:25px; text-decoration:underline; font-family:'Courier New', Courier, monospace" align="center"> <?php echo $tn;?></h4>
			<a href="editrr.php" class="btn btn-primary"><---</a>

    
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Test Description</th>
      <th scope="col">Units</th>
      <th scope="col">Refrence Range</th>
      <th scope="col">Max Value</th>
      <th scope="col">Min Value</th>
    
    </tr>
  </thead>
  <tbody>
   
    <?php
  include_once('dbc.php');
  $qry1="SELECT * FROM `test` WHERE `testname`='$tn'";
   $run1=mysql_query($qry1);

  $rows1= mysql_fetch_assoc($run1);
  
?>














<?php
          if( $rows1['tn1']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn1'];?> </td>
    <td > <input  value="<?php echo $rows1['tu1'];?>"name="au1"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr1'];?>"name="arr1"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr1max'];?>"name="ar1max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr1min'];?>"name="ar1min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>















<?php
          if( $rows1['tn2']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn2'];?> </td>
    <td > <input  value="<?php echo $rows1['tu2'];?>"name="au2"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr2'];?>"name="arr2"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr2max'];?>"name="ar2max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr2min'];?>"name="ar2min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn3']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn3'];?> </td>
    <td > <input  value="<?php echo $rows1['tu3'];?>"name="au3" style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr3'];?>"name="arr3" style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr3max'];?>"name="ar3max" style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr3min'];?>"name="ar3min" style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn4']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn4'];?> </td>
    <td > <input  value="<?php echo $rows1['tu4'];?>"name="au4"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr4'];?>"name="arr4"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr4max'];?>"name="ar4max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr4min'];?>"name="ar4min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn5']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn5'];?> </td>
    <td > <input  value="<?php echo $rows1['tu5'];?>"name="au5"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr5'];?>"name="arr5"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr5max'];?>"name="ar5max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr5min'];?>"name="ar5min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn6']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn6'];?> </td>
    <td > <input  value="<?php echo $rows1['tu6'];?>"name="au6"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr6'];?>"name="arr6"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr6max'];?>"name="ar6max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr6min'];?>"name="ar6min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn7']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn7'];?> </td>
    <td > <input  value="<?php echo $rows1['tu7'];?>"name="au7"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr7'];?>"name="arr7"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr7max'];?>"name="ar7max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr7min'];?>"name="ar7min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn8']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn8'];?> </td>
    <td > <input  value="<?php echo $rows1['tu8'];?>"name="au8"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr8'];?>"name="arr8"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr8max'];?>"name="ar8max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr8min'];?>"name="ar8min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn9']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn9'];?> </td>
    <td > <input  value="<?php echo $rows1['tu9'];?>"name="au9"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr9'];?>"name="arr9"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr9max'];?>"name="ar9max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr9min'];?>"name="ar9min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn10']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn10'];?> </td>
    <td > <input  value="<?php echo $rows1['tu10'];?>"name="au10"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr10'];?>"name="arr10"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr10max'];?>"name="ar10max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr10min'];?>"name="ar10min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn11']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn11'];?> </td>
    <td > <input  value="<?php echo $rows1['tu11'];?>"name="au11"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr11'];?>"name="arr11"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr11max'];?>"name="ar11max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr11min'];?>"name="ar11min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn12']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn12'];?> </td>
    <td > <input  value="<?php echo $rows1['tu12'];?>"name="au12"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr12'];?>"name="arr12"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr12max'];?>"name="ar12max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr12min'];?>"name="ar12min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn13']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn13'];?> </td>
    <td > <input  value="<?php echo $rows1['tu13'];?>"name="au13"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr13'];?>"name="arr13"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr13max'];?>"name="ar13max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr13min'];?>"name="ar13min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn14']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn14'];?> </td>
    <td > <input  value="<?php echo $rows1['tu14'];?>"name="au14"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr14'];?>"name="arr14"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr14max'];?>"name="ar14max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr14min'];?>"name="ar14min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn15']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn15'];?> </td>
    <td > <input  value="<?php echo $rows1['tu15'];?>"name="au15"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr15'];?>"name="arr15"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr15max'];?>"name="ar15max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr15min'];?>"name="ar15min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn16']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn16'];?> </td>
    <td > <input  value="<?php echo $rows1['tu16'];?>"name="au16"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr16'];?>"name="arr16"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr16max'];?>"name="ar16max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr16min'];?>"name="ar16min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn17']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn17'];?> </td>
    <td > <input  value="<?php echo $rows1['tu17'];?>"name="au17"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr17'];?>"name="arr17"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr17max'];?>"name="ar17max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr17min'];?>"name="ar17min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn18']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn18'];?> </td>
    <td > <input  value="<?php echo $rows1['tu18'];?>"name="au18"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr18'];?>"name="arr18"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr18max'];?>"name="ar18max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr18min'];?>"name="ar18min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn19']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn19'];?> </td>
    <td > <input  value="<?php echo $rows1['tu19'];?>"name="au19"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr19'];?>"name="arr19"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr19max'];?>"name="ar19max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr19min'];?>"name="ar19min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn20']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn20'];?> </td>
    <td > <input  value="<?php echo $rows1['tu20'];?>"name="au20"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr20'];?>"name="arr20"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr20max'];?>"name="ar20max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr20min'];?>"name="ar20min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>














<?php
          if( $rows1['tn21']== NULL){
    
}
else{
    ?>

 <tr style="font-size:14px;">
  <td  style="text-transform:capitalize;">  <?php echo $rows1['tn21'];?> </td>
    <td > <input  value="<?php echo $rows1['tu21'];?>"name="au21"style="text-align:center" value=""type="text" > </td>
    
    <td > <input  value="<?php echo $rows1['trr21'];?>"name="arr21"style="text-align:center" value=""type="text" > </td>
      
<td > <input  value="<?php echo $rows1['tr21max'];?>"name="ar21max"style="text-align:center" value=""type="text" > </td>

<td > <input  value="<?php echo $rows1['tr21min'];?>"name="ar21min"style="text-align:center" value=""type="text" > </td>

    
</tr>
  

    <?php
}?>


 </tbody>
</table>


<div class="form-group">
	<div align="center">
  <label align="center" >Note</label>
</div>
  
  <input value="<?php echo $rows1['Patientkenote'];?>" type="text" style="text-align:center" class="form-control" name="note">
<br>
<div align="center">
<button class="btn btn-primary" name="submit" type="submit" href="#"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;</button>
</div>

</form>
</div>
<br><br><br><br><br><br>
 </div>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>