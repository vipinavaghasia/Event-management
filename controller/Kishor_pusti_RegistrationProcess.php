<?php

require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");
if(!empty([$_POST])){
    $defaultvalue="none";

	$kName = !empty($_POST['kName'])? inputFilter(($_POST['kName'])): null;
     $kLName = !empty($_POST['kLName'])? inputFilter(($_POST['kLName'])): null;
	 $kEmail = !empty($_POST['kEmail'])? inputFilter(($_POST['kEmail'])): null;
	 $kAddress = !empty($_POST['kAddress'])? inputFilter(($_POST['kAddress'])): null;
	 $kPhoneNo = !empty($_POST['kPhoneNo'])? inputFilter(($_POST['kPhoneNo'])): null;
	 $ksName = !empty($_POST['ksName'])? inputFilter(($_POST['ksName'])): null;
	 $ksLName = !empty($_POST['ksLName'])? inputFilter(($_POST['ksLName'])): null;
	$kGender  = !empty($_POST['kGender'])? inputFilter(($_POST['kGender'])): null;

	 $kFoogA = !empty($_POST['kFoogA'])? inputFilter(($_POST['kFoogA'])):$defaultvalue;
	 $kInfo = !empty($_POST['kInfo'])? inputFilter(($_POST['kInfo'])):$defaultvalue;
$kEmergencyC = !empty($_POST['kEmergencyC'])?inputFilter(($_POST['kEmergencyC'])):null;

// function call
      kisor_pusti_register($kName,$kLName,$kEmail,$kAddress,$kPhoneNo,
						 $ksName,$ksLName,$kGender,$kFoogA,$kInfo,$kEmergencyC);
             $redirectUrl = '../index.php';

             echo '<script type="application/javascript">alert("Successfully Kishor Pusti Register"); window.location.href = "'.$redirectUrl.'";</script>';
    }
