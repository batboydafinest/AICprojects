<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
  </head>
  <body>

    <h1>Sign In</h1>

    <form action="game.php" method="post">


    <h4>Pick your player</h4>

    <select name="parkaplayers">

    <?php

    require_once '../database.php';
    date_default_timezone_set('America/Los_Angeles');



    try {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      $sth = $dbh->prepare("SELECT id, name FROM player ");
      $sth->execute();
      $player = $sth->fetchAll();
    }

    catch (PDOException $e) {
      echo "Error connecting to database...";
    }

    for ($i=0; $i < count($player) ; $i++) {

      echo "<option class=\"drop\" value=\"{$player[$i]['id']}\">{$player[$i]['name']}</option>";

    }




     ?>

     </select>

     <p></p>

     <input type="password" name="pass" placeholder="Password">

     <p></p>

     <input type="submit" name="submit" value="Log in">

     </form>

  </body>
</html>
