<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comic Archive</title>
  </head>
  <body>
    <h1>Comic Archive</h1>


    <?php
      require '../database.php';
      date_default_timezone_set('America/Los_Angeles');



      try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        $sth = $dbh->prepare("SELECT comicID FROM comic ORDER BY comicID DESC LIMIT 1");
        $sth->execute();
        $high = $sth->fetch();
      }

      catch (PDOException $e) {
        echo "Error connecting to database...";
      }

      for ($i=1; $i <= $high[0]; $i++) {

        try {
          $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

          $sth = $dbh->prepare("SELECT id FROM comic WHERE comicID = :id");
          $sth->bindValue(':id', $i);
          $sth->execute();
          $comic1 = $sth->fetch();
        }
        catch (PDOException $e) {
          echo "Error connecting to database...";
        }

        $link = $i - 1;

        echo "<p><a href='https://atdpsites.berkeley.edu/apadmawar/aic/day7/comic.php?id={$link}'>Comic #{$i}</a></p>";


      }


     ?>

  </body>
</html>
