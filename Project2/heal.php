<?php
  session_start();

  require '../Config.php';

  try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT * FROM ownership JOIN player ON player.id = ownership.player_id JOIN mememon ON mememon.id = ownership.mememon_id WHERE ownership.player_id = :id");
    $sth->bindValue(':id', $_SESSION['id']);
    $sth->execute();
    $max = $sth->fetch();

  }

  catch (PDOException $e) {
    echo "Error connecting to database...";
  }


  try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("UPDATE player SET currenthp = :max where id = :id");
    $sth->bindValue(':id', $_SESSION['id']);
    $sth->bindValue(':max', $max['hp']);
    $sth->execute();
    $info = $sth->fetch();

  }

  catch (PDOException $e) {
    echo "Error connecting to database...";
  }

  $_SESSION['currentx'] = 42;
  $_SESSION['currenty'] = 17;

  header("Location: home.php");




 ?>
