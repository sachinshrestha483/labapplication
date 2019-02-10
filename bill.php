
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
.tab2{
  border-collapse: collapse;
  border: 1px solid black;
}
.mytext {
    width: 490px;
}
.mytext1 {
    width: 79px;
}
.mytext2{
  width: 85px;
}
.mytext3{
  width:60px;
}
#k{
  border: 2px solid black;
}
#l{
  border-left: 2px solid black;
}
#m {
  border-bottom: 2px solid black;
}

</style>
</head>

<body>
<center>
  <h1 align="center">Life Line Clinic Pathology Lab</h1>
  <p align="center">Behind Lokendra Talkies,Ratlam(M.P.)</p>
  <p align="center">phone:xxxxxxxxx</p>
 <div style="width:808px;border:0px solid #000; height:auto; font-family:arial; font-size:14px">
 <div style="width:710px; height:auto; margin:120px 0% 0px 0px; border-radius:5px; border:2px solid #000">
<table width="700" border="0" align="center" cellpadding="3" cellspacing="3" class="tab1">
<!-- <tr bgcolor="#085598" style="color:#FFF">
    <td colspan="4" align="center" valign="middle">Patient Information</td>
    </tr>-->
<tr>
    <th width="80" align="left" valign="middle"> Name</th>
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

<h3 align="center"> INVOICE</h3>
<form name="addem"  >
<table style="width: 734px;" id="k">
<tbody>
<tr>
<td style="width: 83px;">&nbsp; &nbsp; &nbsp;&nbsp; Sno</td>
<td style="width: 571px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  INVESTIGATION</td>
<td style="width: 79px;">CHARGE</td>
</tr>
<tr>
<td style="width: 83px;"><input style="text-align:center"  class="mytext2"type=""  name=""></td>
<td style="width: 571px;"><input class="mytext" type="" style="text-align:center"name=""></td>
<td style="width: 79px;"><input type="" class="mytext1" onkeyup="calculateTotal()"name="t1" style="text-align:center"name=""></td>
</tr>

<tr>
<td style="width: 83px;"><input style="text-align:center"  class="mytext2"type=""  name=""></td>
<td style="width: 571px;"><input class="mytext" type="" style="text-align:center"name=""></td>
<td style="width: 79px;"><input type="" name="t2"class="mytext1" onkeyup="calculateTotal()"style="text-align:center"name=""></td>
</tr>

<tr>
<td style="width: 83px;"><input style="text-align:center"  class="mytext2"type=""  name=""></td>
<td style="width: 571px;"><input class="mytext" type="" style="text-align:center"name=""></td>
<td style="width: 79px;"><input type="" class="mytext1"name="t3" onkeyup="calculateTotal()" style="text-align:center"name=""></td>
</tr>

<tr>
<td style="width: 83px;"><input style="text-align:center"  class="mytext2"type=""  name=""></td>
<td style="width: 571px;"><input class="mytext" type="" style="text-align:center"name=""></td>
<td style="width: 79px;"><input type="" class="mytext1" name="t4" onkeyup="calculateTotal()" style="text-align:center"name=""></td>
</tr>

<tr>
<td style="width: 83px;"><input style="text-align:center"  class="mytext2"type=""  name=""></td>
<td style="width: 571px;"><input class="mytext" type="" style="text-align:center"name=""></td>
<td style="width: 79px;"><input type="" class="mytext1" name="t5"  onkeyup="calculateTotal()" style="text-align:center"name=""></td>
</tr>

<tr>
<td style="width: 83px;"><input style="text-align:center"  class="mytext2"type=""  name=""></td>
<td style="width: 571px;"><input class="mytext" type="" style="text-align:center"name=""></td>
<td style="width: 79px;"><input type="" class="mytext1" onkeyup="calculateTotal()" name="t6"style="text-align:center"name=""></td>
</tr>

<tr>
<td style="width: 83px;"><input style="text-align:center"  class="mytext2"type=""  name=""></td>
<td style="width: 571px;"><input class="mytext" type="" style="text-align:center"name=""></td>
<td style="width: 79px;"><input type="" class="mytext1"  onkeyup="calculateTotal()" name="t7"style="text-align:center"name=""></td>
</tr>

<tr>
<td style="width: 83px;"><input style="text-align:center"  class="mytext2"type=""  name=""></td>
<td style="width: 571px;"><input class="mytext" type="" style="text-align:center"name=""></td>
<td style="width: 79px;"><input type="" class="mytext1" onkeyup="calculateTotal()" name="t8"style="text-align:center"name=""></td>
</tr>



</tbody>
</table>

<table style="width: 235px; height: 5px;" id="l" align="RIGHT" >
<tbody>
<tr style="height: 23px;">
<td style="width: 109px; height: 23px;"> TOTAL</td>
<td style="width: 95px; height: 23px;"><input  class="mytext3"onkeyup="calculateTotal()" style="text-align:center"  id="tot" type="" name=""></td>
</tr>
<tr style="height: 23px;">
<td style="width: 109px; height: 23px;">DISCOUNT</td>
<td style="width: 95px; height: 23px;" ><input class="mytext3"onkeyup="calculateTotal()"id="disc" style="text-align:center"  type="" name=""></td>
</tr>
<tr style="height: 21px;">
<td style="width: 109px; height: 2px;">G.TOTAL</td>
<td style="width: 95px; height: 2px;"><input class="mytext3" id="gtot"style="text-align:center" type="" name=""></td>
</tr>
</tbody>
</table>


</form>

<br>
<br>
<br>
<br>
<br>
<table style="width: 734px;"  id="m">
<tbody>
<tr>
<td style="width: 83px;"></td>
<td style="width: 571px;"></td>
<td style="width: 79px;"></td>
</tr>
</tbody>
</table>
<span>*Discount in Rupees</span>


</center>

<script type="text/javascript">
  var t1 = document.addem.t1.value;
  var t2 = document.addem.t2.value;
  var t3 = document.addem.t3.value;
  var t4 = document.addem.t4.value;
  var t5 = document.addem.t5.value;
  var t6 = document.addem.t6.value;
  var t7 = document.addem.t7.value;
  var t8 = document.addem.t8.value;
  
    function calculateTotal() {
        
        
        //totalR = +document.addem.tb1.value +  +4;
        //totalR = eval( document.addem.tb1.value*0.5);
        //totalR = document.addem.tb1.value  -8;
        totalR = eval(+document.addem.t1.value+ +document.addem.t2.value+ +document.addem.t3.value+ +document.addem.t4.value+ +document.addem.t5.value+ +document.addem.t6.value+ +document.addem.t7.value+ +document.addem.t8.value);

        document.getElementById('tot').value = totalR;
         
        document.getElementById('gtot').value = totalR-document.getElementById('disc').value ;
    }

</script>

</body>

</html>