<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="quizresults.css">
    <title>Quiz Results</title>
  </head>
  <body>

    <?php

    include "external.php";

    ?>

    <h2>Your Results</h2>

    <?php

    $check = 0;

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




            if (empty($name) != true) {

              if ($gender === "male" || $gender === "female" || $gender === "other") {

                if (empty($bday) != true && strlen($bday) == 8) {

                  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    if ($song1 !== "Heart Wants What it Wants" && $song1 !== "Call Me Maybe" && $song1 !== "In the Name of Love") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song2 !== "I Would Like" && $song2 !== "Now Or Never" && $song2 !== "Starving") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song3 !== "Sorry" && $song3 !== "Mirrors" && $song3 !== "Let Me Love You") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song4 !== "Diamonds" && $song4 !== "Don't Let Me Down" && $song4 !== "One Kiss") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song5 !== "Havana" && $song5 !== "Sorry Not Sorry" && $song5 !== "Wolves") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song6 !== "500 Miles" && $song6 !== "Shut Up and Dance" && $song6 !== "Bohemian Rhapsody") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song7 !== "God's Plan" && $song7 !== "Lose Yourself" && $song7 !== "HUMBLE.") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song8 !== "Close" && $song8 !== "Hotter than Hell" && $song8 !== "Can't Feel My Face") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song9 !== "Dusk Till Dawn" && $song9 !== "Shape of You" && $song9 !== "Maps") {
                      echo "Please Choose a Valid Answer";
                    }

                    elseif ($song10 !== "Closer" && $song10 !== "We Don't Talk Anymore" && $song10 !== "Stiches") {
                      echo "Please Choose a Valid Answer";
                    }

                    else {
                      $check = 1;
                    }

                  }

                  else {
                    echo "<p>Please Enter a vaild email</p>";
                  }

                }

                else {
                  echo "<p>Please select a valid Birthday</p>";
                }

              }

              else {
                echo "<p>Please select a valid gender</p>";
              }


            }

            else {
              echo "<p>Please enter a valid name</p>";
            }

          



    if ($check === 1) {

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

      echo "<h4>Hi, {$name}, your gender is: {$gender}. Your Birthday is {$bday} and your email is {$email}</h4>";

      echo "<h2>Your Final score is {$ans}/10</h2>";

    }




     ?>

  </body>
</html>
