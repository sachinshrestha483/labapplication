
<?php

?>



<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" ></th> 
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" >Sno</th>
      <th scope="col">DR Name </th>
      
    </tr>
  </thead>
  <?php
   //connect tov database
   include_once('dbc.php');
  $sno=0;
  
$sql="SELECT * FROM `doctr` ORDER BY sno DESC ";
$run=mysql_query($sql);
?>
  <tbody>
    <?php
 

while($rows=mysql_fetch_assoc($run)){
  
   $sno=$sno+1;
   ?>
  
  <tr>
    <tr>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="col" ></th>
      <th scope="row"><?php echo $sno;?> </th>
      <td><?php echo $rows['drname'];?></td>
      
    </tr>
  <?php }
  ?>
    
  </tbody>
</table>

</div>
