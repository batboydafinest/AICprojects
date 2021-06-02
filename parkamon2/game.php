<?php
  session_start();

  require_once '../database.php';
  date_default_timezone_set('America/Los_Angeles');


  if (isset($_SESSION['playerID']) == false && isset($_POST['name']) == false) {
    header("Location: signin.php");
  }

  elseif (isset($_SESSION['playerID']) == true && isset($_POST['name']) == false) {
    $playerID = $_SESSION['playerID'];
  }

  elseif (isset($_SESSION['playerID']) == true && isset($_POST['name']) == true) {
    $playerID = $_SESSION['playerID'];

    try {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      $sth = $dbh->prepare("SELECT password_hash FROM player WHERE id = :id");
      $sth->bindValue(':id', $playerID);
      $sth->execute();
      $playerpass = $sth->fetch();
    }

    catch (PDOException $e) {
      echo "Error connecting to database...";
    }

    if (isset($_POST['pass']) == true) {
      $password = $_POST['pass'];

      if (password_verify($password, $playerpass[0]) == false) {
        header("Location: signin.php");
      }
    }
  }
  elseif (isset($_SESSION['playerID']) == false && isset($_POST['name']) == true) {
    $_SESSION['playerID'] = $_POST['parkaplayers'];
    $playerID = $_SESSION['playerID'];

    try {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      $sth = $dbh->prepare("SELECT password_hash FROM player WHERE id = :id");
      $sth->bindValue(':id', $playerID);
      $sth->execute();
      $playerpass = $sth->fetch();
    }

    catch (PDOException $e) {
      echo "Error connecting to database...";
    }

    if (isset($_POST['pass']) == true) {
      $password = $_POST['pass'];

      if (password_verify($password, $playerpass[0]) == false) {
        header("Location: signin.php");
      }
    }
  }




 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gotta coatch them all</title>
</head>
<body>


  <?php
  if (isset($_POST['parkaplayers'])) {
    $_SESSION['playerID'] = $_POST['parkaplayers'];
    $playerID = $_SESSION['playerID'];
  }

  else {
    $playerID = $_SESSION['playerID'];
  }




   ?>

  <h1>Let's coatch some parkamons</h1>

  <?php


  try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT name FROM player WHERE id = :id");
    $sth->bindValue(':id', $playerID);
    $sth->execute();
    $playername = $sth->fetch();
  }

  catch (PDOException $e) {
    echo "Error connecting to database...";
  }



  echo "<h1>Hello, {$playername[0]}</h1>";

   ?>

  <form action="catch.php" method="post">


      <input type="submit" name="submit" value="Catch">

    </form>

    <br>
    <br>

    <form action="rename.php" method="post">

      <select name="name">

        <?php

        try {
          $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

          $sth = $dbh->prepare("SELECT id FROM ownership ORDER BY id DESC LIMIT 1");
          $sth->execute();
          $high = $sth->fetch();
        }

        catch (PDOException $e) {
          echo "Error connecting to database...";
        }

        for ($i=1; $i <= $high[0] ; $i++) {

          try {
            $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

            $sth = $dbh->prepare("SELECT player.name, ownership.nickname, ownership.id FROM ownership JOIN player ON ownership.player_id = player.id JOIN parkamon ON ownership.parkamon_id = parkamon.id WHERE ownership.id = :id AND ownership.player_id = :pid");
            $sth->bindValue(':id', $i);
            $sth->bindValue(':pid', $playerID);
            $sth->execute();
            $renamedata = $sth->fetch();
          }

          catch (PDOException $e) {
            echo "Error connecting to database...";
          }

          if (isset($renamedata['name'])) {
            echo "<option value=\"{$renamedata['id']}\">{$renamedata['name']}'s {$renamedata['nickname']}</option>";
          }



        }


         ?>

      </select>


      <div> <textarea name="rename" rows="1" maxlength="8"></textarea> </div>

      <input type="submit" name="submit" value="Rename">


    </form>

    <br>
    <br>
    <br>

    <table>

      <tr>
        <td>Owner</td>
        <td>Breed</td>
        <td>Location</td>
        <td>Nickname</td>
      </tr>


    <?php




    try {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      $sth = $dbh->prepare("SELECT id FROM ownership ORDER BY id DESC LIMIT 1");
      $sth->execute();
      $high = $sth->fetch();
    }

    catch (PDOException $e) {
      echo "Error connecting to database...";
    }

    for ($i=1; $i <= $high[0] ; $i++) {

      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT player.name, parkamon.breed, parkamon.location, ownership.nickname FROM ownership JOIN player ON ownership.player_id = player.id JOIN parkamon ON ownership.parkamon_id = parkamon.id WHERE ownership.id = :id AND ownership.player_id = :pid");
        $sth->bindValue(':id', $i);
        $sth->bindValue(':pid', $playerID);
        $sth->execute();
        $info = $sth->fetch();
      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }

      if (isset($info['name'])) {
        echo "

        <tr>
          <td>{$info['name']}</td>
          <td>{$info['breed']}</td>
          <td>{$info['location']}</td>
          <td>{$info['nickname']}</td>
        </tr>

        ";
      }




    }


     ?>


     <p> <a href="signout.php">Log out</a> </p>

     </table>


  </body>
  </html>
