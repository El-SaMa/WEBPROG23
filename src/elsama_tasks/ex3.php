<?php include"header.php"?>
<h1> Task 1-2 
</h1><br>
<form method="post" action="variable.php">
    <div class=row>
  <div class="mb-3 col">
    <label for="fname" class="form-label" required>First name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
  </div>
  <div class="mb-3 col">
    <label for="lname" class="form-label" required>Last name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
  </div>
</div>
<div class="d-flex justify-content-center mt-3">
<button type="submit" class="btn btn-primary w-100">Submit</button>
</div>
</form>

<h1>Task 3 </h1>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;

echo "<table border=1 cellspacing=10 cellpadding=10>
  <tr>
  <th>S.N</th>
  <th>Name</th>
  <th>Grade</th>
  </tr>
  <td>1</td>
  <td>Pekka Pancakey</td>
  <td>$g1</td>
</tr>
<tr>
  <td>2</td>
  <td>Johanna Stronk</td>
  <td>$g2</td>
</tr>
<tr>
  <td>3</td>
  <td>John Travolta</td>
  <td>$g3</td>
</tr>
</table>";
?> 
<h1>Task 4</h1>
<?php 
$strvar1 = "text1";
$strvar2 = "text2";
echo "The total length of the the strings ".$strvar1." and ".$strvar2." is "."<strong>".strlen($strvar1 . $strvar2)."</strong>";
?>

<h1>Task 5</h1>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

echo "The total sum of numbers: 298, 234, 46 is <strong>" . $num1 + $num2 + $num3."</strong>";

?>


<h1>Task 6</h1>
<?php 
echo "Your browser information: </br>".$_SERVER['HTTP_USER_AGENT'];

?>

<h1>Task 7</h1>
<a href="#last-modified">Footer Last Modified</a>
  
<?php include "footer.php";?>