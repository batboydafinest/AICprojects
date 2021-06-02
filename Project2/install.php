<html>
<head>
    <title>Install Mememon DB</title>
</head>
<body>
<?php
require_once "../Config.php";
try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    $query = file_get_contents('mememon.sql');
    $dbh->exec($query);
    echo "<p>Successfully installed databases</p>";
}
catch (PDOException $e) {
    echo "<p>Error: {$e->getMessage()}</p>";
}
?>
</body>
</html>
