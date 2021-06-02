<?php
  session_start();

  require '../Config.php';

 ?>

<html>
  <head>
    <title>Mememon</title>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>
    <script src = "gym.js">
    </script>
    <link href = "mememon.css" type = "text/css" rel = "stylesheet" />
    <link href = "gym.css" type = "text/css" rel = "stylesheet" />
  </head>

  <body class = "background">
    <div class = "mainpage">


      <table>

        <?php

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

        $_SESSION['beatmason'] = $info['beatmason'];
        $_SESSION['beatbob'] = $info['beatbob'];
        $_SESSION['beatjeff'] = $info['beatjeff'];
        $_SESSION['beatbigboi'] = $info['beatbigboi'];

        for ($i=0; $i < 37; $i++) {

          echo "<tr>";

          for ($e=0; $e < 81; $e++) {

            if (($i == 19 || $i == 20 || $i == 21 || $i == 22 || $i == 23) && $e == 68 && $_SESSION['beatmason'] == 0) {
              echo "<td class=\"floor trainerone\"></td>";
            }

            elseif (($i == 1 || $i == 2 || $i == 3 || $i == 4 || $i == 5 || $i == 6) && $e == 69 && $_SESSION['beatbob'] == 0) {
              echo "<td class=\"floor trainertwo\"></td>";
            }

            elseif (($e == 4 || $e == 5 || $e == 6 || $e == 7 || $e == 8 || $e == 9 || $e == 10 || $e == 11 || $e == 12 || $e == 13 || $e == 13) && $i == 23 && $_SESSION['beatjeff'] == 0) {
              echo "<td class=\"floor trainerthree\"></td>";
            }

            elseif (($e == 34 || $e == 36) && $i == 0 && $_SESSION['beatbob'] == 0) {
              echo "<td class=\"floor gymleader\"></td>";
            }

            else {
              echo "<td class=\"floor\"></td>";
            }

          }

          echo "</tr>";
        }

         ?>


      </table>

      <div id = "gamealerts">

        <form action="redirect.php" method="post">
          <select name="location" class="none">
            <option class="hidden" value="60"></option>
          </select>
          <button id = "battle" class="hidden"> Exit Gym </button>
        </form>

        <h1 class="trainer">Time to fight!!!</h1>

        <?php
          echo $_SESSION['gamechat'];
        ?>

      </div>

      <p> <button id = "signout" class = "title"> Sign Out </button> </p>


    </div>
  </body>
</html>
