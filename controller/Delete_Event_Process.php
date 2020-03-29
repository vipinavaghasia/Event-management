

<?php
require("../model/dbconnection.php");
require("../model/dbfunction.php");
require("../controller/inputFilter.php");

$EventID = $_POST['EventID'];


//daleteting  event table record //
if(isset($_POST['Delete']))
{

  $result=$db->prepare("Delete from event
  where EventID=$EventID");
  $result->execute();
// $rows=$result->fetch();
//$_SESSION["message"]="$BookID.book deleted";

  $redirectUrl = '../index.php';

   echo '<script type="application/javascript">alert("Successfully Delete Event"); window.location.href = "'.$redirectUrl.'";</script>';




}
?>
