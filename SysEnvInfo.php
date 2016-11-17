<!DOCTYPE html>
<html lang="en">
<head>
  <title>Superglobals</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class="container">

  <h2>$_SERVER im Überblick</h2>

  <table class="table table-bordered">

    <thead>
      <tr>
        <th>Variable</th>
        <th>Wert</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Skript-Pfad</td>
        <td>
          <?php
          echo $_SERVER['PHP_SELF'];
          ?>
        </td>
      </tr>
      <tr>
        <td>Server-Name/IP</td>
        <td>
          <?php
          echo $_SERVER['SERVER_NAME'];
          ?>
        </td>
      </tr>
      <tr>
        <td>Protokoll</td>
        <td>
          <?php
          echo $_SERVER['SERVER_PROTOCOL'];
          ?>
        </td>
      </tr>
      <tr>
        <td>Client-IP</td>
        <td>
          <?php
          echo $_SERVER['REMOTE_ADDR'];
          ?>
        </td>
      </tr>
      <tr>
        <td>URI</td>
        <td>
          <?php
          echo $_SERVER['REQUEST_URI'];
          ?>
        </td>
      </tr>
      <tr>
        <td>Server-Info</td>
        <td>
          <?php
          echo "Software: " .$_SERVER['SERVER_SOFTWARE'];
          echo "<br>Name: " .$_SERVER['SERVER_NAME'];
          echo "<br>Adresse: " .$_SERVER['SERVER_ADDR'];
          echo "<br>Port: " .$_SERVER['SERVER_PORT'];
          ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>