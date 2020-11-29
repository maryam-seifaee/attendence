<?php
  class crud{
      //private database object
      private $db;
      //constructor to initialize private variable to the database connection
      function __construct($conn){
          $this->db=$conn;
      }
      public function insertAtendees($fname,$lname,$dod,$email,$pass,$speciality) {
          try {
              $sql="INSERT INTO attendee (firstname,lastname,date_birth,email,password,spitiality_id) VALUES (:fname,:lname,:dod,:email,:pass,:speciality)";
              $stmt=$this->db->prepare($sql);
              $stmt->bindparam(':fname',$fname);
              $stmt->bindparam(':lname',$lname);
              $stmt->bindparam(':dod',$dod);
              $stmt->bindparam(':email',$email);
              $stmt->bindparam(':pass',$pass);
              $stmt->bindparam(':speciality',$speciality);
              $stmt->execute();
              return true;

          } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
      }
      public function editAtendee($id,$fname,$lname,$dod,$email,$pass,$speciality) {
        try {
          $sql="UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`date_birth`=:dod,`email`=:email,`password`=:pass,`spitiality_id`=:speciality WHERE attendee_id=:id";
          $stmt=$this->db->prepare($sql);
          $stmt->bindparam(':fname',$fname);
          $stmt->bindparam(':lname',$lname);
          $stmt->bindparam(':dod',$dod);
          $stmt->bindparam(':email',$email);
          $stmt->bindparam(':pass',$pass);
          $stmt->bindparam(':speciality',$speciality);
          $stmt->bindparam(':id',$id);

          $stmt->execute();
          return true;

              } catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
  }
      public function getAtendees() {
       $sql="SELECT * FROM `attendee`  a inner join spitiality s on a.spitiality_id=s.spitiality_id";
       $result=$this->db->query($sql);
       return $result;
    }
    public function getAtendeeDetails($id) {
      try {
      $sql="SELECT * FROM `attendee` a inner join spitiality s on a.spitiality_id=s.spitiality_id where attendee_id =:id";
      $stmt=$this->db->prepare($sql);
      $stmt->bindparam(':id',$id);
      
      $stmt->execute();
      $result=$stmt->fetch();
      return $result;

     } catch(PDOException $e){
       echo $e->getMessage();
       return false;
     }
   }
   public function deleteAtendee($id)
     {
      try {
        $sql="DELETE FROM `attendee`  where attendee_id =:id";
        $stmt=$this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        
        $stmt->execute();
        $stmt->fetch();
        return true;
  
       } catch(PDOException $e){
         echo $e->getMessage();
         return false;
       }
     }
    public function getSpitiality() {
        $sql="SELECT * FROM `spitiality` WHERE 1";
        $result=$this->db->query($sql);
        return $result;
     }      
  }
?>
