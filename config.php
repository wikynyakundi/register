<?php

$servername="localhost";
$username="epiz_31924417";
$password="N9NLxJe0EOI";
$dbname="epiz_31924417_data";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);



//Check connection
if($conn->connect_error){
  die("Connection failed:".$conn->connect_error);

}



?>