<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gotta coatch them all</title>
</head>
<body>

  <h1>Let's coatch some parkamons</h1>

  <form action="catch.php" method="post">



    <h3>Pick your trainer</h3>
    <select name="trainers">

      <?php

      require '../database.php';
      date_default_timezone_set('America/Los_Angeles');

      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT id FROM player ORDER BY id DESC LIMIT 1");
        $sth->execute();
        $high = $sth->fetch();
      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }


      for ($i=1; $i <= $high[0] ; $i++) {

        try {
          $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

          $sth = $dbh->prepare("SELECT name, id FROM player WHERE id = :i");
          $sth->bindValue(':i', $i);
          $sth->execute();
          $trainer = $sth->fetch();

        }

        catch (PDOException $e) {
          echo "Error connecting to database...";
        }

        echo "

        <option value=\"{$trainer['id']}\">{$trainer['name']}</option>

        ";

      }

        ?>

      </select>

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



          try {
            $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

            $sth = $dbh->prepare("SELECT player.name, ownership.nickname, ownership.id FROM ownership JOIN player ON ownership.player_id = player.id JOIN parkamon ON ownership.parkamon_id = parkamon.id ");
            $sth->execute();
            $renamedata = $sth->fetchAll();
          }

          catch (PDOException $e) {
            echo "Error connecting to database...";
          }

        for ($i=0; $i <= ($high[0] - 1) ; $i++) {

          echo "<option value=\"{$renamedata[$i]['id']}\">{$renamedata[$i]['name']}'s {$renamedata[$i]['nickname']}</option>";

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



      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT player.name, parkamon.breed, parkamon.location, ownership.nickname FROM ownership JOIN player ON ownership.player_id = player.id JOIN parkamon ON ownership.parkamon_id = parkamon.id  ORDER BY player.name, parkamon.breed, ownership.nickname");
        $sth->execute();
        $info = $sth->fetchAll();
      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }

    

      for ($i=0; $i <= ($high[0]-1) ; $i++) {

      echo "

      <tr>
        <td>{$info[$i]['name']}</td>
        <td>{$info[$i]['breed']}</td>
        <td>{$info[$i]['location']}</td>
        <td>{$info[$i]['nickname']}</td>
      </tr>

      ";


    }


     ?>

     </table>


  </body>
  </html>
