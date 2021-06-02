<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Song Lyrics Quiz</title>
    <link rel="stylesheet" href="quiz.css">
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
      <script src="quiz.js"></script>

  </head>
  <body>
    <?php
    require_once "external.php";
    ?>

    <h3>Identify the song lyrics!!!</h3>

    <form class="form" action="quizresults.php" method="post">

      <div class="box">

        <h2>First some questions....</h2>

        <p>What is you name? <input type="text" name="name" maxlength="25" required></p>
        <br>

        <p>What is you gender? <select name="gender">
          <option class="drop" value="male">Male</option>
          <option class="drop" value="female">Female</option>
          <option class="drop" value="other">Other</option>
        </select>
      </p>

        <br>

        <p>What is your birthday? (mmddyyyy) <input type="number" name="bday" required></p>

        <br>

        <p>What is your email? <input type="email" name="email" required></p>

        <br>

        <p>What is your address? <input type="text" name="address"></p>
        <br>

      </div>

      <div class="box">
        <p>Your stare was holding, Ripped jeans, skin was showing, Hot night, wind was blowing, Where you think you're going, baby?</p>


        <div>
          <label for="heart">Selena Gomez - The Heart Wants What it Wants</label>
          <input type="radio" name="q1" value="Heart Wants What it Wants" id="heart" required>
        </div>

        <div>
          <label for="call">Carly Rae Jepsen - Call Me Maybe</label>
          <input type="radio" name="q1" value="Call Me Maybe" id="call">
        </div>

        <div>
          <label for="name">Bebe Rexha - In the Name of Love</label>
          <input type="radio" name="q1" value="In the Name of Love" id="name">
        </div>
      </div>

      <div class="box">
        <p>Never pick up, never call me, You know we're runnin' out of time, Never pick up when you want me, Now I gotta draw a line</p>


        <div>
          <label for="would">Zara Larsson - I Would like</label>
          <input type="radio" name="q2" value="I Would Like" id="would" required>
        </div>

        <div>
          <label for="now">Halsey - Now or Never</label>
          <input type="radio" name="q2" value="Now Or Never" id="now">
        </div>

        <div>
          <label for="starving">Hailee Steinfeld - Starving</label>
          <input type="radio" name="q2" value="Starving" id="starving">
        </div>
      </div>

      <div class="box">
        <p>I'll take every single piece of the blame if you want me to, But you know that there is no innocent one in this game for two</p>


        <div>
          <label for="sorry">Justin Bieber - Sorry</label>
          <input type="radio" name="q3" value="Sorry" id="sorry" required>
        </div>

        <div>
          <label for="mirror">Justin Timberlake - Mirrors</label>
          <input type="radio" name="q3" value="Mirrors" id="mirror">
        </div>

        <div>
          <label for="letmelove">DJ Snake/Justin Bieber - Let Me Love You</label>
          <input type="radio" name="q3" value="Let Me Love You" id="letmelove">
        </div>
      </div>

      <div class="box">
        <p>Something in you lit up heaven in me, The feeling won't let me sleep, 'Cause I'm lost in the way you move, the way you feel</p>


        <div>
          <label for="diamonds">Rihanna - Diamonds</label>
          <input type="radio" name="q4" value="Diamonds" id="diamonds" required>
        </div>

        <div>
          <label for="down">Daya/The Chainsmokers - Don't Let Me Down</label>
          <input type="radio" name="q4" value="Don't Let Me Down" id="down">
        </div>

        <div>
          <label for="kiss">Dua Lipa/Calvin Harris - One Kiss</label>
          <input type="radio" name="q4" value="One Kiss" id="kiss">
        </div>
      </div>

      <div class="box">
        <p>He took me back to East Atlanta</p>


        <div>
          <label for="havana">Camila Cabello - Havana</label>
          <input type="radio" name="q5" value="Havana" id="havana" required>
        </div>

        <div>
          <label for="srynot">Demi Lovato - Sorry Not Sorry</label>
          <input type="radio" name="q5" value="Sorry Not Sorry" id="srynot">
        </div>

        <div>
          <label for="wolves">Selena Gomez/Marshmello - Wolves</label>
          <input type="radio" name="q5" value="Wolves" id="wolves">
        </div>
      </div>

      <div class="box">
        <p>"Oh, don't you dare look back, Just keep your eyes on me" I said, “You're holding back”</p>


        <div>
          <label for="miles">The Proclaimers - I'm Gonna Be (500 Miles)</label>
          <input type="radio" name="q6" value="500 Miles" id="miles" required>
        </div>

        <div>
          <label for="shut">Walk the Moon - Shut Up and Dance</label>
          <input type="radio" name="q6" value="Shut Up and Dance" id="shut">
        </div>

        <div>
          <label for="BR">Queen - Bohemian Rhapsody</label>
          <input type="radio" name="q6" value="Bohemian Rhapsody" id="BR">
        </div>
      </div>

      <div class="box">
        <p>Yo! His palms are sweaty, knees weak, arms are heavy, There's vomit on his sweater already: Mom's spaghetti</p>


        <div>
          <label for="god">Drake - God's Plan</label>
          <input type="radio" name="q7" value="God's Plan" id="god" required>
        </div>

        <div>
          <label for="lose">Eminem - Lose Yourself</label>
          <input type="radio" name="q7" value="Lose Yourself" id="lose">
        </div>

        <div>
          <label for="humble">Kendrick Lamar - HUMBLE.</label>
          <input type="radio" name="q7" value="HUMBLE." id="humble">
        </div>
      </div>

      <div class="box">
        <p>And I know she'll be the death of me, At least we'll both be numb, And she'll always get the best of me, The worst is yet to come</p>


        <div>
          <label for="close">Nick Jonas/Tove Lo - Close</label>
          <input type="radio" name="q8" value="Close" id="close" required>
        </div>

        <div>
          <label for="hot">Dua Lipa - Hotter than Hell</label>
          <input type="radio" name="q8" value="Hotter than Hell" id="hot">
        </div>

        <div>
          <label for="face">The Weeknd - Can't Feel My Face</label>
          <input type="radio" name="q8" value="Can't Feel My Face" id="face">
        </div>
      </div>

      <div class="box">
        <p>I miss the taste of a sweeter life, I miss the conversation, I'm searching for a song tonight, I'm changing all of the stations</p>


        <div>
          <label for="dusk">ZAYN/Sia - Dusk Till Dawn</label>
          <input type="radio" name="q9" value="Dusk Till Dawn" id="dusk" required>
        </div>

        <div>
          <label for="shape">Ed Sheeran - Shape of You</label>
          <input type="radio" name="q9" value="Shape of You" id="shape">
        </div>

        <div>
          <label for="maps">Maroon 5 - Maps</label>
          <input type="radio" name="q9" value="Maps" id="maps">
        </div>
      </div>

      <div class="box">
        <p>So, baby, pull me closer, In the backseat of your Rover, That I know you can't afford</p>


        <div>
          <label for="closer">The Chainsmokers - Closer</label>
          <input type="radio" name="q10" value="Closer" id="closer" required>
        </div>

        <div>
          <label for="talk">Charlie Puth - We Don't Talk Anymore</label>
          <input type="radio" name="q10" value="We Don't Talk Anymore" id="talk">
        </div>

        <div>
          <label for="stich">Shawn Mendes - Stiches</label>
          <input type="radio" name="q10" value="Stiches" id="stich">
        </div>
      </div>

      <br>

      <input class="submit" type="submit" name="Submit" value="submit">

    </form>
  </body>
</html>
