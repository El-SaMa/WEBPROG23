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
    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid).</h1>
<?php
echo "Elsayed Mahmoud </br>";
echo "BBCA22A";  
?>  

    <h1>3.2 Write PHP code to display the following message.</h1>
<?php
echo 'Hello world! My name is "David"';
?>  


<h1>3.3 Write the PHP code in to display the current date.</h1>
<?php
echo "Current date is  ". date("d.m.Y");

?>  

<h1>3.4 $title = "PHP is interesting". Put this variable as a title marked as h1 (heading 1) in your HTML document. </h1>
<?php
echo '<h1>' . $title = "PHP is interesting" . '</h1>'; 
?>  
</body>
</html>    