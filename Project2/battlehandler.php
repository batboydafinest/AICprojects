<?php
session_start();

require '../Config.php';

try {
  $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

  $attack = $_GET['atkstat'];
  //echo $_GET['opponentid'];

  $sth = $dbh->prepare("SELECT currenthp FROM player WHERE id = :id");
  $sth -> bindValue(':id', $_GET['opponentid']);
  $sth -> execute();
  $opponenthp = $sth -> fetch();
  $health = $opponenthp[0];

  if ($health == 0 || $_GET['ownhealth'] == 0){
    header ('Location: https://atdpsites.berkeley.edu/jwong/Project2/battle.php');
  }

  $health = $health - $attack;

  if ($health < 0){
    $health = 0;
  }

  $_SESSION['gamechat'] .= "<p> {$_GET['meme']} used tackle!";

  $sth = $dbh->prepare("UPDATE player SET currenthp = :health WHERE id = :id");
  $sth -> bindValue(':health', $health);
  $sth -> bindValue(':id', $_GET['opponentid']);
  $sth -> execute();

}
catch (PDOException $e) {
	echo "<p>Error connecting to database!</p>";
}
?>

<html>
  <head>
    <script type="text/javascript">
      window.onload = function() {
        document.getElementById('form').submit();
      };
    </script>

   <!-- HTML meta refresh URL redirection -->
   <meta http-equiv="refresh"
   content="0; url=http://atdpsites.berkeley.edu/jwong/Project2/battle.php">
</head>
<body>
  <form id = "form" action = "battle.php" method = "GET">
    <input type = 'hidden' name= 'turn' value= '<?php
      $turn = $_GET['turn'] * -1;
      echo $turn;
    ?>'>
  </form>
</body>
</html>
