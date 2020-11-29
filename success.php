<?php 
$title='Success';
require_once 'include/headers.php';
require_once ('db/conn.php');
if (!isset($_POST['submit'])){
   echo '<h1 class="text-justify text-danger">Not submit  </h1>';
    

}
else {
   $fname=$_POST['firstname'];   
     $lname=$_POST['lastname'];
     $dod=$_POST['dod'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $spiciality=$_POST['spiciality'];
     $issucc=$crud->insertAtendees($fname,$lname,$dod,$email,$pass,$spiciality);
     if ($issucc){
        echo '<h1 class="text-justify text-success">Success Registration </h1>';
     }
     else{
        echo '<h1 class="text-justify text-danger">fail Registration </h1>';

     } 

?>
    <h1 class="text-justify">Success Registration </h1>
 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php    echo $_POST['firstname']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<?php } ?>
<br>
<br>
<?php
require_once ('include/footer.php');
?>   