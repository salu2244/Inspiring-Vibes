

<?php


 $host="localhost:3307";
 $username="root";
 $dbname="contact";
 $password="";

 
 $connect = mysqli_connect($host,$username,$password,$dbname);

if ($connect){
    echo "Connected Successfully!!";
}
?>
 