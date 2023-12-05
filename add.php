<!DOCTYPE html> <!-- This line is a declaration to the web browser about what version of HTML the page is written in. -->
<html> <!-- This is the root element of an HTML page. -->
<head> <!-- This element contains meta-information about the document. -->
  <title>Game Collection Tracker - Add Game</title> <!-- This defines the title of the document, shown in a browser's title bar or a page's tab. -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- This line links an external CSS file to style the HTML document. -->
</head>
<body> <!-- This contains the content that will be visible to the user. -->
  <div class="w3-container w3-blue"> <!-- This is a container with blue background color. -->
    <h1>Game Collection Tracker</h1> <!-- This is a top-level heading for the page. -->
  </div>
  <div class="w3-container w3-padding"> <!-- This is a container with padding. -->
    <h2>Add Game</h2> <!-- This is a second-level heading. -->
    <?php if (!empty($errors)): ?> <!-- This is a PHP conditional that checks if the $errors array is not empty. -->
      <div class="w3-panel w3-red"> <!-- This is a container with red background color. -->
        <ul> <!-- This defines an unordered list. -->
          <?php foreach ($errors as $error): ?> <!-- This is a PHP loop that iterates over each item in the $errors array. -->
            <li><?php echo $error; ?></li> <!-- This is a list item that displays the current error message. -->
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <form method="post" action="index.php?action=add"> <!-- This is a form that sends a POST request to the specified URL when submitted. -->
      <p> <!-- This defines a paragraph. -->
        <label for="title">Title:</label> <!-- This is a label for an input field. -->
        <input type="text" id="title" name="title" value="<?php echo $title; ?>" class="w3-input"> <!-- This is a text input field. -->
      </p>
      <p>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="<?php echo $genre; ?>" class="w3-input">
      </p>
      <p>
        <label for="platform">Platform:</label>
        <input type="text" id="platform" name="platform" value="<?php echo $platform; ?>" class="w3-input">
      </p>
      <p>
        <input type="submit" value="Add Game" class="w3-button w3-green"> <!-- This is a submit button. -->
      </p>
    </form>
    <p>
      <a href="index.php">Back to list</a> <!-- This is a hyperlink that points to the specified URL. -->
    </p>
  </div>
</body>
</html>
