<?php


      //Register function
  function register($Title,$firstName,$lastName,$email,$PhoneNo,$Subrub,$City)
  {

    global $db;
    try{

      $sql="INSERT INTO register (Title, firstName, lastName, email,PhoneNo,Subrub,City)
       VALUES (?,?,?,?,?,?,?)";
     $stmt=$db->prepare($sql);
     $result=$stmt->execute([$Title,$firstName,$lastName,$email,$PhoneNo,$Subrub,$City]);

        if($result){

            echo"Successfully Register";
   }
        else
        {
        echo" There were errors while saving the data";

        }
    }
   catch(PDOException $ex)
   {
     throw $ex;
   }
 }

    //admin_register($email);

 function  admin_register($email,$role)
  {

    global $db;
    try{

      $sql="INSERT INTO Admin (email,role)
       VALUES (?,?)";
     $stmt=$db->prepare($sql);
     $result=$stmt->execute([$email,$role]);

        if($result){

            echo"Successfully Register";
   }
        else
        {
        echo" There were errors while saving the data";

        }
    }
   catch(PDOException $ex)
   {
     throw $ex;
   }
 }


// bal shaba Register function
   function bal_sabha_register($pName,$pLastName,$email,$Address,$PhoneNo,$sName,$sLastName,$gender,$foodAllergy,
                         $EmergencyContact,$otherInfo)
  {


    global $db;
    try{

      $sql="INSERT INTO  baal_sabha_registration (pName,pLastName,email,Address,PhoneNo,sName,sLastName,gender,foodAllergy,
                         EmergencyContact,otherInfo)
       VALUES (?,?,?,?,?,?,?,?,?,?,?)";
     $stmt=$db->prepare($sql);
$result=$stmt->execute([$pName,$pLastName,$email,$Address,$PhoneNo,$sName,$sLastName,$gender,$foodAllergy,
                         $EmergencyContact,$otherInfo]);

        if($result){

            echo"Successfully Register";
   }
        else
        {
        echo" There were errors while saving the data";

        }
    }
   catch(PDOException $ex)
   {
     throw $ex;
   }
 }


///


// kisor pusti Register function
   function kisor_pusti_register($kName,$kLName,$kEmail,$kAddress,$kPhoneNo,
						 $ksName,$ksLName,$kGender,$kFoogA,$kInfo,$kEmergencyC)
  {


    global $db;
    try{

      $sql="INSERT INTO  kishor_pusti_registration(kName,kLName,kEmail,kAddress,kPhoneNo,ksName,ksLName,
	  kGender,kFoogA,kInfo,kEmergencyC)
       VALUES (?,?,?,?,?,?,?,?,?,?,?)";
     $stmt=$db->prepare($sql);
$result=$stmt->execute([$kName,$kLName,$kEmail,$kAddress,$kPhoneNo,
						 $ksName,$ksLName,$kGender,$kFoogA,$kInfo,$kEmergencyC]);

        if($result){

           echo"sucess";
   }
        else
        {
       echo " some thing wrong ";

        }
    }
   catch(PDOException $ex)
   {
     throw $ex;
   }
 }

//  rsvp_Register($VasnavName,$NoOfAdult,$NoOfKids);

// rsvp  Register function
   function rsvp_Register($EventId,$VasnavName,$VasnavLastName,$email,$PhoneNo,$manorthi,$issuer,$NoOfAdult,$NoOfKids)
  {


    global $db;
    try{

      $sql="INSERT INTO  rsvp( EventId,VasnavName,VasnavLastName,email,PhoneNo,Seva_manorthi,seva,NoOfAdult,NoOfKids)
       VALUES (?,?,?,?,?,?,?,?,?)";
     $stmt=$db->prepare($sql);
$result=$stmt->execute([$EventId,$VasnavName,$VasnavLastName,$email,$PhoneNo,$manorthi,$issuer,$NoOfAdult,$NoOfKids]);

        if($result){

           echo"sucess";
   }
        else
        {
       echo "<script type=\"text/javascript\">".
        "alert(' some thing wrong ');".
        "</script>";

        }
    }
   catch(PDOException $ex)
   {
     throw $ex;
   }
 }


// event
  function event($EventName,$EventDes,$Eventdate,$Location,$picProfile)
  {
global $db;
    try{

      $sql="INSERT INTO  event(EventName,EventDes,EventImg,Eventdate,Location)
       VALUES (?,?,?,?,?)";
$stmt=$db->prepare($sql);

$result=$stmt->execute([$EventName,$EventDes,$picProfile,$Eventdate,$Location]);

        if($result){

           echo"sucess";
   }
        else
        {
       echo "<script type=\"text/javascript\">".
        "alert(' some thing wrong ');".
        "</script>";

        }
    }
   catch(PDOException $ex)
   {
     throw $ex;
   }
 }












    ?>
