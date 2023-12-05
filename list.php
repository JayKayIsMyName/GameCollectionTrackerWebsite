<!DOCTYPE html> <!-- Defines the document type -->
<html> <!-- Root element of an HTML document -->
<head> <!-- Container for metadata -->
  <title>Game Collection Tracker - List</title> <!-- Defines the title of the document -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- Links to an external CSS file -->
</head>
<body> <!-- Contains the content of the document -->
  <div class="w3-container w3-blue"> <!-- A container for content with blue background -->
    <h1>Game Collection Tracker</h1> <!-- A top-level heading -->
  </div>
  <div class="w3-container w3-padding"> <!-- A container for content with padding -->
    <h2>List of Games</h2> <!-- A second-level heading -->
    <p> <!-- A paragraph -->
      Welcome, <?php echo $_SESSION["username"]; ?>. <a href="logout.php">Logout</a>. <!-- Displays the username and a link to logout -->
    </p>
    <p> <!-- Another paragraph -->
      <a href="index.php?action=add" class="w3-button w3-green">Add Game</a> <!-- A link to add a game... -->
      <a href="edit.php?id=<?php echo $game["id"]; ?>" class="w3-button w3-yellow">Edit Game</a> <!-- ...edit a game... -->
      <a href="delete.php?id=<?php echo $game["id"]; ?>" class="w3-button w3-red">Delete Game</a> <!-- ...and delete a game. -->
    </p>
    <table class="w3-table w3-bordered"> <!-- A table with borders -->
      <tr> <!-- A table row -->
        <th>Title</th> <!-- A table header -->
        <th>Genre</th> <!-- Another table header -->
        <th>Platform</th> <!-- Another table header -->
        <th>Actions</th> <!-- Another table header -->
      </tr>
      <?php foreach ($games as $game): ?> <!-- Starts a loop over the games -->
        <tr> <!-- Another table row -->
          <td><?php echo $game["title"]; ?></td> <!-- A table cell displaying the game title -->
          <td><?php echo $game["genre"]; ?></td> <!-- A table cell displaying the game genre -->
          <td><?php echo $game["platform"]; ?></td> <!-- A table cell displaying the game platform -->
          <td> <!-- A table cell containing action links -->
            <a href="index.php?action=edit&id=<?php echo $game["id"]; ?>" class="w3-button w3-yellow">Edit</a> <!-- A link to edit the game -->
            <a href="index.php?action=delete&id=<?php echo $game["id"]; ?>" class="w3-button w3-red">Delete</a> <!-- A link to delete the game -->
          </td>
        </tr>
      <?php endforeach; ?> <!-- Ends the loop -->
    </table>
  </div>
</body> <!-- Ends the body -->
</html> <!-- Ends the html -->
