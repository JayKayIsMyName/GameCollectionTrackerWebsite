<!DOCTYPE html> <!-- Declare this document as an HTML document -->
<html>
<head>
  <title>Game Collection Tracker - Edit Game</title> <!-- Set the title of the webpage -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- Link to the CSS stylesheet from W3Schools -->
</head>
<body>
  <div class="w3-container w3-blue">
    <h1>Game Collection Tracker</h1> <!-- Display the title of the webpage -->
  </div>
  <div class="w3-container w3-padding">
    <h2>Edit Game</h2> <!-- Display the heading of the form -->
    <?php if (!empty($errors)): ?> <!-- Check if there are any errors -->
      <div class="w3-panel w3-red">
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li> <!-- Display each error -->
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <form method="post" action="index.php?action=edit&id=<?php echo $id; ?>"> <!-- Create a form that sends a POST request when submitted -->
      <p>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $title; ?>" class="w3-input"> <!-- Create an input field for the game's title -->
      </p>
      <p>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="<?php echo $genre; ?>" class="w3-input"> <!-- Create an input field for the game's genre -->
      </p>
      <p>
        <label for="platform">Platform:</label>
        <input type="text" id="platform" name="platform" value="<?php echo $platform; ?>" class="w3-input"> <!-- Create an input field for the game's platform -->
      </p>
      <p>
        <input type="submit" value="Update Game" class="w3-button w3-green"> <!-- Create a submit button for the form -->
      </p>
    </form>
    <p>
      <a href="index.php">Back to list</a> <!-- Create a link that takes the user back to the list of games -->
    </p>
  </div>
</body>
</html>
