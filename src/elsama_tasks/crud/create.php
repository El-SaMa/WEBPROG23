<?php

$title = "a simple Crude application";
include "../header.php"
?>

<form method="POST" action="connect.php">
    <input type="text" name="fname" placeholder="First name" required><br>
    <input type="text" name="lname" placeholder="Last name" required><br>
    <input type="text" name="city" placeholder="City" required><br>
    <select name="groupid" id="groupid">
        <option value="BBCAP21">BBCAP21</option>
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP23">BBCAP23</option>
        <option value="other">Other..</option>
    </select><br>
    <input type="submit" value="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    include "connect.php";
    $sql = "insert into students (fname,lname,city,groupid)
    values('$fname', '$lname','$city', '$groupid')";

    //submition result
    if ($con ->query($sql) === true){
        echo "User added successfuly";
    }else {
        echo "Oops..Something went wrong.". $con->error;
    }
}





?>


<?php include '../footer.php' ?>