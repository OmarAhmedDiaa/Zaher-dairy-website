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
      echo "<table border='1'>
      <tr>
      <th>Full Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Mobile</th>
      <th>Address</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Mobile'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "</tr>";
      }

      echo "</table>";

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
