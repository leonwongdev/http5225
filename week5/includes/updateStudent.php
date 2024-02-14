<?php
// check if post data is set
if (!isset($_POST['fname']) || 
    !isset($_POST['lname']) || 
    !isset($_POST['marks']) || 
    !isset($_POST['imageURL']) 
    ) {
  die('Invalid request');
}

print_r($_POST);
// Array ( [fname] => leon [lname] => wong [marks] => 100 [imageURL] => www.google.com )
// use print_r to print all the field from $_POST and create variables
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$marks = $_POST['marks'];
$imageURL = $_POST['imageURL'];

include 'connect.php';

// Query to update data into the database
$query = "UPDATE `students` 
          SET `fname` = '$fname', `lname` = '$lname', `marks` = '$marks', `imageURL` = '$imageURL'
          WHERE `id` = $id";
// Execute the query
$result = mysqli_query($connect, $query);

// error handling
if ($result) {
  // redirect to index.php
  header('Location: ../index.php');
} else {
  echo "<p>Error: " . $query . "<br>" . mysqli_error($connect) . "</p>";
}

?>