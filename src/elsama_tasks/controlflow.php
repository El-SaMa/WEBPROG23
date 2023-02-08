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
if ($color == "Red") 

    echo "The color is indeed Red";

else 

    echo "The color is not Red";


?>

<h1>Task 3</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Enter your grade total: <input type="text" name="total" required><br>
<input type="submit" name="submit">
</form>
<?php 
/*
Excellent: >80; 
Great >70 & less than 80;
Good >60 & less than 70; 
Pass >50 & less than 60
Fail <50
*/
$grade =null;
$total = null;

if (isset($_POST["submit"])){
$total = $_POST['total'];
}
if ($total >= 80)
{
    $grade = "Excellent";
    echo "Your grade is $grade";
}
else if ($total >= 70 && $total < 80)
{
    $grade = "Great";
    echo "Your grade is $grade";
}
else if ($total >= 60 && $total < 70)
{
    $grade = "Good";
    echo "Your grade is $grade";
}
else if ($total >= 50 && $total < 60)
{
    $grade = "Pass";
    echo "Your grade is $grade";
}
else
{
    $grade = "Fail";
    echo "Your grade is $grade";
}

?> 

<h1>Task 4</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Name: <input type="text" name="name" required><br>
Age: <input type="text" name="age" required><br>
<input type="submit" name="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = null;
    $age = null;
  if (isset($_POST["submit"])){
  
  $name = $_POST['name'];
  $age = $_POST['age'];
}
  if (!empty($age || $name) && age >= 18) {
    echo "Thank you $name, you are eligible to vote.";
  } else if (!empty($age || $name) && age < 18){
    echo "Thank you $name, you are not eligible to vote.";
  } 
}
?>



<h1>Task 5</h1>

<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();


echo "Your browser information: </br>".$_SERVER['HTTP_USER_AGENT'];

?>

  
<?php include "footer.php";?>