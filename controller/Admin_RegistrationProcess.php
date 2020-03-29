<?php

require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");
if(!empty([$_POST])){
 
 


     
      $email = !empty($_POST['email'])? inputFilter(($_POST['email'])): null;
      $role = !empty($_POST['role'])? inputFilter(($_POST['role'])): null;
      
    
      
      
     
      // function call
      admin_register($email, $role);
  
      //header('location:../view/pages/index.php');
	
	
	 $redirectUrl = '../view/pages/Admin_annual_event.php';

    echo '<script type="application/javascript">alert("Successfully Register"); window.location.href = "'.$redirectUrl.'";</script>';
    }