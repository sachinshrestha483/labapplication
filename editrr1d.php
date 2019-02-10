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
$testname=rtrim(ltrim($_POST['testname']));       
$note=rtrim(ltrim($_POST['note']));



if (isset($_POST['au1'])) 
{ 

$au1=rtrim(ltrim($_POST['au1']));
$arr1=rtrim(ltrim($_POST['arr1']));
$ar1max=rtrim(ltrim($_POST['ar1max']));
$ar1min=rtrim(ltrim($_POST['ar1min']));
}
else{
$au1=NULL;
$arr1=NULL;
$ar1max=NULL;
$ar1min=NULL;

}




if (isset($_POST['au2'])) 
{ 


$au2=rtrim(ltrim($_POST['au2']));
$arr2=rtrim(ltrim($_POST['arr2']));
$ar2max=rtrim(ltrim($_POST['ar2max']));
$ar2min=rtrim(ltrim($_POST['ar2min']));
}
else{
$au2=NULL;
$arr2=NULL;
$ar2max=NULL;
$ar2min=NULL;

}
 
 



if (isset($_POST['au3'])) 
{ 

$au3=rtrim(ltrim($_POST['au3']));
$arr3=rtrim(ltrim($_POST['arr3']));
$ar3max=rtrim(ltrim($_POST['ar3max']));
$ar3min=rtrim(ltrim($_POST['ar3min']));
}
else{
$au3=NULL;
$arr3=NULL;
$ar3max=NULL;
$ar3min=NULL;

}

if (isset($_POST['au4'])) 
{ 

$au4=rtrim(ltrim($_POST['au4']));
$arr4=rtrim(ltrim($_POST['arr4']));
$ar4max=rtrim(ltrim($_POST['ar4max']));
$ar4min=rtrim(ltrim($_POST['ar4min']));
}
else{
$au4=NULL;
$arr4=NULL;
$ar4max=NULL;
$ar4min=NULL;

}
if (isset($_POST['au5'])) 
{ 

$au5=rtrim(ltrim($_POST['au5']));
$arr5=rtrim(ltrim($_POST['arr5']));
$ar5max=rtrim(ltrim($_POST['ar5max']));
$ar5min=rtrim(ltrim($_POST['ar5min']));
}
else{
$au5=NULL;
$arr5=NULL;
$ar5max=NULL;
$ar5min=NULL;

}


if (isset($_POST['au6'])) 
{ 

$au6=rtrim(ltrim($_POST['au6']));
$arr6=rtrim(ltrim($_POST['arr6']));
$ar6max=rtrim(ltrim($_POST['ar6max']));
$ar6min=rtrim(ltrim($_POST['ar6min']));
}

else{
$au6=NULL;
$arr6=NULL;
$ar6max=NULL;
$ar6min=NULL;

}




if (isset($_POST['au7'])) 
{ 
$au7=rtrim(ltrim($_POST['au7']));
$arr7=rtrim(ltrim($_POST['arr7']));
$ar7max=rtrim(ltrim($_POST['ar7max']));
$ar7min=rtrim(ltrim($_POST['ar7min']));
} 

else{
$au7=NULL;
$arr7=NULL;
$ar7max=NULL;
$ar7min=NULL;

}



if (isset($_POST['au8'])) 
{ 



$au8=rtrim(ltrim($_POST['au8']));
$arr8=rtrim(ltrim($_POST['arr8']));
$ar8max=rtrim(ltrim($_POST['ar8max']));
$ar8min=rtrim(ltrim($_POST['ar8min']));
}

else{
$au8=NULL;
$arr8=NULL;
$ar8max=NULL;
$ar8min=NULL;

}

if (isset($_POST['au9'])) 
{ 


$au9=rtrim(ltrim($_POST['au9']));
$arr9=rtrim(ltrim($_POST['arr9']));
$ar9max=rtrim(ltrim($_POST['ar9max']));
$ar9min=rtrim(ltrim($_POST['ar9min']));
}

