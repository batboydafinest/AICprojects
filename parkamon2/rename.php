<?php
  session_start();

  if (isset($_SESSION['playerID']) == false && isset($_POST['name']) == false) {
    header("Location: signin.php");
  }

  elseif (isset($_SESSION['playerID']) == true && isset($_POST['name']) == false) {
    header("Location: game.php");
  }

  elseif (isset($_SESSION['playerID']) == false && isset($_POST['name']) == true) {
    header("Location: signin.php");
  }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Renamed</title>
  </head>
  <body>
    <h1>Parkamon renaming station</h1>

    <br>

    <?php

    require '../database.php';
    date_default_timezone_set('America/Los_Angeles');

    try {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      $sth = $dbh->prepare("SELECT id FROM ownership ORDER BY id DESC LIMIT 1");
      $sth->execute();
      $high = $sth->fetch();
    }

    catch (PDOException $e) {
      echo "Error connecting to database...";
    }

    $rename = htmlspecialchars($_POST["rename"]);
    $nameid = htmlspecialchars($_POST["name"]);

    try {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      $sth = $dbh->prepare("SELECT player_id FROM ownership WHERE id = :id ");
      $sth->bindValue(':id', $nameid);
      $sth->execute();
      $playerid = $sth->fetch();
    }

    catch (PDOException $e) {
      echo "Error connecting to database...";
    }

    if ($playerid[0] == $_SESSION['playerID']) {




    if (filter_var($_POST["name"], FILTER_VALIDATE_INT) && $nameid <= $high[0] && $nameid >= 1 && strlen($rename) <= 8) {

      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("UPDATE ownership SET nickname = :rename where id = :id");
        $sth->bindValue(':rename', $rename);
        $sth->bindValue(':id', $nameid);
        $sth->execute();

      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }

      echo "<h3>Renaming process complete</h3>";


    }

    else {
      echo "<p>Error with renaming process</p> ";
    }

    }

    else {
      echo "error";
    }



     ?>

     <a href="https://atdpsites.berkeley.edu/apadmawar/aic/parkamon2/game.php">Back to game</a>

  </body>
</html>
