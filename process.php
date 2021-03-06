<?php
session_start();


// initializing variables
$name = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'data');

// REGISTER USER
if (isset($_POST['save'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
 
  $position = mysqli_real_escape_string($db, $_POST['position']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  
  if (empty($position)) { array_push($errors, "position is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same namename and/or email/or momo number
  $user_check_query = "SELECT * FROM add_can WHERE name='$name' LIMIT 1";

  

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "name already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) === 0) {
    // $position = md5($position);//encrypt the position before saving in the database

    $query = "INSERT INTO add_can (name, position) VALUES ('$name' ,'$position')";

    mysqli_query($db, $query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You are now logged in";
    header('location: create_poll.php');
  }
}

// ... 
// LOGIN USER
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $delete_query = "DELETE FROM add_can WHERE id =$id";
  mysql_query($delete_query);
  header('location: create_poll.php');

}




?>