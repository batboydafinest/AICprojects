<html>
  <head>
    <title> Mememon Login </title>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>
    <script src = "mememon.js">
    </script>
    <link href = "mememon.css" type = "text/css" rel = "stylesheet" />
  </head>

  <body class = "background">
    <div class = "mainpage">
      <form action = "loginConfirmation.php" method = "post">
        <fieldset id = "logingin">
            <legend> Login </legend>
            <label> Username:
                <input type = "text" name = "username" required/>
            </label>
            <br />
            <label> Password:
              <input type = "password" name = "password" required/>
            </label>
        </fieldset>
        <p> <button type = "button" id = "loginBack" class = "title"> Back </button>  </p>
        <p> <input type = "submit" value = "Login" /> </p>
      </form>
    </div>
  </body>
</html>
