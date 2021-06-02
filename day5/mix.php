<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Magic Mixerator Mix Results</title>
</head>
<body>
    <h1>Magic Mixerator Mix Results</h1>
    <?php

    $beans = htmlspecialchars($_POST["beans"]);
    $gems = htmlspecialchars($_POST["gems"]);

    

    if (isset($_POST["mixaction"])) {
      $action = htmlspecialchars($_POST["mixaction"]);

      if (filter_var($beans,FILTER_VALIDATE_INT) && filter_var($gems,FILTER_VALIDATE_INT)) {

        if ($action === "shake" || $action === "blend" || $action === "stir" || $action === "boil") {
          $mixActions = array("shake", "blend", "stir", "boil");

          echo "<p>You mixed together {$_POST['beans']} beans</p>";
          echo "<p>and {$_POST['gems']} gems</p>";
          echo "<p>to make ";
          if ($_POST['mixaction'] == "shake") {
            $amount = $_POST['gems'] * $_POST['beans'] - 3;
            echo "${amount} bouncy potions";
          }
          elseif ($_POST['mixaction'] == "blend") {
            $amount = $_POST['gems'] - $_POST['beans'];
            echo "${amount} heaps of healing powder";
          }
          elseif ($_POST['mixaction'] == "stir") {
            $amount = $_POST['gems'] / $_POST['beans'];
            echo "${amount} ounces of strength soup";
          }
          elseif ($_POST['mixaction'] == "boil") {
            $amount = ($_POST['gems'] + $_POST['beans']) * 1000;
            echo "${amount} puffs of monster repellent perfume";
          }
          echo ".</p>";
        }

        else {
          echo "<p>Please select a valid action!!!</p>";
        }


      }

      else {
        echo "<p>Input for beans and gems must be integers!!!!</p>";

      }
    }

    else {
      echo "<p>Please select a mixing action!!!!</p>";
    }






   ?>
   <p><a href="mix.html">Again!</a></p>
</body>
</html>
