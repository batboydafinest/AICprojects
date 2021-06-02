<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <style>
      .fire {
        background-color: orange;
      }
    </style>
    <title>Spoilers</title>
  </head>
  <body>

    <table>

      <?php


        $popculture["Dark Knight"] = "This movie is fire. It shows the evolution of Harvey Dent, the White Knight, and how the Joker manages to turn him to a villan at the end of the movie. Luckily Batman stops him, but Harvey has already killed some people. ";
        $popculture["Captain America: the First Avenger"] = "This movie sucks. Cap didn't really have a challenge, and especially at the end, he could have made sure the plane crashed in the ice, and used the mini jets to escape and live happily ever after. ";
        $popculture["Inception"] = "This movie is fire. It is the whole concept of having a dream within a dream, and how you can implant ideas in people's minds. This is a complex movie which Chris and John Nolan do a great job making.";
        $popculture["The Social Network"] = "This movie is fire. It is the story of Mark Zuckerburg and how he created Facbook. Even though not all the information is acurate and they made some things up, they still manged to get the audience engaged and give a gist of the story.";
        $popculture["Batman V Superman"] = "This movie sucked. The whole plotline of the movie was that both their parents were named Martha.";
        $popculture["The Amazing Spiderman"] = "It was a good movie, but the people in the movie don't look like they are in high school. They atleast had to be in college.";
        $popculture["The Hunger Games"] = "It was a good movie, but I would not tribute myself to watch that movie again. The plot was good but the part where they added the wolves at the end to kill everyone was nonsense, I mean the whole thing about killing people was nonsense, but whatever.";


        ksort($popculture);

        foreach ($popculture as $key => $value) {

          if (strpos ( $value, "fire") !== false) {

            $content = str_rot13($value);

            echo "
              <tr>
                <td class=\"fire\"><p>{$key}</p></td>
                <td class=\"fire\"><p>{$content}</p></td>
              </tr>
              ";
          }

          else {
            $content = str_rot13($value);

            echo "
              <tr>
                <td><p>{$key}</p></td>
                <td><p>{$content}</p></td>
              </tr>
              ";
          }


        }

       ?>

    </table>


  </body>
</html>
