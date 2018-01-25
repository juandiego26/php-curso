<?php

include_once 'config.php';

$result = false;

if (!empty($_POST)) {
  $id = $_POST['id'];
  $newName = $_POST['name'];
  $newEmail = $_POST['email'];

  $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
  $query = $pdo->prepare($sql);

  $result = $query->execute([
    'id' => $id,
    'name' => $newName,
    'email' => $newEmail
  ]);

  $nameValue = $newName;
  $emailValue = $newEmail;

} else {

  $id = $_GET['id'];
  $sql = "SELECT * FROM users WHERE id=:id";
  $query = $pdo->prepare($sql);

  $query->execute([
    'id' =>  $id
  ]);

  $row = $query->fetch(PDO::FETCH_ASSOC);
  $nameValue = $row['name'];
  $emailValue = $row['email'];

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
      <h1>Update User</h1>
      <a href="list.php">Back</a>
      <?php
        if ($result) {
          echo '<div class="alert alert-success">Success!!</div>';
        }
      ?>
      <form action="update.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $nameValue; ?>">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $emailValue; ?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="" value="Update">
      </form>
    </div>
  </body>
</html>
