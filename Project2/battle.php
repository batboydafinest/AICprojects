<?php
  session_start();

  require '../Config.php';

  try {
    $win = false;

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    $sth = $dbh->prepare("SELECT * FROM ownership JOIN player ON player.id = ownership.player_id JOIN mememon ON mememon.id = ownership.mememon_id WHERE ownership.player_id = :id");
    $sth -> bindValue(':id', $_SESSION['id']);
    $sth -> execute();
    $playersquad = $sth -> fetch();

    $sth = $dbh->prepare("SELECT currenthp FROM player WHERE id = :id");
    $sth -> bindValue(':id', $_SESSION['id']);
    $sth -> execute();
    $playerhp = $sth -> fetch();

    if ($playersquad['beatbigboi'] != 1){


    if ($playersquad['beatmason'] == 0){
      $bossid = 4;
    }
    elseif ($playersquad['beatbob'] == 0){
      $bossid = 3;
    }
    elseif ($playersquad['beatjeff'] == 0){
      $bossid = 2;
    }
    elseif ($playersquad['beatbigboi'] == 0){
      $bossid = 1;
    }

    $sth = $dbh->prepare("SELECT * FROM ownership JOIN player ON player.id = ownership.player_id JOIN mememon ON mememon.id = ownership.mememon_id WHERE ownership.player_id = :id");
    $sth -> bindValue(':id', $bossid);
    $sth -> execute();
    $opponentmememon = $sth -> fetch();
    $opponent = $opponentmememon;

    $sth = $dbh->prepare("SELECT currenthp FROM player WHERE id = :id");
    $sth -> bindValue(':id', $opponent['player_id']);
    $sth -> execute();
    $opponenthp = $sth -> fetch();

    if($playerhp[0] > 0 && $opponenthp[0] > 0){
      if (!isset($_GET['turn'])){
        if ($opponent['spd'] > $playersquad['spd']){
            $turn = -1;
        }
        elseif ($opponent['spd'] < $playersquad['spd']){
            $turn = 1;
        }
        elseif ($opponent['spd'] == $playersquad['spd']){
            $turn = 1;
        }
        $_SESSION['gamechat'] .= "<p> A challenger approaches! </p>";
      }
      else {
        $turn = $_GET['turn'];
      }
      if ($turn == -1){
        header("Location: https://atdpsites.berkeley.edu/jwong/Project2/battlehandler.php?atkstat={$opponent['atk']}&opponentid={$playersquad['player_id']}&turn={$turn}&ownhealth={$opponenthp[0]}&meme={$opponent['meme']}");
      }

      echo "<html>
        <head>
        <title> Battle Sequence </title>
        <script
          src='https://code.jquery.com/jquery-3.3.1.js'
          integrity='sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=''
          crossorigin='anonymous'>
        </script>
        <script src = 'mememon.js'>
        </script>
        <link href = 'mememon.css' type = 'text/css' rel = 'stylesheet' />
        <link href = 'battle.css' type = 'text/css' rel = 'stylesheet' />
      </head>
      <body class = 'background'>
        <div class = 'mainpage'>

    <div id = 'battlearena'>";

    echo "<div id = 'opponent'>";
    echo "<p>";
    echo $opponent['meme'];
    echo "</p>";
    echo "<p> HP: ";
    echo $opponenthp[0];
    echo "</p>";
    echo "<img src = {$opponent['imgpath']} id = 'opponent'>";
    echo "</div>";


    echo "<p>";
    echo $playersquad['meme'];
    echo "</p>";
    echo "<p> HP: ";
    echo $playerhp[0];
    echo "</p>";
    echo "<img src = {$playersquad['imgpath']} id = 'player'>";


    if ($turn == 1){
        echo "<div id = 'abilities'>";
          echo "<form action = 'battlehandler.php' method = 'get'>";
            echo "<button type = 'submit' id = 'tackle'> Tackle </button>";
            echo "<input type = 'hidden' name= 'atkstat' value= '";
            echo $playersquad['atk'];
            echo " '>";
            echo "<input type = 'hidden' name= 'opponentid' value= '";
            echo $opponent['player_id'];
            echo " '>";
            echo "<input type = 'hidden' name= 'turn' value= '";
            echo $turn;
            echo " '>";
            echo "<input type = 'hidden' name= 'ownhealth' value= '";
            echo $playerhp[0];
            echo " '>";
            echo "<input type = 'hidden' name= 'meme' value= '";
            echo $playersquad['meme'];
            echo " '>";
          echo "</form>";
        echo "</div>";
    }
    echo "<div id = 'gamealerts'>";
    echo $_SESSION['gamechat'];
    echo "</div>

    </div>
    </body>
    </html>";
}
elseif ($playerhp[0] == 0 || $opponenthp[0] == 0){
  if ($playerhp[0] == 0){
    $_SESSION['gamechat'] .= "<p> {$playersquad['meme']} has fainted! </p> <p> Go heal at home. </p>";
  }
  elseif ($opponenthp[0] == 0){
    $_SESSION['gamechat'] .= "<p> {$opponent['meme']} has fainted!";
    if ($bossid == 4){
      $sth = $dbh->prepare("UPDATE player SET beatmason = 1 WHERE id = :id");
      $sth -> bindValue(':id', $_SESSION['id']);
      $sth -> execute();
    }
    elseif ($bossid == 3){
      $sth = $dbh->prepare("UPDATE player SET beatbob = 1 WHERE id = :id");
      $sth -> bindValue(':id', $_SESSION['id']);
      $sth -> execute();    }
    elseif ($bossid == 2){
      $sth = $dbh->prepare("UPDATE player SET beatjeff = 1 WHERE id = :id");
      $sth -> bindValue(':id', $_SESSION['id']);
      $sth -> execute();    }
    elseif ($bossid == 1){
      $sth = $dbh->prepare("UPDATE player SET beatbigboi = 1 WHERE id = :id");
      $sth -> bindValue(':id', $_SESSION['id']);
      $sth -> execute();
      $win = true;
    }
  }
  $sth = $dbh->prepare("UPDATE player SET currenthp = :max where id = :id");
  $sth->bindValue(':id', $opponent['player_id']);
  $sth->bindValue(':max', $opponent['hp']);
  $sth->execute();
  echo "<html>
    <head>
    <title> Battle Sequence </title>
    <script
      src='https://code.jquery.com/jquery-3.3.1.js'
      integrity='sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=''
      crossorigin='anonymous'>
    </script>
    <script src = 'mememon.js'>
    </script>
    <link href = 'mememon.css' type = 'text/css' rel = 'stylesheet' />
  </head>
  <body class = 'background'>
    <div class = 'mainpage'>";

  echo "<form action = 'redirect.php' method = 'post'>";
    echo "<button type = 'submit'> Back </button>";
    echo "<input type = 'hidden' name= 'location' value= '30'>";
    if ($win){
      echo "<input type = 'hidden' name= 'win' value= 'win'>";
    }
  echo "</form>";
  echo "<div id = 'gamealerts'>";
  echo $_SESSION['gamechat'];
  echo "</div>

  </div>
  </body>
  </html>";
}
}
elseif ($playersquad['beatbigboi'] == 1){
  echo "You have already won.";
}
}
catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
}
?>
