<?php
// include database connection file
require_once 'db00.php';

// Code for record deletion
if(isset($_REQUEST['del'])) {
//Get row id
$id=intval($_GET['del']);

//Query for Soft Delete
$sql = "UPDATE contacts SET is_deleted=? WHERE id=?";
$stmt= $db->prepare($sql);
$stmt->execute([1, $id]);

// Mesage after update
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>"; 
} 
require_once 'layouts/header.php';?>

<div class="row">
<div class="col-md-12">
<h3>PDO CRUD -=-o-=- All Record</h3><hr />
<a href="insert.php"><button class="btn btn-primary"> Insert Record</button></a>
<div class="table-responsive">                
  <table class="table table-bordred table-striped">                 
    <thead>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Date Created</th>
    <th>Edit</th>
    <th>Delete</th>
    </thead>
    <tbody>

    <?php 
    $data = $db->query("SELECT * FROM contacts where is_deleted = 0")->fetchAll();
    foreach ($data as $contact)  { ?>  

      <tr>
        <td><?= out($contact->fname) ?></td>
        <td><?= out($contact->lname) ?></td>
        <td><?= out($contact->email) ?></td>
        <td><?= out($contact->phone) ?></td>
        <td><?= out($contact->country) ?></td>
        <td><?= out($contact->created_on) ?></td>

        <td><a href="update.php?id=<?= out($contact->id);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>

        <td><a href="index.php?del=<?= out($contact->id);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>
<?php require_once 'layouts/footer.php';