<?php
  session_start();

  require '../Config.php';


  if (isset($_SESSION['currentlocation']) && isset($_SESSION['currentx']) && isset($_SESSION['currenty'])) {

    $id = $_SESSION['id'];
    $currentlocation = $_SESSION['currentlocation'];
    $currentx = $_SESSION['currentx'];
    $currenty = $_SESSION['currenty'];

    try {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      $sth = $dbh->prepare("UPDATE player SET currentlocation = :location, currentx = :x, currenty :y where id = :id");
      $sth->bindValue(':id', $id);
      $sth->bindValue(':location', $currentlocation);
      $sth->bindValue(':x', $currentx);
      $sth->bindValue(':y', $currenty);
      $sth->execute();


    }

    catch (PDOException $e) {
      echo "Error connecting to database...";
    }

    header("Location: titlePage.php");
  }

  else {
    header("Location: titlePage.php");
  }

 ?>
