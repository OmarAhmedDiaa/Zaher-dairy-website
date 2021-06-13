<?php

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
            else if($_SESSION["Logged_in"] = true && $_SESSION["Logged_in_UTID"] == 'homepage.php'){
                header("location: dashboard.php");
            }
            else if($_SESSION["Logged_in"] = true && $_SESSION["role"] == 'topadmin'){
            header("location: adminhome.php");  
            }
        }else{
            print("Error");
        }
    }
      

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

  }

  class Employee extends Person
  {
    function addProduct(){}

    function editProduct(){}

    function deleteProduct(){}
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

  class Product
  {
    public $name;
    public $price;
    public $image;
  }


 ?>
