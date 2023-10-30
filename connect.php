<?php
 
 $connect = new mysqli('localhost','root',"",'crud-ops');

 if(!$connect){
    die(mysqli_error($connect));
 }

?>