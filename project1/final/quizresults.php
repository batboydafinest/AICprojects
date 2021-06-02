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

      else {
        echo "<div class=ans><h3>You got Question #1 wrong (Your stare was holding, Ripped jeans, skin was showing, Hot night, wind was blowing, Where you think you're going, baby?)</h3> <h4>It was Call Me Maybe by Carly Rae Jepsen</h4></div>";
      }

      if ($song2 === "Now Or Never") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #2 wrong (Never pick up, never call me, You know we're runnin' out of time, Never pick up when you want me, Now I gotta draw a line)</h3> <h4>It was Now Or Never by Halsey</h4></div>";
      }

      if ($song3 === "Sorry") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #3 wrong (I'll take every single piece of the blame if you want me to, But you know that there is no innocent one in this game for two)</h3> <h4>It was Sorry by Justin Bieber </h4></div>";
      }

      if ($song4 === "One Kiss") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #4 wrong (Something in you lit up heaven in me, The feeling won't let me sleep, 'Cause I'm lost in the way you move, the way you feel)</h3> <h4>It was One Kiss by Dua Lipa and Calvin Harris</h4></div>";
      }

      if ($song5 === "Havana") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #5 wrong (He took me back to East Atlanta)</h3> <h4>It was Havana by Camila Cabello</h4></div>";
      }

      if ($song6 === "Shut Up and Dance") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #6 wrong (\"Oh, don't you dare look back, Just keep your eyes on me\" I said, “You're holding back”)</h3> <h4>It was Shut Up and Dance by Walk the Moon</h4></div>";
      }

      if ($song7 === "Lose Yourself") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #7 wrong (Yo! His palms are sweaty, knees weak, arms are heavy, There's vomit on his sweater already: Mom's spaghetti)</h3> <h4>It was Lose Yourself by Eminem</h4></div>";
      }

      if ($song8 === "Can't Feel My Face") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #8 wrong (And I know she'll be the death of me, At least we'll both be numb, And she'll always get the best of me, The worst is yet to come)</h3> <h4>It was Can't Feel My Face by The Weeknd</h4></div>";
      }

      if ($song9 === "Maps") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #9 wrong (I miss the taste of a sweeter life, I miss the conversation, I'm searching for a song tonight, I'm changing all of the stations)</h3> <h4>It was Maps by Maroon 5</h4></div>";
      }

      if ($song10 === "Closer") {
        $ans = $ans + 1;
      }

      else {
        echo "<div class=ans><h3>You got Question #10 wrong (So, baby, pull me closer, In the backseat of your Rover, That I know you can't afford)</h3> <h4>It was Closer by The Chainsmokers</h4></div>";
      }


      echo "<h2>Your Final score is {$ans}/10</h2>";

      echo "

        <h2>Here is your personal information that you wouldn't want to get leaked....</h2>

        <h4>Name: {$name}</h4>

        <h4>Gender: {$gender}</h4>

        <h4>Birthday: {$bday}</h4>

        <h4>Email: {$email}</h4>

      ";

    }




     ?>

  </body>
</html>
