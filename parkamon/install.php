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
        $query = file_get_contents('parkamon.sql');
        $dbh->exec($query);
        echo "<p>Successfully installed databases</p>";
    }
    catch (PDOException $e) {
        echo "<p>Error</p>";
    }

    //http://php.net/manual/en/function.file-get-contents.php
    //http://php.net/manual/en/pdo.exec.php


    ?>





  </body>
</html>
