<?php

$user = null;
$query = null;

if (!empty($_POST)) {
  require_once 'config.php';

  $query = "SELECT * FROM users WHERE email = :email AND password = :password";
  $prepared = $pdo->prepare($query);
  $prepared->execute([
    'email' => $_POST['email'],
    'password' => md5($_POST['password'])
  ]);

  $user = $prepared->fetch(PDO::FETCH_ASSOC);
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Databases with Platzi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h1>Fake Login</h1>
      <a href="index.php">Home</a>
      <form action="fake-login.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="" value="Login">
      </form>
      <h2>Query</h2>
      <div class="">
        <?php
        print_r($query);
        ?>
      </div>
      <h2>User Data</h2>
      <div class="">
        <?php
        print_r($user);
        ?>
      </div>
    </div>
  </body>
</html>
