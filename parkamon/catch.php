<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Coatching parkamons</title>
  </head>
  <body>


    <?php

    require '../database.php';
    date_default_timezone_set('America/Los_Angeles');

    $playerID = htmlspecialchars($_POST["trainers"]);

    if (filter_var($playerID, FILTER_VALIDATE_INT)) {



      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT name FROM player where id = :id");
        $sth->bindValue(':id', $playerID);
        $sth->execute();
        $playerName = $sth->fetch();

      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }

      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT * FROM parkamon ORDER BY RAND() LIMIT 1");
        $sth->execute();
        $ranparka = $sth->fetch();

      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }

      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $catch = $dbh->prepare("INSERT INTO ownership (`player_id`, `parkamon_id`, `nickname`) VALUES (:playerID, :parkaID, :parkaName)");
        $catch->bindValue(':playerID', $playerID);
        $catch->bindValue(':parkaID', $ranparka['id']);
        $catch->bindValue(':parkaName', $ranparka['breed']);
        $success = $catch->execute();

      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }



      echo "<h3>You got a {$ranparka['breed']}</h3>";
    }

    else {
      echo "<p>Plz select good trainer values</p>";
    }

     ?>

     <a href="https://atdpsites.berkeley.edu/apadmawar/aic/parkamon/game.php">Back to game</a>

  </body>
</html>
