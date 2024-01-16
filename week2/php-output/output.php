<!doctype html>
<html>

<head>

  <title>PHP and Creating Output</title>

</head>

<body>

  <?php

  echo '<h1>PHP and Creating Output</h1>';



  echo '<p>The PHP echo command can be used to create output!</p>';

  echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using
    quotes within an echo statement:</p>';

  echo '<ul>
          <li>Use HTML special characters</li>
          <li>Alternate between single and double quotes</li>
          <li>Use a backslash to escape quotes</li>
        </ul>';

  echo '<h2>More HTML to Convert</h2>';

  echo '<p>PHP says "Hello World!"</p>';

  echo '<p>Can you display a sentence with \' and " ?</p>';

  echo '<img src="php-logo.png">';

  ?>

  <!-- PHP Variables -->

  <?php
  $linkName = 'Codecademy';
  $linkURL = 'https://www.codecademy.com/';
  $linkImage = 'codecademy.png';
  $linkDescription = 'Learn to code interactively, for free.';

  echo '<h1>' . $linkName . '</h1>';

  echo '<a href=' . $linkURL . ' >' . $linkName . ' </a>';
  echo '<img src="' . $linkImage . '" alt="Codecademy Image">';
  echo '<p>' . $linkDescription . '</p>';
  ?>

  <!-- PHP Array -->

  <?php

  $link['name'] = 'Codecademy';
  $link['url'] = 'https://www.codecademy.com/';
  $link['image'] = 'codecademy.png';
  $link['description'] = 'Learn to code interactively, for free.';

  ?>

  <h1>
    <?php echo $link['name']; ?>
  </h1>
  <p>
    <?php echo $link['description']; ?>
  </p>
  <a href="<?php echo $link['url']; ?>" target="_blank">
    <img src="<?php echo $link['image']; ?>" alt="<?php echo 'Codecademy Image'; ?>">
  </a>
</body>

</html>