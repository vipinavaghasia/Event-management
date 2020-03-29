<?php
require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");






 if(!empty([$_POST]))
    {
     
     $EventName = !empty($_POST['EventName'])? inputFilter(($_POST['EventName'])): null;
     $EventDes  = !empty($_POST['EventDes'])? inputFilter(($_POST['EventDes'])): null;
   
     $Eventdate = !empty($_POST['Eventdate'])? inputFilter(($_POST['Eventdate'])): null;
     
$Location= !empty($_POST['Location'])? inputFilter(($_POST['Location'])): null;
    
        
        $images=$_FILES['EventImg']['name'];
        $tmp_dir=$_FILES['EventImg']['tmp_name'];
        $imagesize=$_FILES['EventImg']['size']; 
        $uplode_dir='../view/images/';
        $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $valid_extension=array('jpeg','jpg','png','pdf');
        $picProfile=rand(1000,1000000).".".$imgExt;
        move_uploaded_file($tmp_dir,$uplode_dir.$picProfile);
     
     // call function
     event($EventName,$EventDes,$Eventdate,$Location,$picProfile);
    echo"Successfully event";
      header('location:../view/pages/Admin_annual_event.php');
    }
    
        

?>