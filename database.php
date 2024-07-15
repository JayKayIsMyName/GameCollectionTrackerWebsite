<?php
// Connect to the MySQL database using PHP Data Objects (PDO)
$db = new PDO("mysql:host=localhost;dbname=project", "admin", "password");
// Set the PDO error mode to exception
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Start a new session or resume the existing one
session_start();

// If the username is not set in the session, redirect to the login page
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}

// Get the action from the URL parameters, if it's not set, default to an empty string
$action = isset($_GET["action"]) ? $_GET["action"] : "";

// Depending on the action, call the appropriate function
switch ($action) {
  case "add":
    addGame();
    break;
  case "edit":
    editGame();
    break;
  case "delete":
    deleteGame();
    break;
  default:
    listGames();
}

// Function to list all games
function listGames() {
  global $db;
  // Get the games from the database for the current user
  $stmt = $db->query("SELECT * FROM games WHERE user_id = " . $_SESSION["user_id"]);
  $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // Display the list page
  include "list.php";
}

// Function to add a game
function addGame() {
  global $db;
  // If the form was submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $title = trim($_POST["title"]);
    $genre = trim($_POST["genre"]);
    $platform = trim($_POST["platform"]);
    $errors = [];
    // Validate the form data
    if ($title == "") {
      $errors[] = "Please enter the title of the game.";
    }
    if ($genre == "") {
      $errors[] = "Please enter the genre of the game.";
    }
    if ($platform == "") {
      $errors[] = "Please enter the platform of the game.";
    }
    // If there are no errors, insert the game into the database
    if (empty($errors)) {
      $stmt = $db->prepare("INSERT INTO games (user_id, title, genre, platform) VALUES (?, ?, ?, ?)");
      $stmt->execute([$_SESSION["user_id"], $title, $genre, $platform]);
      // Redirect to the list page
      header("Location: index.php");
      exit();
    }
  } else {
    // If the form was not submitted, initialize the form data
    $title = "";
    $genre = "";
    $platform = "";
    $errors = [];
  }
  // Display the add page
  include "add.php";
}

// Function to edit a game
function editGame() {
  global $db;
  // Get the game ID from the URL parameters
  $id = isset($_GET["id"]) ? $_GET["id"] : 0;
  // If the form was submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $title = trim($_POST["title"]);
    $genre = trim($_POST["genre"]);
    $platform = trim($_POST["platform"]);
    $errors = [];
    // Validate the form data
    if ($title == "") {
      $errors[] = "Please enter the title of the game.";
    }
    if ($genre == "") {
      $errors[] = "Please enter the genre of the game.";
    }
    if ($platform == "") {
      $errors[] = "Please enter the platform of the game.";
    }
    // If there are no errors, update the game in the database
    if (empty($errors)) {
      $stmt = $db->prepare("UPDATE games SET title = ?, genre = ?, platform = ? WHERE id = ? AND user_id = ?");
      $stmt->execute([$title, $genre, $platform, $id, $_SESSION["user_id"]]);
      // Redirect to the list page
      header("Location: index.php");
      exit();
    }
  } else {
    // If the form was not submitted, get the game data from the database
    $stmt = $db->prepare("SELECT * FROM games WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $_SESSION["user_id"]]);
    $game = $stmt->fetch(PDO::FETCH_ASSOC);
    // If the game exists, initialize the form data with the game data
    if ($game) {
      $title = $game["title"];
      $genre = $game["genre"];
      $platform = $game["platform"];
      $errors = [];
    } else {
      // If the game does not exist, redirect to the list page
      header("Location: index.php");
      exit();
    }
  }
  // Display the edit page
  include "edit.php";
}

// Function to delete a game
function deleteGame() {
  global $db;
  // Get the game ID from the URL parameters
  $id = isset($_GET["id"]) ? $_GET["id"] : 0;
  // Delete the game from the database
  $stmt = $db->prepare("DELETE FROM games WHERE id = ? AND user_id = ?");
  $stmt->execute([$id, $_SESSION["user_id"]]);
  // Redirect to the list page
  header("Location: index.php");
  exit();
}
?>
