<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>comic database</title>
  </head>
  <body>

    <table>
      <tr>
        <td>Image</td>
        <td>Title</td>
        <td>Date</td>
      </tr>



    <?php

      require '../database.php';
      date_default_timezone_set('America/Los_Angeles');

      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT * FROM comic ORDER BY comicID DESC LIMIT 1");
        $sth->execute();
        $comic1 = $sth->fetch();

      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }

      $myDate = new DateTime($comic1['date']);
      $prettyDate = $myDate->format("m/d/Y");

      echo "
        <tr>
          <td><img src = 'http://chalkboardmanifesto.com/{$comic1['fileName']}'</td>
          <td>{$comic1['title']}</td>
          <td>{$prettyDate}</td>
        </tr>

      ";


     ?>

     </table>



  </body>
</html>
