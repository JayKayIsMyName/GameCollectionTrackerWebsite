<!DOCTYPE html> <!-- Defines the document type -->
<html> <!-- Root element of an HTML document -->
<head> <!-- Container for metadata -->
  <title>Game Collection Tracker - Login</title> <!-- Defines the title of the document -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- Links to an external CSS file -->
</head>
<body> <!-- Contains the content of the document -->
  <div class="w3-container w3-blue"> <!-- A container for content with blue background -->
    <h1>Game Collection Tracker</h1> <!-- A top-level heading -->
  </div>
  <div class="w3-container w3-padding"> <!-- A container for content with padding -->
    <h2>Login</h2> <!-- A second-level heading -->
    <?php if (!empty($errors)): ?> <!-- Checks if there are any errors -->
      <div class="w3-panel w3-red"> <!-- A panel for displaying errors with red background -->
        <ul> <!-- An unordered list -->
          <?php foreach ($errors as $error): ?> <!-- Starts a loop over the errors -->
            <li><?php echo $error; ?></li> <!-- A list item displaying an error -->
          <?php endforeach; ?> <!-- Ends the loop -->
        </ul>
      </div>
    <?php endif; ?>
    <form method="post" action="login.php"> <!-- A form for logging in -->
      <p> <!-- A paragraph -->
        <label for="username">Username:</label> <!-- A label for the username input field -->
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" class="w3-input"> <!-- An input field for the username -->
      </p>
      <p> <!-- Another paragraph -->
        <label for="password">Password:</label> <!-- A label for the password input field -->
        <input type="password" id="password" name="password" class="w3-input"> <!-- An input field for the password -->
      </p>
      <p> <!-- Another paragraph -->
        <input type="submit" value="Login" class="w3-button w3-green"> <!-- A submit button for the form -->
      </p>
    </form>
    <p> <!-- Another paragraph -->
      Don't have an account? <a href="register.php">Register here</a>. <!-- A link to the registration page -->
    </p>
  </div>
</body> <!-- Ends the body -->
</html> <!-- Ends the html -->
