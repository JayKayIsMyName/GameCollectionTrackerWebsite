<!-- register.php -->

<!DOCTYPE html> <!-- Defines the document type -->
<html> <!-- Root element of an HTML document -->
<head> <!-- Container for metadata -->
  <title>Game Collection Tracker - Register</title> <!-- Defines the title of the document -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- Links to an external CSS file -->
</head>
<body> <!-- Contains the content of the document -->
  <div class="w3-container w3-blue"> <!-- A container for content with blue background -->
    <h1>Game Collection Tracker</h1> <!-- A top-level heading -->
  </div>
  <div class="w3-container w3-padding"> <!-- A container for content with padding -->
    <h2>Register</h2> <!-- A second-level heading -->
    <?php if (!empty($errors)): ?> <!-- Checks if there are any errors -->
      <div class="w3-panel w3-red"> <!-- A panel for displaying errors with red background -->
        <ul> <!-- An unordered list -->
          <?php foreach ($errors as $error): ?> <!-- Starts a loop over the errors -->
            <li><?php echo $error; ?></li> <!-- A list item displaying an error -->
          <?php endforeach; ?> <!-- Ends the loop -->
        </ul>
      </div>
    <?php endif; ?>
    <form method="post" action="register.php"> <!-- A form for registration -->
      <p> <!-- A paragraph -->
        <label for="username">Username:</label> <!-- A label for the username input field -->
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" class="w3-input"> <!-- An input field for the username -->
      </p>
      <p> <!-- Another paragraph -->
        <label for="password">Password:</label> <!-- A label for the password input field -->
        <input type="password" id="password" name="password" class="w3-input"> <!-- An input field for the password -->
      </p>
      <p> <!-- Another paragraph -->
        <label for="confirm_password">Confirm Password:</label> <!-- A label for the confirm password input field -->
        <input type="password" id="confirm_password" name="confirm_password" class="w3-input"> <!-- An input field for confirming the password -->
      </p>
      <p> <!-- Another paragraph -->
        <input type="submit" value="Register" class="w3-button w3-green"> <!-- A submit button for the form -->
      </p>
    </form>
    <p> <!-- Another paragraph -->
      Already have an account? <a href="login.php">Login here</a>. <!-- A link to the login page -->
    </p>
  </div>
</body> <!-- Ends the body -->
</html> <!-- Ends the html -->
