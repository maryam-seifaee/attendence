<?php 
$title='Edit';
require_once('include/headers.php');
require_once 'db/conn.php';
$results=$crud->getSpitiality();
if (!isset($_GET['id'])){
   // echo '<h1 class="text-justify text-danger">No ID </h1>';

   include "include/errormessage.php";
}
else{
    $id=$_GET['id'];
    $attendee=$crud->getAtendeeDetails($id);


?>
    <h1 class="text-justify">Edit Records</h1>
 <form method="post"  action="editpost.php">
     <input type="hidden" value="<?php echo $attendee['attendee_id'];?>"  name="id" >

    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" value="<?php echo $attendee['firstname'];?>" id="firstname" name="firstname" >
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" value="<?php echo $attendee['lastname'];?>"  id="lastname"  name="lastname" >
    </div> 
      <div class="form-group">
      <label for="dod">Date of Brith</label>
      <input type="text" class="form-control" value="<?php echo $attendee['date_birth'];?>"   id="dod" name="dod" >
    </div>

    <div class="form-group">
      <label for="spiciality">Spiciality</label>
      <select class="form-control" " id="spiciality" name="spiciality" >
        
      
        <?php  while($r=$results->fetch(PDO::FETCH_ASSOC) ){?>
            <option value="<?php echo  $r['spitiality_id']?>" <?php if ($r['spitiality_id']==$attendee['spitiality_id']) echo  'selected' ?> >  <?php echo  $r['name']?></option>
        <?php }?>

      </select>
    </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control"value="<?php echo $attendee['email'];?>"  id="email" name="email"  aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" value="<?php echo $attendee['password'];?>" id="pass" name="pass" >
  </div>
  
  <button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button>
</form>

        <?php } ?>
<br>
<br>
<?php
require_once ('include/footer.php');
?>    
