<?php
class database
{
//  var $host="localhost";
//  var $user ="root";
//  var $password="";
//  var $db="zaherdairy";
//  var $tname="users";

 public function connect()
 {
 	$conn=mysqli_connect("localhost","root","","zaherdairy") or die("no conn");
 	return $conn;
 }
    
 public function records($post)
 {
 	$conn=$this->connect();
    $fname=$_POST['fname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mob = $_POST['mobile']; 
    $password = md5($_POST['password']);
    $cpassword = $_POST['cpassword']; 
         
 	$query="insert into users (first_name, email, address , mob_num, password, role) values ('".$fname."','".$email."','".$address."', '$mob', '$password', 'user')";

 	mysqli_query($conn,$query);
 	echo"data is added ";
 }
 
}

 ?>