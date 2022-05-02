<?php
  //initializing and declaring variables
  $age = intval($_POST["user-age"]);
  $message = "";
  //first if statement: if age is greater than or equal to 17
  if ($age >= 17) {
    $message = "You are old enough to see an R-rated movie on your own.";
  }
  //otherwise, if age is greater than or equal to 13
  else if ($age >= 13) {
    $message = "You can watch a PG-13 movie alone.";
  }
  //otherwise, if age is greater than or equal to 5
  else if ($age >= 5) {
    $message = "You can see a G or PG movie on your own.";
  }
  //else (any age less than 5)
  else {
    $message = "You need to be supervised to watch any movie. If you want to watch a movie, we suggest watching a family movie with a parent or guardian.";
  }
  //what to display in any scenario
  echo "$message";
?>
