<?php
  session_start();

  require '../Config.php';

    if (isset($_POST['location'])) {


      if ($_POST['location'] == 10) {
        $_SESSION['currentlocation'] = 2;
        $_SESSION['currentx'] = 18;
        $_SESSION['currenty'] = 29;
      }

      if ($_POST['location'] == 20) {
        $_SESSION['currentlocation'] = 1;
        $_SESSION['currentx'] = 55;
        $_SESSION['currenty'] = 27;
      }

      if ($_POST['location'] == 30) {
        $_SESSION['currentlocation'] = 3;
        $_SESSION['currentx'] = 40;
        $_SESSION['currenty'] = 36;
        if (isset($_POST['win']) && ($_POST['win']) == 'win'){
          $_SESSION['gamechat'] = "You win, you memester!";
        }
        else{
          $_SESSION['gamechat'] = "";
        }
      }

      if ($_POST['location'] == 40) {
        $_SESSION['currentlocation'] = 4;
        $_SESSION['currentx'] = 25;
        $_SESSION['currenty'] = 27;
      }

      if ($_POST['location'] == 50) {
        $_SESSION['currentlocation'] = 2;
        $_SESSION['currentx'] = 63;
        $_SESSION['currenty'] = 27;
      }

      if ($_POST['location'] == 60) {
        $_SESSION['currentlocation'] = 2;
        $_SESSION['currentx'] = 55;
        $_SESSION['currenty'] = 12;
      }
    }



  if (isset($_SESSION['currentlocation']) == false || isset($_SESSION['currentx'])== false || isset($_SESSION['currenty']) == false) {
    try {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      $sth = $dbh->prepare("SELECT * FROM player WHERE id = :id");
      $sth->bindValue(':id', $_SESSION['id']);
      $sth->execute();
      $info = $sth->fetch();

    }

    catch (PDOException $e) {
      echo "Error connecting to database...";
    }

    $_SESSION['currentlocation'] = $info['currentlocation'];
    $_SESSION['currentx'] = $info['currentx'];
    $_SESSION['currenty'] = $info['currenty'];

  }

  if ($_SESSION['currentlocation'] == 1) {
    header("Location: home.php");
  }

  if ($_SESSION['currentlocation'] == 2) {
    header("Location: game.php");
  }

  if ($_SESSION['currentlocation'] == 3) {
    header("Location: gym.php");
  }

  if ($_SESSION['currentlocation'] == 4) {
    header("Location: lab.php");
  }



 ?>
