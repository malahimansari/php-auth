<?php 

$conn = new mysqli("localhost","root","","user_auth");
if(!$conn){
    echo "Database not Connected";
}

?>