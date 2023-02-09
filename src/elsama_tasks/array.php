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

<hr>
<h1>Task 2</h1>
<?php

$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$colength1 = count($courses1);

for ($x = 0; $x < $colength1; $x++) {

    echo "<ul>";
    echo "<li>$courses1[$x]</li>";
    echo "</ul>";
}

echo "before unset array count was<br>";
echo count($courses1) . "<br>";
echo "after unset function to remove an array item <br>";
unset($courses1[1]);
echo count($courses1);
?>

<hr>
<h1>Task 3</h1>
<?php
$courses3 = array("A" => "PHP", "B" => "HTML", "C" => "JavaScript", "D" => "CMS", "E" => "Project");
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

<hr>
<h1>Task 4 <h1>

        <?php

        $courses4 = array("php" => "1", "html" => "2", "javascript" => "3", "cms" => "4", "project" => "5");
        print_r(array_change_key_case($courses4, CASE_UPPER));

        ?>

<hr>
        <h1>Task 5 <h1>

<?php

                $favcolors = array(
                    "Blue" => "#6495ED",
                    "Cardinal" => "#DE3163",
                    "Pastel-Green" => "#9FE2BF",
                    "Turquoise" => "#40E0D0",
                    "Pastel-Violet" => "#CCCCFF"
                );
                foreach ($favcolors as $key => $val) {
                    echo " $key: &nbsp;&nbsp;&nbsp; ($val)<br>";
                }
?>
<hr>
<h1>Task 6 <h1>
    <?php 
    $temps = array(78, 60, 62, 68, 71, 68, 73,85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    //sort ascending
    sort($temps); 

   //print average temp
   $average = array_sum($temps) / count($temps);
    echo " <br>Average temperature : ";
    echo $average;

   //print lowest 5 temps
    echo " <br>List of five lowest temperatures : ";
    for ($i=0; $i< 5; $i++)
    { 
    echo $temps[$i].", ";
    }

    //print highest 5 temps
    $temparraylength = count($temps);
    echo "<br>List of five highest temperatures : ";
    for ($i=($temparraylength-5); $i< ($temparraylength); $i++)
    {
    echo $temps[$i].", ";
    }
    
    ?>



                <?php include "footer.php"; ?>