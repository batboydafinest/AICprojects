<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>parkamon list</title>
  </head>
  <body>
    <h1>Table of Parkamon Breeds and Location</h1>

    <table>
      <tr>
        <td>Breed</td>
        <td>Location</td>
      </tr>

      <?php

      require '../database.php';
      date_default_timezone_set('America/Los_Angeles');

      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT id FROM parkamon ORDER BY id DESC LIMIT 1");
        $sth->execute();
        $high = $sth->fetch();
      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }


      for ($i=1; $i <= $high[0] ; $i++) {

        try {
          $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

          $sth = $dbh->prepare("SELECT breed, location FROM parkamon WHERE id = :i");
          $sth->bindValue(':i', $i);
          $sth->execute();
          $parkamon = $sth->fetch();

        }

        catch (PDOException $e) {
          echo "Error connecting to database...";
        }

        echo "

        <tr>
          <td>{$parkamon['breed']}</td>
          <td>{$parkamon['location']}</td>
        </tr>

        ";


      }

       ?>

    </table>

  </body>
</html>
