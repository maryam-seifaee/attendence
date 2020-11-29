<?php 
$title='delete';
require_once 'db/conn.php';
if (!isset($_GET['id'])){
    echo '<h1 class="text-justify text-danger">No ID </h1>';


}
else{
    $id=$_GET['id'];
    $result=$crud->deleteAtendee($id);
    if ($result)
    {
       header("location:viewrecords.php");
    }
    else{
        echo '<h1 class="text-justify text-danger">fail on delete </h1>';

    }
}
?>