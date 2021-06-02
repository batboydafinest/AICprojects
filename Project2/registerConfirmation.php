<html>
  <head>
    <title> Mememon Register Confirmation </title>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>
    <script src = "mememon.js">
    </script>
    <link href = "mememon.css" type = "text/css" rel = "stylesheet" />
  </head>

  <body class = "background">
    <div class = "mainpage">
      <?php
        require '../Config.php';

        try {
        	$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

          $sth = $dbh->prepare("SELECT * FROM player WHERE name = :username");
          $sth -> bindValue(':username', $_POST['username']);
          $sth->execute();
          $usernames = $sth->fetchAll();
          $colorchoices = array("red");
          if (isset($_POST['name']) && strlen($_POST['name']) > 0 && isset($_POST['username']) &&  strlen($_POST['username']) > 0 && strlen($_POST['username']) < 20 && isset($_POST['password']) && strlen($_POST['password']) > 0 && isset($_POST["hat"]) && in_array($_POST["hat"], $colorchoices) && count($usernames) === 0){
              $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

              $sth = $dbh->prepare("INSERT INTO player (name, pass, nick, hat)
      		      VALUES (:username, :hashPassword, :nickname, :hat)");
      	      $sth -> bindValue(':username', $_POST['username']);
      	      $sth -> bindValue(':hashPassword', $passwordHash);
              $sth -> bindValue(':nickname', $_POST['name']);
              $sth -> bindValue(':hat', $_POST['hat']);
              $ifExecuted = $sth -> execute();

              try {
                $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

                $sth = $dbh->prepare("SELECT * FROM player WHERE name = :id");
                $sth->bindValue(':id', $_POST['username']);
                $sth->execute();
                $player = $sth->fetch();

              }



              catch (PDOException $e) {
                echo "Error connecting to database...";
              }

              // var_dump($player);
              //
              // try {
              //   $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
              //
              //   $sth = $dbh->prepare("SELECT * FROM ownership JOIN player ON player.id = ownership.player_id JOIN mememon ON mememon.id = ownership.mememon_id WHERE ownership.player_id = :id");
              //   $sth->bindValue(':id', $player['id']);
              //   $sth->execute();
              //   $max = $sth->fetch();
              //
              // }
              //
              // catch (PDOException $e) {
              //   echo "Error connecting to database...";
              // }


              // try {
              //   $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
              //
              //   $sth = $dbh->prepare("UPDATE player SET currenthp = :max where id = :id");
              //   $sth->bindValue(':id', $player['id']);
              //   $sth->bindValue(':max', $max['hp']);
              //   $sth->execute();
              //   $info = $sth->fetch();
              //
              // }
              //
              // catch (PDOException $e) {
              //   echo "Error connecting to database...";
              // }




              if ($ifExecuted){
                  echo "<p>";
                  echo "Registration complete. Welcome to Mememon, ";
                  echo htmlspecialchars($_POST["name"]);
                  echo "! To aid you in your upcoming journey, we shall grant you a partner in crime... </p>";
                  $sth = $dbh->prepare("SELECT * FROM mememon
                    ORDER BY RAND()
                    LIMIT 1");
                  $sth -> execute();
              	  $partner = $sth -> fetch();
                  $sth = $dbh->prepare("INSERT INTO ownership(player_id, mememon_id)
                  VALUES (:playerid, :mememonid)");
            			$sth -> bindValue(':playerid', $player['id']);
            			$sth -> bindValue(':mememonid', $partner['id']);
            			$sth -> execute();

                  $sth = $dbh->prepare("UPDATE player SET currenthp = :max where name = :username AND pass = :hashPassword AND nick = :nickname");
                  $sth -> bindValue(':username', $_POST['username']);
                  $sth -> bindValue(':hashPassword', $passwordHash);
                  $sth -> bindValue(':nickname', $_POST['name']);
                  $sth->bindValue(':max', $partner['hp']);
                  $sth->execute();

                  $_SESSION['currenthp'] = $partner['hp'];
                  echo "<img src = {$partner['imgpath']} id = 'partner'>";
                  echo "<p> You get ";
                  echo $partner['meme'];
                  echo "! Take good care of it and best of luck on your journey!";
                  echo "</p>";
                  echo "<p> <button type = 'button' id = 'home' class = 'title'> Home </button>  </p>";
                  echo "<p> <button type = 'button' id = 'continue' class = 'login'> Continue </button>  </p>";
              }
          }
          else{
            echo "<p> Registration failed. ";
            if (count($usernames) === 1){
              echo "Username already in use. ";
            }
            if (!(isset($_POST["name"])) || strlen($_POST['name']) <= 0){
              echo "Please input a valid name. ";
            }
            if (!(isset($_POST["username"])) || strlen($_POST['username']) <= 0 || strlen($_POST['username']) > 20){
              echo "Please input a valid username. ";
            }
            if (!(isset($_POST["password"])) || strlen($_POST['password']) <= 0){
              echo "Please input a valid password. ";
            }
            if (!(isset($_POST["hat"])) || !(in_array($_POST["hat"], $colorchoices))){
              echo "Please choose a valid color. ";
            }
            echo "Please try again. </p>";
            echo "<p> <button type = 'button' id = 'tryAgain' class = 'register'> Try Again </button> </p>";
            }
      }
      catch (PDOException $e) {
          echo "<p>Error connecting to database!</p>";
      }

      ?>
    </div>
  </body>
</html>
