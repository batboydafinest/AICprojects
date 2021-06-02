<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lights out</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lightsout.css">
    <style>
    td {
        height: 75px;
        width: 75px;
        border: 1px solid #000000;
    }
    </style>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
      <script src="lightsout.js"></script>
</head>
<body>

  <h1 class="won">You Won!!!</h1>

<table>
    <tr><td class="on"></td><td></td><td class="on"></td><td></td><td class="on"></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td></tr>
    <tr><td></td><td class="on"></td><td></td><td class="on"></td><td></td></tr>
    <tr><td></td><td></td><td class="on"></td><td></td><td></td></tr>
</table>
</body>
</html>
