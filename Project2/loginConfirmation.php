<?php
	session_start();
	require '../Config.php';
	if (!isset($_SESSION['username']) && !isset($_POST['username'])){
		header('Location: https://atdpsites.berkeley.edu/jwong/Project2/login.php');
	}

	try {
	    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

      if (isset($_POST["username"]) && strlen($_POST['username']) > 0 && isset($_POST["password"]) && strlen($_POST['password']) > 0){

        $sth = $dbh->prepare("SELECT * FROM player where name = :username");
				$sth -> bindValue(':username', $_POST['username']);
				$sth -> execute();
        $player = $sth -> fetchAll();

		echo "<html>
		  <head>
			<title> Mememon Login Confirmation </title>
			<script
			  src='https://code.jquery.com/jquery-3.3.1.js'
			  integrity='sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=''
			  crossorigin='anonymous'>
			</script>
			<script src = 'mememon.js'>
			</script>
			<link href = 'mememon.css' type = 'text/css' rel = 'stylesheet' />
		  </head>

		  <body class = 'background'>
			<div class = 'mainpage'>";


        if(count($player) === 0){
          echo "<p> Invalid username.</p>";
		  		echo " <p> <button type = 'button' id = 'loginConfBack' class = 'login'> Back </button> </p>";
        }

		elseif(count($player) > 0){
			if (password_verify($_POST['password'], $player[0]['pass'])){
				if (!(isset($_SESSION['id']))){
					$_SESSION['id'] = $player[0]['id'];
					$_SESSION['name'] = $player[0]['nick'];
					if ($player[0]['beatbigboi'] == 1){
	          $_SESSION['gamechat'] = "You win, you memester!";
	        }
	        else{
	          $_SESSION['gamechat'] = "";
	        }

					$sth = $dbh->prepare("SELECT * FROM player where id = :id");
	        $sth->bindValue(':id', $_SESSION['id']);
	        $sth->execute();
	        $info = $sth->fetch();

					$_SESSION['beatmason'] = $info['beatmason'];
					$_SESSION['beatbob'] = $info['beatbob'];
					$_SESSION['beatjeff'] = $info['beatjeff'];
					$_SESSION['beatbigboi'] = $info['beatbigboi'];
				}
				echo "<p> Welcome back ";
				echo htmlspecialchars($_SESSION['name']);
				echo "! </p>";
				echo " <p> <button type = 'button' id = 'loginConfCont' class = 'game'> Continue </button> </p>";
      }
			else{
				echo "<p> Invalid password.</p>";
				echo " <p> <button type = 'button' id = 'loginConfBack' class = 'login'> Back </button> </p>";
			}
        }

			echo "</div>
		  	</body>
		</html>";

			}
	}
	catch (PDOException $e) {
		echo "<p>Error connecting to database!</p>";
	}
?>
