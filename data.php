<?php
   include "connect.php";

    if(isset($_POST["submit"])){
    $fname = $_POST['name'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
   
      
     $query = "insert into user(Id, name, email, message) values ('','$name','$email','$contact' ,'$subject','message')"; 

     if($result){
     echo "Data successfully added";
     } 
      else{
        echo "data not added";
      }
    }
    ?>

    