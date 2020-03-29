<?php
session_start();
require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");

if(!empty([$_POST]))
{
  $email=!empty($_POST['email'])? inputFilter(($_POST['email'])):NULL;

 
    
    
    
    
    
    
    
    
    
  //checking email for admin
    //checking password and username
  try{
    $stmt=$db->prepare("select * from Admin where email=:e");
    $stmt->bindParam(':e',$email);
    $stmt->execute();                          
    $rows =$stmt->fetch();
    if($stmt->rowcount()>0)//if row  found
  {
//assign session veriable
      $_SESSION["email"]=$email;
     $_SESSION["role"]=$rows["role"];
     $_SESSION["success"]="welcom to admin penal";
//redirect page to admin penal
      header('location:../view/pages/Admin_annual_event.php');
    }
    else{
      //password or username not match go back to login page
      $_SESSION["error"]="incorrect email";
      header('location:../view/pages/login.php');
    }
  }
  catch(PDOException $ex)
  {
    $ex->getMessage();
    die();
  }
}

?>
