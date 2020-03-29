<?php

require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");
if(!empty([$_POST])){
 
 


      $Title = !empty($_POST['Title'])? inputFilter(($_POST['Title'])): null;
      $firstName = !empty($_POST['firstName'])? inputFilter(($_POST['firstName'])): null;
      $lastName = !empty($_POST['lastName'])? inputFilter(($_POST['lastName'])): null;
      $email = !empty($_POST['email'])? inputFilter(($_POST['email'])): null;
      
      $PhoneNo = !empty($_POST['PhoneNo'])? inputFilter(($_POST['PhoneNo'])): null;
     
      $Subrub = !empty($_POST['Subrub'])? inputFilter(($_POST['Subrub'])): null;
      $City = !empty($_POST['City'])? inputFilter(($_POST['City'])): null;
    
      
      
     
      // function call
      register($Title,$firstName,$lastName,$email,$PhoneNo,$Subrub,$City);
  
      //header('location:../view/pages/index.php');
	
	
	 $redirectUrl = '../index.php';

    echo '<script type="application/javascript">alert("Successfully Register"); window.location.href = "'.$redirectUrl.'";</script>';
    }