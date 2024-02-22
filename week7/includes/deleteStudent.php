<?php
print_r("deleteStudent.php page loaded");
// check if post data is set
if (!isset($_GET['delete'])) {
  die('Invalid request');
}
print_r($_GET);

$id = $_GET['id'];

include 'connect.php';

// Query to delete data from the database
$query = "DELETE FROM `students` WHERE `id` = $id";
print_r($query);
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