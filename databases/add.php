<?php

require_once 'config.php';

$result = false;

if (!empty($_POST)) {
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Never use md5 to store passwords!
  $password = md5($_POST['password']);

  // Validate

  $sql = "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)";
  $query = $pdo->prepare($sql);

  $result = $query->execute([
    'name' => $name,
    'email' => $email,
    'password' => $password
  ]);
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
      <h1>Add User</h1>
      <a href="index.php">Home</a>
      <?php
        if ($result) {
          echo '<div class="alert alert-success">Success!!</div>';
        }
      ?>
      <form class="" action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="" value="Save">
      </form>
    </div>
  </body>
</html>
