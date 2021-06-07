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
      $result = mysqli_query($this->conn,"SELECT * FROM person WHERE Email='$email' AND Password='$pass'");
      $num_rows = mysqli_num_rows($result);

      if ($num_rows > 0)
        header('Location: home.php');
      else
        echo "Incorrect Credentials.";
    }

    function viewAccount($email)
    {
      $this->create_connection();
      $result = mysqli_query($this->conn,"SELECT * FROM person WHERE Email ='$email'");
      $sql = "SELECT name, email FROM users";
      $result = $this->conn->query($sql);

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
    function addEmployee(){}

    function deleteEmployee(){}
  }

  class Product
  {
    public $name;
    public $price;
    public $image;
  }


 ?>
