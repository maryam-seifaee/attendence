<?php 
$title='view Records';
require_once 'include/headers.php';
require_once ('db/conn.php');
if (!isset($_GET['id']))
{
    echo '<h1 class="text-justify text-danger">No ID </h1>';


}
else{
    $id=$_GET['id'];
    $result=$crud->getAtendeeDetails($id);
    if (!$result)
    {
        echo '<h1 class="text-justify text-danger">ID is not exist </h1>';
    }
    else{

    

?>
 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php    echo $result['firstname']; ?></h5>
    <h5 class="card-title"><?php    echo $result['lastname']; ?></h5>
    <h5 class="card-title"><?php    echo $result['date_birth']; ?></h5>
    <h5 class="card-title"><?php    echo $result['email']; ?></h5>
    <h5 class="card-title"><?php    echo $result['name']; ?></h5>


  </div>
</div>
<br>
        <a href="viewrecords.php" class="btn btn-info">Back to list</a>
        <a href="edit.php?id=<?php echo  $result['attendee_id']?>" class="btn btn-warning">Edit</a>
        <a  onclick="return confirm('Are you sure to delete thist record?')"
        href="delete.php?id=<?php echo  $result['attendee_id']?>" class="btn btn-danger">delete</a>

<?php } ?>
<?php } ?>
<br>
<br>
<?php
require_once ('include/footer.php');
?>   