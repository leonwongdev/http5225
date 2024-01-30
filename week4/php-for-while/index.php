<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>API Practice</title>
</head>

<body>
  <?php
  function getUsers()
  {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
  }

  $users = getUsers();

  foreach ($users as $user) {
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

    echo '</div>';
    echo '</div>';
  }

  echo "<pre>";
  echo print_r($users);

  echo "</pre>";
  ?>
</body>

</html>