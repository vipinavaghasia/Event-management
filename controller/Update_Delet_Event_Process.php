

<?php
require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");

$EventID = $_POST['EventID'];


 //updateting  Event table//
if(isset($_POST['Update']))
{
  $images=$_FILES['EventImg']['name'];
        $tmp_dir=$_FILES['EventImg']['tmp_name'];
        $imagesize=$_FILES['EventImg']['size'];
        $uplode_dir='../view/images/';
        $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $valid_extension=array('jpeg','jpg','png','pdf');
        $picProfile=rand(1000,1000000).".".$imgExt;
        move_uploaded_file($tmp_dir,$uplode_dir.$picProfile);

$result=$db->prepare
      ("UPDATE event SET EventName = '$_POST[EventName]',
EventDes = '$_POST[EventDes]',
EventImg = '$picProfile',
Eventdate = '$_POST[Eventdate]',
Location = '$_POST[Location]'
WHERE EventID = '$EventID'");

$result->execute();


     $redirectUrl = '../index.php';

      echo '<script type="application/javascript">alert("Successfully Update Event"); window.location.href = "'.$redirectUrl.'";</script>';


}



?>
