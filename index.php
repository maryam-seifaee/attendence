<?php 
$title='Index';
require_once('include/headers.php');
require_once 'db/conn.php';
$results=$crud->getSpitiality();
?>
    <h1 class="text-justify">Registration IT Conference</h1>
    <form method="post"  action="success.php">
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" required class="form-control" id="firstname" name="firstname" >
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text"required  class="form-control" id="lastname"  name="lastname" >
    </div> 
      <div class="form-group">
      <label for="dod">Date of Brith</label>
      <input type="text"required  class="form-control" id="dod" name="dod" >
    </div>

    <div class="form-group">
      <label for="spiciality">Spiciality</label>
      <select class="form-control" id="spiciality" name="spiciality" >
        
      
        <?php  while($r=$results->fetch(PDO::FETCH_ASSOC) ){?>
            <option value="<?php echo  $r['spitiality_id']?>"> <?php echo  $r['name']?></option>
        <?php }?>

      </select>
    </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" required  class="form-control" id="email" name="email"  aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="pass" >
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1" > 
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
<?php
require_once ('include/footer.php');
?>    
