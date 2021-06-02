<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>comicID database</title>
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

      $id = $_GET["id"];


      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT comicID FROM comic ORDER BY comicID DESC LIMIT 1");
        $sth->execute();
        $high = $sth->fetch();
      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }

      if ($id <= 0) {
        $id = 1;
      }

      elseif ($id >= $high[0]) {
        $id = $high[0];
      }


      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        if (isset($id) && filter_var($id, FILTER_VALIDATE_INT) && $id > 0 && $id <= $high[0]) {
          $sth = $dbh->prepare("SELECT * FROM comic WHERE comicID = :id");
          $sth->bindValue(':id', $id);
          $sth->execute();
          $comic1 = $sth->fetch();

        }

        else {
          $sth = $dbh->prepare("SELECT * FROM comic ORDER BY comicID DESC LIMIT 1");
          $sth->execute();
          $comic1 = $sth->fetch();

        }



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

     <?php

     $plus = $id + 1;
     $minus = $id - 1;

     echo "<h4><a href='https://atdpsites.berkeley.edu/apadmawar/aic/day7/comic.php?id=1'>First</a> ---- <a href='https://atdpsites.berkeley.edu/apadmawar/aic/day7/comic.php?id={$minus}'>Back</a> ---- <a href='https://atdpsites.berkeley.edu/apadmawar/aic/day7/comic.php?id={$plus}'>Next</a> ---- <a href='https://atdpsites.berkeley.edu/apadmawar/aic/day7/comic.php?id={$high[0]}'>Last</a><h4>";


      ?>







  </body>
</html>
