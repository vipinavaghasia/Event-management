<?php
//select data from Author and book table and display
$result = $db->prepare("SELECT * from event ");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
  
  echo"
  <div class='grid-container'>

  <p><img src=".$row['coverImagePath']." alt='coverImagePath'width='120' height='150' class='rotate'</p>
  <p>Author Name:".$row['Name']."</P>
  <p>Year of Publication:".$row['YearofPublication']."</P>
  <p> BookTitle:".$row['BookTitle']."</P>
  <p>copied sold:".$row['MillionsSold']."</P>
  <p><a href='UpdateAndDeleteForm.php?bid=$book&aid=$author'>Update</a></p>
  <p><a href='UpdateAndDeleteForm.php?bid=$book&aid=$author'>Delete</a></p>
  </div>";
}
?>
