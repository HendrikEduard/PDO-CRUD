<?php
// include database connection file
require_once 'db00.php';
if(isset($_POST['update'])) {
// Get the userid
$id = intval($_GET['id']);
// Posted Values  
$fname = in($_POST['fname']);
$lname = in($_POST['lname']);
$email = in($_POST['email']);
$phone = in($_POST['phone']);
$country = in($_POST['country']);

// Query for Query for Update
$sql = "UPDATE contacts SET fname=?, lname=?, email=?, phone=?, country=?  WHERE id=?";
$stmt = $db->prepare($sql);
$stmt->execute([$fname, $lname, $email, $phone, $country, $id]);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>"; 
} 
require_once 'layouts/header.php';
?>

<div class="row">
  <div class="col-md-12">
  <h3>PDO CRUD -=-o-=- Update Record</h3>
  <hr />
  </div>
</div>

<?php 
// Get the userid
$id = intval($_GET['id']);
$stmt = $db->prepare("SELECT * FROM contacts WHERE id=?");
$stmt->execute([$id]); 
$contact = $stmt->fetch();

if($stmt->rowCount() == 1) { ?>

  <form name="insert" method="post">
    <div class="row"><div class="col-md-2"></div>
      <div class="col-md-4">First Name
        <input type="text" name="fname" value="<?= out($contact->fname);?>" class="form-control" required>
        </div>
      <div class="col-md-4">Last Name
        <input type="text" name="lname" value="<?= out($contact->lname);?>" class="form-control" required>
      </div>
    </div>

    <div class="row"><div class="col-md-2"></div>
      <div class="col-md-4">Email
        <input type="email" name="email" value="<?= out($contact->email);?>" class="form-control" required>
      </div>
      <div class="col-md-4">Phone
        <input type="text" name="phone" value="<?= out($contact->phone);?>" class="form-control" maxlength="22" required>
      </div>
    </div>

    <div class="row"><div class="col-md-2"></div>
      <div class="col-md-8">Country
        <input type="text" name="country" value="<?= out($contact->country);?>" class="form-control" required>
      </div>
    </div>

    <div class="row mt"><div class="col-md-2"></div>
      <div class="col-md-8">
        <input type="submit" name="update" value="Update" class="btn btn-primary">
      </div>
    </div>
  </form>
<?php } else {
  echo "There are no matching records";
  header('Location: index.php');
  exit();
} ?>
	</div>

<?php require_once 'layouts/footer.php';