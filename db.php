<?php

class database
{
 var $host="localhost";
 var $user ="root";
 var $password="";
 var $db="zaherdairy";
 var $tname="users";

 public function connect()
 {
 	$conn=mysqli_connect($this->host,$this->user,$this->password,$this->db);
 	return $conn;
 }
 public function records($x,$y,$z,$a)
 {
 	$conn=$this->connect();
 	$query="insert into " .$this->tname. "(first_name,last_name,email,password) values ('$x','$y','$z','$a')";
 		

 	mysqli_query($conn,$query);
 	echo"data is added ";
 }

}


 ?>