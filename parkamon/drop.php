<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>parkamon database</title>
  </head>
  <body>
    <?php
    require_once "../database.php";
    try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        //create comic table
        $query = file_get_contents('drop.sql');
        $dbh->exec($query);
        echo "<p>Successfully deleted databases</p>";
    }
    catch (PDOException $e) {
        echo "<p>Error</p>";
    }



    ?>





  </body>
</html>
