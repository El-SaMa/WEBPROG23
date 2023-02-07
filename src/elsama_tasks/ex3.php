<?php include"header.php"?>

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
<button type="submit" class="btn btn-primary w-75">Submit</button>
</div>
</form>
  
<?php include "footer.php";?>