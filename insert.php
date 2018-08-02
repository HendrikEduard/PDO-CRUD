<?php
// include database connection file
require_once 'db00.php';
if(isset($_POST['insert'])) {
// Posted Values  
$fname = in($_POST['fname']);
$lname = in($_POST['lname']);
$email = in($_POST['email']);
$phone = in($_POST['phone']);
$country = in($_POST['country']);

// Query for Insertion
$sql="INSERT INTO contacts(fname, lname, email, phone, country) VALUES(?, ?, ?, ?, ?)";
 
$stmt = $db->prepare($sql);
$stmt->execute([$fname, $lname, $email, $phone, $country]);

// Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
$lastInsertId = $db->lastInsertId();
if($lastInsertId) {
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index.php'</script>"; 
} else {
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index.php'</script>"; 
} } 
require_once 'layouts/header.php';
?>

<div class="row">
  <div class="col-md-12">
    <h3>PDO CRUD -=-o-=- Insert Record</h3>
    <hr />
  </div>
</div>

<form name="insertrecord" method="post">
  <div class="row"><div class="col-md-2"></div>
    <div class="col-md-4">First Name
      <input type="text" name="fname" class="form-control" required>
    </div>
    <div class="col-md-4">Last Name
      <input type="text" name="lname" class="form-control" required>
    </div>
  </div>
  <div class="row"><div class="col-md-2"></div>
    <div class="col-md-4">Email
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="col-md-4">Phone
      <input type="text" name="phone" class="form-control" maxlength="22" required>
    </div>
  </div>
  <div class="row"><div class="col-md-2"></div>
    <div class="col-md-8">Country
      <input type="text" name="country" class="form-control" required>
    </div>
  </div>
  <div class="row" style="margin-top:1%"><div class="col-md-2"></div>
    <div class="col-md-8">
      <input type="submit" name="insert" value="Insert" class="btn btn-primary">
    </div>
  </div>
</form>
</div>

<?php require_once 'layouts/footer.php';