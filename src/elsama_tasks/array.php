<?php include "header.php" ?>

<h1>Task 1</h1>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");

$colength = count($courses);

for ($x = 0; $x < $colength; $x++) {
    echo "<ul>";
    echo "<li>$courses[$x]</li>";
    echo "</ul>";
}

?>

<h1>Task 2</h1>
<?php

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
$colength1 = count($courses1);

for ($x = 0; $x < $colength1; $x++) {
    
    echo "<ul>";
    echo "<li>$courses1[$x]</li>";
    echo "</ul>";
}

echo "before unset array count was<br>";
echo count($courses1)."<br>";
echo "after unset function to remove an array item <br>";
unset($courses1[1]);
echo count($courses1);
?>


<h1>Task 3</h1>
<?php
$courses3=array("A" => "PHP", "B" => "HTML", "C" => "JavaScript", "D" => "CMS", "E" => "Project");
asort($courses3);
echo " <br><h3> a) ascending order sort by value:</h3> <br> ";

foreach ($courses3 as $key => $val) {
    echo " $val<br>";
}
echo "<br>";

echo "<br><h3>b) ascending order sort by Key:</h3>  <br> ";
ksort($courses3);
foreach ($courses3 as $key => $val) {
    echo " $val<br>";
}


echo "<br><h3> c) descending order sort by Value: </h3> <br> ";
rsort($courses3);
foreach ($courses3 as $key => $val) {
    echo " $val<br>";
}

echo "<br><h3> d) descending order sort by Key: </h3> <br> ";
krsort($courses3);
foreach ($courses3 as $key => $val) {
    echo " $val<br>";
}

?>
<h1>Task 4 <h1>

<?php

$courses4=array("php", "html", "javascript", "cms", "project");
print_r(array_change_key_case($courses4,CASE_UPPER));



?>

<?php include "footer.php"; ?>