else{
$au9=NULL;
$arr9=NULL;
$ar9max=NULL;
$ar9min=NULL;

}
if (isset($_POST['au10'])) 
{ 

$au10=rtrim(ltrim($_POST['au10']));
$arr10=rtrim(ltrim($_POST['arr10']));
$ar10max=rtrim(ltrim($_POST['ar10max']));
$ar10min=rtrim(ltrim($_POST['ar10min']));
}
else{
$au10=NULL;
$arr10=NULL;
$ar10max=NULL;
$ar10min=NULL;

}
if (isset($_POST['au11'])) 
{ 

$au11=rtrim(ltrim($_POST['au11']));
$arr11=rtrim(ltrim($_POST['arr11']));
$ar11max=rtrim(ltrim($_POST['ar11max']));
$ar11min=rtrim(ltrim($_POST['ar11min']));
}
else{
$au11=NULL;
$arr11=NULL;
$ar11max=NULL;
$ar11min=NULL;

}

if (isset($_POST['au12'])) 
{ 

$au12=rtrim(ltrim($_POST['au12']));
$arr12=rtrim(ltrim($_POST['arr12']));
$ar12max=rtrim(ltrim($_POST['ar12max']));
$ar12min=rtrim(ltrim($_POST['ar12min']));
}

else{
$au12=NULL;
$arr12=NULL;
$ar12max=NULL;
$ar12min=NULL;

}
if (isset($_POST['au13'])) 
{ 

$au13=rtrim(ltrim($_POST['au13']));
$arr13=rtrim(ltrim($_POST['arr13']));
$ar13max=rtrim(ltrim($_POST['ar13max']));
$ar13min=rtrim(ltrim($_POST['ar13min']));
}
else{
$au13=NULL;
$arr13=NULL;
$ar13max=NULL;
$ar13min=NULL;

}
if (isset($_POST['au14'])) 
{ 

$au14=rtrim(ltrim($_POST['au14']));
$arr14=rtrim(ltrim($_POST['arr14']));
$ar14max=rtrim(ltrim($_POST['ar14max']));
$ar14min=rtrim(ltrim($_POST['ar14min']));
}
else{
$au14=NULL;
$arr14=NULL;
$ar14max=NULL;
$ar14min=NULL;

}


if (isset($_POST['au15'])) 
{ 

$au15=rtrim(ltrim($_POST['au15']));
$arr15=rtrim(ltrim($_POST['arr15']));
$ar15max=rtrim(ltrim($_POST['ar15max']));
$ar15min=rtrim(ltrim($_POST['ar15min']));
}

else{
$au15=NULL;
$arr15=NULL;
$ar15max=NULL;
$ar15min=NULL;

}

if (isset($_POST['au16'])) 
{ 

$au16=rtrim(ltrim($_POST['au16']));
$arr16=rtrim(ltrim($_POST['arr16']));
$ar16max=rtrim(ltrim($_POST['ar16max']));
$ar16min=rtrim(ltrim($_POST['ar16min']));
}

else{
$au16=NULL;
$arr16=NULL;
$ar16max=NULL;
$ar16min=NULL;

}
if (isset($_POST['au17'])) 
{ 

$au17=rtrim(ltrim($_POST['au17']));
$arr17=rtrim(ltrim($_POST['arr17']));
$ar17max=rtrim(ltrim($_POST['ar17max']));
$ar17min=rtrim(ltrim($_POST['ar17min']));
}
else{
$au17=NULL;
$arr17=NULL;
$ar17max=NULL;
$ar17min=NULL;

}
if (isset($_POST['au18'])) 
{ 

$au18=rtrim(ltrim($_POST['au18']));
$arr18=rtrim(ltrim($_POST['arr18']));
$ar18max=rtrim(ltrim($_POST['ar18max']));
$ar18min=rtrim(ltrim($_POST['ar18min']));
}

