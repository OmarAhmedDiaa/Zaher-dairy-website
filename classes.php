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
    }

    function register()
    {
      $this->create_connection();
      
    }
  }

  class Customer extends Person
  {
    public $address;

    function login($user, $pass)
    {
      $this->create_connection();
      $result = mysqli_query($this->conn,"SELECT * FROM person WHERE Name='$user' AND Password='$pass'");
      $num_rows = mysqli_num_rows($result);

      if ($num_rows > 0)
        header('Location: home.php');
      else
        echo "Incorrect Credentials.";
    }

  }

  class Employee extends Person
  {
    function addProduct();

    function editProduct();

    function deleteProduct();
  }

  class Admin extends Person
  {
    function addEmployee();

    function deleteEmployee();
  }

  class Product
  {
    public $name;
    public $price;
    public $image;
  }


 ?>
