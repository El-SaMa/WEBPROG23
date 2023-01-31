<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php page</title>
</head>
<body>
    <nav><h1>In-class Task 31.01.2023</h1></nav>
    <h1><strong>3.1</strong> Write a simple PHP script to print your information (Name and your groupid).</h1>
<?php
echo "Elsayed Mahmoud </br>";
echo "BBCA22A";  
?>  

    <h1><strong>3.2</strong> Write PHP code to display the following message.</h1>
<?php
echo 'Hello world! My name is "David"';
?>  


<h1><strong>3.3</strong> Write the PHP code in to display the current date.</h1>
<?php
echo "Current date is  ". date("d.m.Y");

?>  

<h1><strong>3.4</strong> $title = "PHP is interesting". Put this variable as a title marked as h1 (heading 1) in your HTML document. </h1>
<?php
echo '<h1>' . $title = "PHP is interesting" . '</h1>'; 
?>  
<h1>3.5 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. 
    Use HTML table into echo and include 3 columns S.n., Name, and grade. Your table should look like the one below: </h1>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;

echo "<table border=1 cellspacing=10 cellpadding=10>
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
<h1><strong>4</strong> Take a screenshot that verifies, you have set up the development environment 
and include it as an image in ex1.php. 
</h1>
<img src="" alt="PHP environment" width="500" height="600">
</body>
</html>    