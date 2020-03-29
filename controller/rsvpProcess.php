<?php

require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");
if(!empty([$_POST])){



 $EventId = !empty($_POST['EventId'])? inputFilter(($_POST['EventId'])): null;
      $VasnavName = !empty($_POST['VasnavName'])? inputFilter(($_POST['VasnavName'])): null;
      $VasnavLastName = !empty($_POST['VasnavLastName'])? inputFilter(($_POST['VasnavLastName'])): null;
      $email = !empty($_POST['email'])? inputFilter(($_POST['email'])): null;
      $PhoneNo = !empty($_POST['PhoneNo'])? inputFilter(($_POST['PhoneNo'])): null;
      $manorthi= !empty($_POST['manorthi'])? inputFilter(($_POST['manorthi'])): null;
      $NoOfAdult = !empty($_POST['NoOfAdult'])? inputFilter(($_POST['NoOfAdult'])): null;
      $NoOfKids = !empty($_POST['NoOfKids'])? inputFilter(($_POST['NoOfKids'])): null;
      $issuer = !empty($_POST['issuer'])? inputFilter(($_POST['issuer'])): null;

     // SQL statements check Seva is not already in the database//
  $query=$db->prepare("select VasnavName,
seva from rsvp where seva=:seva and EventId=:eid");

  $query->bindvalue(":seva",$issuer);
$query->bindvalue(":eid",$EventId);
  $query->execute();
  $rows=$query->fetch();
  //if($query->rowcount()>0)//if row  found
  //{

      //$vname = $rows['VasnavName'];

      //$redirectUrl = '../index.php';

  //  echo '<script type="application/javascript">alert("This Seva Already taken by'.$vname.'"); window.location.href = "'.$redirectUrl.'";</script>';
    //}
    // function call
    rsvp_Register($EventId,$VasnavName,$VasnavLastName,$email,$PhoneNo,$manorthi,$issuer,$NoOfAdult,$NoOfKids);

      //header('location:../view/pages/index.php');


    $redirectUrl = '../index.php';

    echo '<script type="application/javascript">alert("Successfully RSVP Register"); window.location.href = "'.$redirectUrl.'";</script>';
    }
