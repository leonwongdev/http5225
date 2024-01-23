<!doctype html>
<html>

<head>
    <title>PHP If Statements</title>
</head>

<body>

    <h1>PHP If Statements</h1>

    <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything
        outputs correctly:</p>

    <?php

    // **************************************************
    // Do not edit this code
    
    // Generate a random number (1, 2, or 3)
    $randomNumber = ceil(rand(1, 3));

    // Display the random number
    echo '<p>The random number is ' . $randomNumber . '.</p>';

    // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
    
    // The random number is 1, so use Codecademy
    if ($randomNumber == 1) {

        $linkName = 'Codecademy';
        // $linkURL = 'https://www.codecademy.com/';
        $linkCTA = 'Codecademy';
        $linkImage = '';
        $linkDescription = 'Learn to code interactively, for free.';

    }

    // The random number is 2, so use W3Schools
    elseif ($randomNumber == 2) {

        $linkName = '';
        $linkURL = 'https://www.w3schools.com/';
        $linkCTA = 'W3 Schools';
        $linkImage = 'w3schools.png';
        $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

    }

    // The random number is 3, so use MDN
    else {

        $linkName = 'Mozilla Developer Network';
        $linkURL = 'https://www.codecademy.com/';
        $linkCTA = 'Mozilla';
        $linkImage = 'mozilla.png';
        $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

    }

    // **************************************************
    
    // Beginning of the exercise, place all of your PHP code here
    // Upload this page (or use your localhost) and refresh the page, the h2 below will change
    

    // Class exercise: Assign default values if a variable holds empty value
    if (empty($linkName)) {
        $linkName = 'Default Link Name';
    }

    // if (empty($linkURL)) {
    //     $linkURL = 'https://google.com';
    // }
    
    if (empty($linkImage)) {
        $linkImage = 'w3schools.png';
    }

    if (empty($linkDescription)) {
        $linkDescription = 'Default link description.';
    }

    // Render the html
    echo '<h2>' . $linkName . '</h2>';
    if (!empty($linkURL)) {
        // echo '<p>Link URL: <a href="' . $linkURL . '">' . $linkCTA . '</a></p>';
        echo "<p>Link URL: <a href='{$linkURL}'>{$linkCTA}</a></p>"; // Trying string interpolation
    } else {
        echo "<p>{$linkCTA}</p>";
    }

    echo '<p>Link Image: <img src="' . $linkImage . '" alt="Link Image" width="150px";></p>';
    echo '<p>Link Description: ' . $linkDescription . '</p>';
    ?>

    <?php

    $randomScores = ceil(rand(1, 100));

    if ($randomScores < 60) {
        $grade = 'F';
        $comments = 'You did a crappy job.';
    } else if ($randomScores < 65) {
        $grade = 'E';
        $comments = 'You could do better that this.';
    } else if ($randomScores < 70) {
        $grade = 'D';
        $comments = "That's all you got?";
    } else if ($randomScores < 80) {
        $grade = 'C';
        $comments = "Not bad not bad!";
    } else if ($randomScores < 90) {
        $grade = 'B';
        $comments = "Awesome!";
    } else {
        $grade = 'A';
        $comments = "Legendary!";
    }
    echo "<h2>Your Grade result</h2>";
    echo "<p>Scores: {$randomScores}</p>";
    echo "<p>Letter Grade: {$grade}</p>";
    echo "<p>Comments: {$comments}</p>";
    ?>


    <?php
    $randomDayNum = rand(1, 7);

    switch ($randomDayNum) {
        case 1:
            $weekday = 'Monday';
            $messageOfDay = "Not a good day to work.";
            break;
        case 2:
            $weekday = 'Tuesday';
            $messageOfDay = "Gotta start working";
            break;
        case 3:
            $weekday = 'Wednesday';
            $messageOfDay = "When is Friday?";
            break;
        case 4:
            $weekday = 'Thursday';
            $messageOfDay = "Why Friday is so far way";
            break;
        case 5:
            $weekday = 'Friday';
            $messageOfDay = "Thank god it's Friday!";
            break;
        case 6:
            $weekday = 'Saturday';
            $messageOfDay = "Good day to sleep";
            break;
        case 7:
            $weekday = 'Sunday';
            $messageOfDay = "Oh no tomorrow is Monday again!";
            break;
        default:
            $weekday = 'Invalid day';
    }

    // Output the results
    echo "<h1>Generated Day Number: {$randomDayNum}</h1>";
    echo "<p>Weekday: {$weekday}</p>";
    echo "<p>Message: {$messageOfDay}</p>";
    ?>


</body>

</html>