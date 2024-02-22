<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Week 5</title>
</head>
<body>
<?php include '../reusables/nav.php'; ?>
  
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-3 mt-4 mb-4">
          Student Catalog
        </h1>
      </div>
    </div>
    <?php 
      include '../includes/connect.php';

      $query = 'SELECT id, fname, lname, marks, grade, `imageURL` FROM `students`';

      $students = mysqli_query($connect, $query);

      if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
      }

      // echo '<pre>';

      // // Check if the query was successful
      // if ($students) {
      //     // Fetch the data and display it
      //     while ($student = mysqli_fetch_assoc($students)) {
      //         print_r($student);
      //     }
      // } else {
      //     // Display an error message if the query failed
      //     echo "Query failed: " . mysqli_error($connect);
      // }
      
      // echo '</pre>';

      // echo '<pre>';
      // echo print_r($students);
      // echo '</pre>';


      echo '<div class="container">';
      echo '<div class="row">';
      $counter = 0;
      foreach ($students as $student) {
          if ($student['marks'] < 50) {
              $bgClass = 'bg-danger';
          } else {
              $bgClass = 'bg-success';
          }
          echo '<div class="col-sm-4">';
          echo '<div class="card '. $bgClass .'" style="width: 18rem;">
          <img class="card-img-top" src="' . $student['imageURL'] . '" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">' . $student['fname'] . ' ' . $student['lname'] . '</h5>
            <p class="card-text">' . 'Marks:' . $student['marks'] . '</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer">
            <form method="GET" action="update.php" class="mb-3">
              <input type="hidden" name="id" value="' . $student['id'] . '">
              <button type="submit" name="edit" class="btn btn-info">Edit</button>
            </form>
            <form method="GET" action="includes/deleteStudent.php">
              <input type="hidden" name="id" value="' . $student['id'] . '">
              <button type="submit" name="delete" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>';
        echo '</div>';
        $counter++;
        if ($counter % 3 == 0) {
          echo '</div><div class="row">';
        }
      }
      echo '</div>';
      echo '</div>';
    ?>
  </div>
</body>
</html>