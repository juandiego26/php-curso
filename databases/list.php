<?php

require_once 'config.php';

$queryResult = $pdo->query("SELECT * FROM users");

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
      <h1>List Users</h1>
      <a href="index.php">Home</a>
      <table class="table">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php

        while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr>';
          echo '<td>' . $row['name'] . '</td>';
          echo '<td>' . $row['email'] . '</td>';
          echo '<td><a href="update.php?id=' . $row['id'] . '">Edit</a></td>';
          echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
          echo '</tr>';
        }

        ?>
      </table>
    </div>
  </body>
</html>
