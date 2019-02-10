
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
<?php
  include_once('dbc.php');
  $p_id=$_GET['update'];
  
  $query="SELECT * FROM `patiententry` WHERE `pid`='$p_id'";
  $result=mysql_query($query);
  
  
  
  $rows=mysql_fetch_assoc($result)
  ?>

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
    <th align="left" valign="middle">:&nbsp;<input  value="<?php echo$rows['name']; ?>"type="text"></th>
   <th   align="left" valign="middle">Gender/Age </th>
    <td  align="left" valign="middle">:&nbsp;<input   value="<?php echo $rows['sex'];?>/<?php echo $rows['age'];?>&nbsp;Years"type="text">&nbsp;</td>

      
    <th  align="left" valign="middle">Patient Id</th>
    <td  align="left" valign="middle">:<?php echo$rows['pid']; ?></td>


  </tr>
  <tr>
 <th align="left" valign="middle">Referred By</th>
    <td align="left" valign="middle">:&nbsp;<?php echo$rows['refby'];?></td>
   
   <th align="left" valign="middle"> Date</th>
    <td align="left" valign="middle">:&nbsp;<input value="<?php echo$rows['date'];?>" type="text"></td>
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
    
    <th width="240" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REFERENCE RANGE\UNITS
   
    </th>
    
  </tr>
              
     
      
  
  <tr style="font-size:14px;">
  <td align="left"  valign="bottom" style="text-transform:capitalize;"> </br>Serum Total Cholestrol (T.C.) <label style="font-size:10px"></label></td>
    <td align="left" valign="bottom" style='font-weight:bold'> <input  style="text-align:center" type="text" > </td>
    
    <!--<td align="left" valign="bottom"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  >  </td>-->
     
       <td align="left" valign="bottom">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;130 - 250&nbsp;mg/dl</td>
    </tr>
  

  <tr style="font-size:14px;">
  <td align="left"  valign="bottom" style="text-transform:capitalize;"> </br>Serum HDL Cholestrol (HDLC) <label style="font-size:10px"></label></td>
    <td align="left" valign="bottom" style='font-weight:bold'> <input  style="text-align:center" type="text" > </td>
    
    <!--<td align="left" valign="bottom"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  >  </td>-->
     
       <td align="left" valign="bottom">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;35 - 60&nbsp;mg/dl</td>
    </tr>
  

  <tr style="font-size:14px;">
  <td align="left"  valign="bottom" style="text-transform:capitalize;"> </br>Serum LDL Cholestrol (LDLC) <label style="font-size:10px"></label></td>
    <td align="left" valign="bottom" style='font-weight:bold'> <input  style="text-align:center" type="text" > </td>
    
    <!--<td align="left" valign="bottom"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  >  </td>-->
     
       <td align="left" valign="bottom">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;90 - 160&nbsp;mg/dl</td>
    </tr>
  

  <tr style="font-size:14px;">
  <td align="left"  valign="bottom" style="text-transform:capitalize;"> </br>Serum Triglycerices (TG)  <label style="font-size:10px"></label></td>
    <td align="left" valign="bottom" style='font-weight:bold'> <input  style="text-align:center" type="text" > </td>
    
    <!--<td align="left" valign="bottom"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  >  </td>-->
     
       <td align="left" valign="bottom">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 90 - 160&nbsp;mg/dl</td>
    </tr>
  

  <tr style="font-size:14px;">
  <td align="left"  valign="bottom" style="text-transform:capitalize;"> </br>Ratio <label style="font-size:10px"></label></td>
    <td align="left" valign="bottom" style='font-weight:bold'> <input  style="text-align:center" type="text" > </td>
    
    <!--<td align="left" valign="bottom"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  >  </td>-->
     
       <td align="left" valign="bottom">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.20 - 4.90&nbsp;mg/dl</td>
    </tr>
  

  <tr style="font-size:14px;">
  <td align="left"  valign="bottom" style="text-transform:capitalize;"> </br>Total Chol :-HDLC <label style="font-size:10px"></label></td>
    <td align="left" valign="bottom" style='font-weight:bold'> <input  style="text-align:center" type="text" > </td>
    
    <!--<td align="left" valign="bottom"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  >  </td>-->
     
       <td align="left" valign="bottom">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.50 - 3.50&nbsp;gm%</td>
    </tr>
   
    
        <tr>
         
    <th colspan="3" style="font-size:10px" align="center"  valign="middle"></th>
    </tr>




  <tr style="font-size:14px;">
  <td align="left"  valign="bottom" style="text-transform:capitalize;"> </br>LDL:-HDL<label style="font-size:10px"></label></td>
    <td align="left" valign="bottom" style='font-weight:bold'> <input  style="text-align:center" type="text" > </td>
    
    <!--<td align="left" valign="bottom"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  style="font-weight:bold"  >  </td>-->
     
       <td align="left" valign="bottom">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11.5 - 16.5&nbsp;gm%</td>
    </tr>
   
    
        <tr>
         
    <th colspan="3" style="font-size:10px" align="center"  valign="middle"></th>
    </tr>
  
     <!--    <tr>
    <th style="border:1px #333 solid; font-size:11px; text-align:justify; text-transform:none" colspan="3" align="left"  valign="middle">Note : All pathological tests have technical and biological limitations . Please correlate Clinically as well as with other investative findings. A review should be requested in case of any disparity. This report is not valid for Medicolegal  purpose.</th>
    </tr>-->
    
  
  
 </table>
 <BR>
 <BR>
 <BR>
 <span>---END OF REPORT---</span>
 </div>
</div>
</center>
</body>
</html>