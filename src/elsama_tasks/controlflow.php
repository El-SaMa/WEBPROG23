<?php include"header.php"?>

<h1>Task 1</h1>
<?php 
$month_num = date('m');
$month = date('F');
if($month_num == 8){
   echo "It's August, so it's still holiday.";
} else {
   echo "Not August, this is $month, so I don't have any holidays";
}
?>

<h1>Task 2</h1>
<?php 
$color="Red";
?>

  
<?php include "footer.php";?>