else{
$au18=NULL;
$arr18=NULL;
$ar18max=NULL;
$ar18min=NULL;

}
if (isset($_POST['au19'])) 
{ 

$au19=rtrim(ltrim($_POST['au19']));
$arr19=rtrim(ltrim($_POST['arr19']));
$ar19max=rtrim(ltrim($_POST['ar19max']));
$ar19min=rtrim(ltrim($_POST['ar19min']));
}
else{
$au19=NULL;
$arr19=NULL;
$ar19max=NULL;
$ar19min=NULL;

}
if (isset($_POST['au20'])) 
{ 

$au20=rtrim(ltrim($_POST['au20']));
$arr20=rtrim(ltrim($_POST['arr20']));
$ar20max=rtrim(ltrim($_POST['ar20max']));
$ar20min=rtrim(ltrim($_POST['ar20min']));
}
else{
$au20=NULL;
$arr20=NULL;
$ar20max=NULL;
$ar20min=NULL;

}





if (isset($_POST['au21'])) 
{ 


$au21=rtrim(ltrim($_POST['au21']));
$arr21=rtrim(ltrim($_POST['arr21']));
$ar21max=rtrim(ltrim($_POST['ar21max']));
$ar21min=rtrim(ltrim($_POST['ar21min']));
}
else{
$au21=NULL;
$arr21=NULL;
$ar21max=NULL;
$ar21min=NULL;

}


 include_once('dbc.php');
    
$qry="UPDATE `test` SET 
`tu1`='$au1',`trr1`='$arr1',`tr1max`='$ar1max',`tr1min`='$ar1min',

`tu2`='$au2',`trr2`='$arr2',`tr2max`='$ar2max',`tr2min`='$ar2min',
`tu3`='$au3',`trr3`='$arr3',`tr3max`='$ar3max',`tr3min`='$ar3min',
`tu4`='$au4',`trr4`='$arr4',`tr4max`='$ar4max',`tr4min`='$ar4min',   
`tu5`='$au5',`trr5`='$arr5',`tr5max`='$ar5max',`tr5min`='$ar5min',   
`tu6`='$au6',`trr6`='$arr6',`tr6max`='$ar6max',`tr6min`='$ar6min',   
`tu7`='$au7',`trr7`='$arr7',`tr7max`='$ar7max',`tr7min`='$ar7min',   
`tu8`='$au8',`trr8`='$arr8',`tr8max`='$ar8max',`tr8min`='$ar8min',   
`tu9`='$au9',`trr9`='$arr9',`tr9max`='$ar9max',`tr9min`='$ar9min',   
`tu10`='$au10',`trr10`='$arr10',`tr10max`='$ar10max',`tr10min`='$ar10min',   
`tu11`='$au11',`trr11`='$arr11',`tr11max`='$ar11max',`tr11min`='$ar11min',   
`tu12`='$au12',`trr12`='$arr12',`tr12max`='$ar12max',`tr12min`='$ar12min',   
`tu13`='$au13',`trr13`='$arr13',`tr13max`='$ar13max',`tr13min`='$ar13min',
`tu14`='$au14',`trr14`='$arr14',`tr14max`='$ar14max',`tr14min`='$ar14min',  
`tu15`='$au15',`trr15`='$arr15',`tr15max`='$ar15max',`tr15min`='$ar15min',
`tu16`='$au16',`trr16`='$arr16',`tr16max`='$ar16max',`tr16min`='$ar16min',   
`tu17`='$au17',`trr17`='$arr17',`tr17max`='$ar17max',`tr17min`='$ar17min',   
`tu18`='$au18',`trr18`='$arr18',`tr18max`='$ar18max',`tr18min`='$ar18min',   
`tu19`='$au19',`trr19`='$arr19',`tr19max`='$ar19max',`tr19min`='$ar19min',   
`tu20`='$au20',`trr20`='$arr20',`tr20max`='$ar20max',`tr20min`='$ar20min',   
`tu21`='$au21',`trr21`='$arr21',`tr21max`='$ar21max',`tr21min`='$ar21min',
`Patientkenote`='$note' WHERE `testname`='$testname'";

 
$run=mysql_query( $qry);


if($run==true)
     {
       
     ?>
     
    
      
     <?php
      header('location:editrr1.php?tn='.$testname);
      ?>
 <script>
     alert(" Done");
     
     
     

     
     
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
