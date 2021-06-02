<html>
  <head>
    <title> Mememon Register </title>
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
      <form action = "registerConfirmation.php" method = "post">
        <fieldset id = "registering">
            <legend> Registering </legend>
            <label> What would you like to be called?
                <input type = "text" name = "name" required/>
            </label>
            <br />
    		<label> Favorite Color:
    			<select name = 'hat'>
                    <option value="red">Red</option>
                    <option value="red">Rojo</option>
                    <option value="red">红</option>
                    <option value="red">Obomvu</option>
                </select>
            </label>
    	    <br />
            <label> Username:
                <input type = "text" name = "username" maxlength="20" required/>
            </label>
            <br />
            <label> Password:
              <input type = "text" name = "password" required/>
            </label>
        </fieldset>
        <p> <button type = "button" id = "registerBack" class = "title"> Back </button>  </p>
        <p> <input type = "submit" value = "Create Account" /> </p>
      </form>
    </div>
  </body>
</html>
