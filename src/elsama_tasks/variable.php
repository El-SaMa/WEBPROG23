<?php include"header.php"?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  if (empty($fname || $lname)) {
    echo "Required field is empty";
  } else {
    echo "<Strong> Hello ".$fname." ".$lname.", welcome to my humble site.</Strong>";
  }
}
?>

  
<?php include "footer.php";?>