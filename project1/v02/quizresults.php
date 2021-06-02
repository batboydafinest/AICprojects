<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="quizresults.css">
    <title>Quiz Results</title>
  </head>
  <body>

    <h2>Your Results</h2>

    <?php

    $ans = 0;

    $name = htmlspecialchars($_POST["name"]);

    $gender = htmlspecialchars($_POST["gender"]);

    $bday = htmlspecialchars($_POST["bday"]);

    $email = htmlspecialchars($_POST["email"]);

    $address = htmlspecialchars($_POST["address"]);

    $song1 = htmlspecialchars($_POST["q1"]);

    $song2 = htmlspecialchars($_POST["q2"]);

    $song3 = htmlspecialchars($_POST["q3"]);

    $song4 = htmlspecialchars($_POST["q4"]);

    $song5 = htmlspecialchars($_POST["q5"]);

    $song6 = htmlspecialchars($_POST["q6"]);

    $song7 = htmlspecialchars($_POST["q7"]);

    $song8 = htmlspecialchars($_POST["q8"]);

    $song9 = htmlspecialchars($_POST["q9"]);

    $song10 = htmlspecialchars($_POST["q10"]);

    if ($song1 === "Call Me Maybe") {
      $ans = $ans + 1;
    }

    if ($song2 === "Now Or Never") {
      $ans = $ans + 1;
    }

    if ($song3 === "Sorry") {
      $ans = $ans + 1;
    }

    if ($song4 === "One Kiss") {
      $ans = $ans + 1;
    }

    if ($song5 === "Havana") {
      $ans = $ans + 1;
    }

    if ($song6 === "Shut Up and Dance") {
      $ans = $ans + 1;
    }

    if ($song7 === "Lose Yourself") {
      $ans = $ans + 1;
    }

    if ($song8 === "Can't Feel My Face") {
      $ans = $ans + 1;
    }

    if ($song9 === "Maps") {
      $ans = $ans + 1;
    }

    if ($song10 === "Closer") {
      $ans = $ans + 1;
    }

    echo "<h2>Your Final score is {$ans}/10";


     ?>

  </body>
</html>
