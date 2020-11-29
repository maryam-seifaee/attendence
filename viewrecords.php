<?php 
$title='view Records';
require_once 'include/headers.php';
require_once ('db/conn.php');
$results=$crud->getAtendees();

?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Date Of Brith</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Spitiality</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   
      <?php  while($r=$results->fetch(PDO::FETCH_ASSOC) ){?>
      <tr>
                <td > <?php echo  $r['attendee_id']?></td>
                <td > <?php echo  $r['firstname']?></td>
                <td > <?php echo  $r['lastname']?></td>
                <td > <?php echo  $r['date_birth']?></td>
                <td > <?php echo  $r['email']?></td>
                <td > <?php echo  $r['password']?></td>
                <td > <?php echo  $r['name']?></td>
                <td>
                <a href="view.php?id=<?php echo  $r['attendee_id']?>" class="btn btn-primary">view</a>
                <a href="edit.php?id=<?php echo  $r['attendee_id']?>" class="btn btn-warning">Edit</a>
                <a  onclick="return confirm('Are you sure to delete thist record?')"
                href="delete.php?id=<?php echo  $r['attendee_id']?>" class="btn btn-danger">delete</a>


                </td>


  </tr>
    <?php }?>
  </tbody>
</table>
<br>
<br>
<?php
require_once ('include/footer.php');
?>   