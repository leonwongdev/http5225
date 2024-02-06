<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Week 5</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-3 mt-4 mb-4">
          Student Catalog
        </h1>
      </div>
    </div>
    <?php 
      $connect = mysqli_connect("localhost", "root","root",'HTTP5225');

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
      
      echo '</pre>';

      echo '<pre>';
      echo print_r($students);
      echo '</pre>';




      foreach ($students as $student) {
        if ($student['marks'] < 50) {
          $bgClass = 'bg-danger';
        } else {
          $bgClass = 'bg-success';
        }
          echo '<div class="card '. $bgClass .'" style="width: 18rem;">
          <img class="card-img-top" src="' . $student['imageURL'] . '" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">' . $student['fname'] . ' ' . $student['lname'] . '</h5>
            <p class="card-text">' . 'Marks:' . $student['marks'] . '</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>';
       }
    ?>
  </div>
</body>
</html>