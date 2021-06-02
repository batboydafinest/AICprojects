<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jennasa's Favorite Things</title>
  </head>
  <body>

    <?php

      $tvshows = ["friends", "how i met your mother", "psych"];
      $boardgames = ["bang", "ticket to ride", "coup"];
      $drinks = ["boba", "milkshake", "lemonade"];

      $favoriteFood = ["pancakes", "french toast", "french fries", "rice"];
      $favoriteShows = ["The 100", "Friends", "The Heirs", "Healer"];
      $favoriteGames = ["Fortnite", "League of Legends", "something else(??)"];

    ?>

    <h1>Jennasa's Favorite Things</h1>

    <h3>Favorite Foods</h3>

    <ul>
      <?php
        foreach ($favoriteFood as $food) {
          echo "<li> {$food} </li>";
        }
       ?>
    </ul>

    <h3>Jennasa's Favorite TV Shows</h3>

    <ol>
      <?php
        foreach ($favoriteShows as $shows) {
          echo "<li>{$shows}</li>";
        }
       ?>
    </ol>

    <h3>Jennasa's Favorite Games</h3>

    <ol>
      <?php
        foreach ($favoriteGames as $games) {
          echo "<li>{$games}</li>";
        }
       ?>
    </ol>


  </body>
</html>
