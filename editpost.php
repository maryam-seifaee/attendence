<?php 

require_once ('db/conn.php');
if (!isset($_POST['submit'])){
   echo '<h1 class="text-justify text-danger">Not submit  </h1>';
    

}
else {
    $id=$_POST['id'];
   $fname=$_POST['firstname'];   
     $lname=$_POST['lastname'];
     $dod=$_POST['dod'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $spiciality=$_POST['spiciality'];
     $issucc=$crud->editAtendee($id,$fname,$lname,$dod,$email,$pass,$spiciality);
     if ($issucc){
        header("location:viewrecords.php");
     }
     else{
        echo '<h1 class="text-justify text-danger">fail Changes </h1>';

     } 
    }
    ?>