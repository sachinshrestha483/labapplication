
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reports</title>
<style>
body{padding:0px;
margin:0px;}
.tab1{border-collapse:collapse; text-transform:capitalize; border:0px solid #000;border-radius:5px;font-size:12px;}
input {
    border: none;
    background: transparent;
}
select {
    border: none;
    background: transparent;
    -webkit-appearance:none; /* Safari and Chrome */
    appearance:none;
}
</style>
</head>

<body>
<center>
 <div style="width:808px;border:0px solid #000; height:auto; font-family:arial; font-size:14px">
 <div style="width:710px; height:auto; margin:120px 0% 0px 0px; border-radius:5px; border:2px solid #000">
<table width="700" border="0" align="center" cellpadding="3" cellspacing="3" class="tab1">
<!-- <tr bgcolor="#085598" style="color:#FFF">
    <td colspan="4" align="center" valign="middle">Patient Information</td>
    </tr>-->
<tr>
    <th width="80" align="left" valign="middle">Patient Name</th>
    <th align="left" valign="middle">:&nbsp;<input type="text"></th>
   <th   align="left" valign="middle">Gender/Age </th>
    <td  align="left" valign="middle">:&nbsp;<input   value="&ensp;/&ensp;years"type="text">&nbsp;</td>

      
    <th  align="left" valign="middle">Patient Id</th>
    <td  align="left" valign="middle">:&nbsp;ID155</td>


  </tr>
  <tr>
 <th align="left" valign="middle">Referred By</th>
    <td align="left" valign="middle">:&nbsp;<select name="cars">
   <?php
   //connect tov database
   include_once('dbc.php');
  
  
$sql="SELECT * FROM `doctr` ";
$run=mysql_query($sql);
?>
    
    <?php
    while($rows=mysql_fetch_assoc($run)){
  ?>
                              <option><?php echo $rows['drname'];?></option>
                              
<?php
    }
    ?></select> </td>
  
   
   <th align="left" valign="middle"> Date</th>
    <td align="left" valign="middle">:&nbsp;<input type="Date"></td>
 <th align="left" valign="middle">Reg. No.</th>
    <td align="left" valign="middle">:&nbsp;157</td>
  </tr>

 
  
</table>

</div>
 <div style="width:700px;  border:0px solid #000; height:auto; margin-top:0px;">
 <table align="center" width="700" cellpadding="5" bordercolor="#a1a1a1" border="0" style="border-collapse:collapse;">
<!--<tr>
    <th style="font-family:'Courier New', Courier, monospace" colspan="3" align="center" valign="middle">Reports</th>
    </tr>-->
          <tr>
    <th height="25" colspan="5" align="center"  valign="top" style="text-transform:uppercase; font-size:20px; text-decoration:underline; font-family:'Courier New', Courier, monospace" align="center">Haematology </th>
    </tr>

 <tr style="border-top:1px dotted #333; border-bottom:1px dotted #333;font-family:'Courier New', Courier, monospace">
 <th align="left"  valign="middle">TEST DESCRIPTION</th>
    <th width="180" align="left"  valign="middle">OBSERVED VALUE</th>
    
    <th width="240" align="left" valign="middle">REFERENCE RANGE\UNITS
   
    </th>
    
  </tr>
              
  <tr style="font-size:14px;">
  <td align="left"  valign="bottom" style="text-transform:capitalize;"> </br>Heamoglobin  <label style="font-size:10px"></label></td>
    <td align="left" valign="bottom" style='font-weight:bold'> <input  style="text-align:center" type="text" > </td>
    
    <!--<td align="left" valign="bottom"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  >  </td>-->
     
       <td align="left" valign="bottom">
11.5 - 16.5&nbsp;gm%</td>
    </tr>
     
      
   
    
        <tr>
    <th colspan="3" style="font-size:10px" align="center"  valign="middle">End Of Report</th>
    </tr>
     <!--    <tr>
    <th style="border:1px #333 solid; font-size:11px; text-align:justify; text-transform:none" colspan="3" align="left"  valign="middle">Note : All pathological tests have technical and biological limitations . Please correlate Clinically as well as with other investative findings. A review should be requested in case of any disparity. This report is not valid for Medicolegal  purpose.</th>
    </tr>-->
    <tr>
    <th colspan="3" align="left"  valign="middle" style="text-transform:none; font-size:9px">This lab report was printed </th>
    </tr>
  
  
 </table>
 </div>
</div>
</center>
</body>
</html>