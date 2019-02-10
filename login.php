<?php
  $id=$_POST['ID'];
  $pass=$_POST['Password'];
  


//connect tov database
include_once('dbc.php');
// query for database
$result=mysql_query("select * FROM `ip` where id='".$id."'and password='".$pass."' ") or die("failed to query database".mysql_error());
$row=mysql_fetch_array($result);
if (empty($id)||empty($pass)){
    header("location:index.html");
    exit();
}
elseif ($row['id']==$id && $row['password']==$pass){
   
    session_start();
    $_SESSION['uid']=$id;
    header("location:user.php");


   
}


else{
    if ($id=="admin"  && $pass=="admin" ){
        session_start();
        $_SESSION['uad']=$id;
        header("location:admin.php");
    
    
       
    }

    elseif ($id=="chairman"  && $pass=="chairman" ){
        session_start();
        $_SESSION['uad']=$id;
        header("location:admin.php");
    
    
       
    }
    elseif ($id=="seceratry"  && $pass=="seceratry" ){
        session_start();
        $_SESSION['uad']=$id;
        header("location:admin.php");
    
    
       
    }
     else{
         echo "failed to login";
    header("location:login.html");
    echo "failed to login";
     }
}
echo $id;



?>