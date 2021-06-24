<?php
require_once("db.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
session_start();
  class Person
  {
    public $name;
    public $id;
    public $password;
    public $email;
    public $userType;

    public $conn;
    function create_connection()
    {
      $this->conn = new mysqli("localhost", "root", "", "zaherdairy");
      // Check connection
      if (mysqli_connect_errno())
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

      return $conn;
    }

    function register()
    {
      $this->create_connection();

    }
  }

  class Customer extends Person
  {
    public $address;

    function login($email, $pass)
    {
      $this->create_connection();
      $p = md5($pass);       
      $result = mysqli_query($this->conn,"SELECT * FROM users WHERE Email='".$email."' AND Password='$p'");
      
        if ($result->num_rows > 0)
        {
            while($select_data = $result->fetch_assoc()) {
            $_SESSION["Logged_in_ID"]=$select_data['id'];
            $_SESSION["role"]=$select_data['role'];
            $_SESSION["name"]=$select_data['first_name'];
            }
            $_SESSION["Logged_in"] = true;
            
            if($_SESSION["Logged_in"] = true && $_SESSION["role"] == 'admin'){
            header("location: adminhome.php");  
            }
            else if($_SESSION["Logged_in"] = true && $_SESSION["role"] == 'user'){
                header("location: home.php");
            }
            else if($_SESSION["Logged_in"] = true && $_SESSION["role"] == 'topadmin'){
            header("location: adminhome.php");  
            }
        }else{
            print("Error");
        }
    }
      
    public function addToCart($post){
        $this->create_connection();
        $id = $_GET['id'];
        $q = $_POST['quantity'];
        $user_id = $_SESSION['Logged_in_ID'];
        $result = mysqli_query($this->conn,"SELECT * FROM `products` WHERE id = $id");
        
        
        if ($result)
        {
            while($select_data = $result->fetch_assoc()) {
            $name = $select_data['name'];
            $price = $select_data['price'];
            }
            $total_price = $q * $price;
            print "<script> alert($name) </script>";
            $result = mysqli_query($this->conn,"INSERT INTO `cart`(`id`, `userid`, `pname`, `quantity`, `totalprice`) VALUES('$id','$user_id','$name', '$q', '$total_price')"); 
            print "<script> alert($name) </script>";
        }else{
            print("Error");
        } 
    }
      
    public function removeItem(){
        $this->create_connection();
        $id = $_GET['id'];
        $query="DELETE FROM `cart` WHERE xid = $id";

 	    mysqli_query($this->conn,$query);
 	    echo"data deleted ";
    }  
      
    public function purchase($user_id){
      $x = new database();
      $conn= $x->connect();
     // $user_id = $_SESSION['Logged_in_ID'];
      $sql1 = "SELECT *  FROM `cart` WHERE userid = $user_id";
      $result1 = mysqli_query($x->conn,$sql1);
        if($result1)
        if(mysqli_num_rows($result1)>0)
        while($row = mysqli_fetch_array($result1)){
        $pname = $row['pname'];
        $quantity = $row['quantity'];
        $totalp = $row['totalprice'];
      
        $sql2="INSERT INTO orders (user_id,pname,quantity,totalprice) VALUES ('$user_id','$pname','$quantity','$totalp')";
        $result2 = mysqli_query($x->conn,$sql2);
       
        }
        
       }
      }
    
      //   $this->create_connection();
      //   $id = $_GET['id'];
      //   $user_id = $_SESSION['Logged_in_ID'];
      //   $query = "SELECT *  FROM `cart` WHERE userid = $user_id";
 	    // $result = mysqli_query($this->conn,$query);
        
      //   if ($result)
      //   {
      //       while($select_data = $result->fetch_assoc()) {
      //       $name = $select_data['name'];
      //       $price = $select_data['price'];
      //       }
      //   }else{
      //       print("Error");
      //   } 
        
 	    // echo"data deleted ";
     

    function viewAccount($email)
    {
      $this->create_connection();
      $result = mysqli_query($this->conn,"SELECT * FROM person WHERE Email ='$email'");
      $sql = "SELECT name, email FROM users";
      $result = $this->conn->query($sql);
      $email;
      $pass;    
      if ($result->num_rows > 0)
      {
        // output data of each row
        while($row = $result->fetch_assoc())
          echo "Name: " . $row["name"]. "<br> Email: " . $row["email"]. "<br>";
      }

      else {
        echo "Please log in to view your account.";
      } 
      $this->conn->close();

    }
    
    function editAccount($post)
    {
      $x = new database;
      $conn = $x->connect();
      $id = $_SESSION['Logged_in_ID'];
    $fname=$_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mob = $_POST['num'];

    $sql=" UPDATE users SET first_name = '$fname', email= '$email', address = '$address', mob_num = '$mob' WHERE id = $id";
    mysqli_query($conn, $sql);
    if($result)
    echo "Account updated";
    }
  

  

  class Admin extends Person
  {
    function addEmployee($post){
        $this->create_connection();
        $fname=$_POST['fname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mob = $_POST['mobile']; 
    $password = md5($_POST['password']);
    $cpassword = $_POST['cpassword']; 
         
 	$query="insert into users (first_name, email, address , mob_num, password, role) values ('".$fname."','".$email."','".$address."', '$mob', '$password', 'topadmin')";

 	    mysqli_query($this->conn,$query);
 	    echo"data is added ";
        
    }

    function deleteEmployee($id){
        $this->create_connection();
        $query="DELETE FROM `users` WHERE id = $id";

 	    mysqli_query($this->conn,$query);
 	    echo"data deleted ";
    }
   
  }

  class Product extends database
  {  
    private $name;
    private $image;
    private $description;
    private $price;
    private $category_id;
    function __construct()
    {
      $this->name="";
      $this->image="";
      $this->description="";
      $this->price="0";
      $this->availability='1';
      $this->category_id='1';
      
    }
    function addProduct($post){
    $conn = $this->connect();
    $name=$_POST['pname'];
  $image = $_POST['image'];
  $price = $_POST['price'];
  $description = $_POST['description']; 
  $query="INSERT INTO `products`(`name`, `description`, `price`, `availability`, `category_id`) VALUES  ('".$name."','".$description."','$price', '1', '1')";

  mysqli_query($conn,$query);
    
  
    
  }
  function addOrder($post)
  {
   $conn = $this->connect();
   $name=$_POST['pname'];


  }

  }

  
 ?>
