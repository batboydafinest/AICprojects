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



     ?>

     <a href="https://atdpsites.berkeley.edu/apadmawar/aic/parkamon/game.php">Back to game</a>

  </body>
</html>
