<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's PHP Movie Ratings Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Movie Ratings in PHP - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Age and Movie Ratings - in PHP!</h1>"; ?>
    <?php
      echo "<h3>Welcome!</h3>";
      echo "<p>Welcome! This web page will take your age and verify what movies you are allowed to watch based on their ratings.</p>";
      echo "<p>Please input your information below:</p>";
    ?>
    <?php echo "<h3>Your Age:</h3>"; ?>
    <!-- Form for user input -->
    <form action="./verify.php" method="post" target="results">
      <label for="age">How old are you?</label>
      <input type="number" step="1" min="1" name="user-age" placeholder="Your age..."><br><br>
      <input type="submit" id="button" value="Check">
    </form>
    <!-- Iframe for results -->
    <iframe id="results" name="results"></iframe>
  </body>
</html>