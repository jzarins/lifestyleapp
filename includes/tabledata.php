<?php // Author: Samuel Schmitz ?>
<?php
// Create Connection
  // Database Variables
  $serverName = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "LifestyleDB";

  // Create Connection
  $conn = new mysqli($serverName, $username, $password, $dbname);

  // Check Connection
  if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
  }
  echo "Connected Successfully";
  
  $taskData = $conn->query("SELECT taskDate, taskDesc FROM tasks ORDER BY taskDate;");
  $passData = $conn->query("SELECT passName, passDesc FROM passwords;");
  $noteData = $conn->query("SELECT notesDesc FROM notes");
?>