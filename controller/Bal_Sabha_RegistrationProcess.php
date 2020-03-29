<?php

require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");
if(!empty([$_POST])){



$defaultvalue="none";
      $pName = !empty($_POST['pName'])? inputFilter(($_POST['pName'])): null;

      $pLastName = !empty($_POST['pLastName'])? inputFilter(($_POST['pLastName'])): null;
      $email = !empty($_POST['email'])? inputFilter(($_POST['email'])): null;

    $Address = !empty($_POST['Address'])? inputFilter(($_POST['Address'])): null;
      $PhoneNo = !empty($_POST['PhoneNo'])? inputFilter(($_POST['PhoneNo'])): null;
   $sName = !empty($_POST['sName'])? inputFilter(($_POST['sName'])): null;

      $sLastName = !empty($_POST['sLastName'])? inputFilter(($_POST['sLastName'])): null;
      $gender = !empty($_POST['gender'])? inputFilter(($_POST['gender'])): null;

    $foodAllergy = !empty($_POST['foodAllergy'])? inputFilter(($_POST['foodAllergy'])): $defaultvalue;
    $EmergencyContact = !empty($_POST['EmergencyContact'])? inputFilter(($_POST['EmergencyContact'])): null;
    $otherInfo  = !empty($_POST['otherInfo'])? inputFilter(($_POST['otherInfo'])): $defaultvalue;




      // function call
      bal_sabha_register($pName,$pLastName,$email,$Address,$PhoneNo,$sName,$sLastName,$gender,$foodAllergy,
                         $EmergencyContact,$otherInfo);
  


      $redirectUrl = '../index.php';

      echo '<script type="application/javascript">alert("Successfully Bal Sabha Register"); window.location.href = "'.$redirectUrl.'";</script>';





    }
