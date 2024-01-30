<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>API Practice</title>
</head>

<body>
  <div class="container mt-5">
    <?php
    function getUsers()
    {
      $url = "https://jsonplaceholder.typicode.com/users";
      $data = file_get_contents($url);
      return json_decode($data, true);
    }

    $users = getUsers();
    $counter = 0;
    foreach ($users as $user) {

      if ($counter % 3 === 0) {
        echo '<div class="row">';
      }

      echo '<div class="col-sm">';
      echo '<div class="card mt-3">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">User ID: ' . $user['id'] . '</h5>';
      echo '<p class="card-text"><strong>Name:</strong> ' . $user['name'] . '</p>';
      echo '<p class="card-text"><strong>Email:</strong> <a href="mailto:' . $user['email'] . '">' . $user['email'] . '</a></p>';

      echo '<p class="card-text"><strong>Address:</strong><br>';
      echo '<span class="ms-3"><strong>Street:</strong> ' . $user['address']['street'] . '</span><br>';
      echo '<span class="ms-3"><strong>Suite:</strong> ' . $user['address']['suite'] . '</span><br>';
      echo '<span class="ms-3"><strong>City:</strong> ' . $user['address']['city'] . '</span><br>';
      echo '<span class="ms-3"><strong>Zipcode:</strong> ' . $user['address']['zipcode'] . '</span>';
      echo '</p>';

      echo '<p class="card-text"><strong>Phone:</strong> ' . $user['phone'] . '</p>';

      echo '<p class="card-text"><strong>Website:</strong> <a href="' . $user['website'] . '" target="_blank">' . $user['website'] . '</a></p>';

      echo '</div>'; // end of card-body
      echo '</div>'; // end of card
      echo '</div>'; // end of col-sm
    
      if ($counter % 3 == 2 || $counter == count($users) - 1) {
        // Close the row after every three cards or for the last set of cards
        echo '</div>';
      }
      $counter++;
    }

    echo "<pre>";
    echo print_r($users);

    echo "</pre>";
    ?>
  </div>
</body>

</html>