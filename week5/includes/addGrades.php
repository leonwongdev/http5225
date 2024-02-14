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
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$marks = $_POST['marks'];
$imageURL = $_POST['imageURL'];

include 'connect.php';

// Query to insert data into the database
$query = "INSERT INTO `students` (`fname`, `lname`, `marks`, `imageURL`) 
          VALUES ('$fname', '$lname', '$marks', '$imageURL')";
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