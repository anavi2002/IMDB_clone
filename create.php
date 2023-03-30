<?php
  include 'db.php';
  $title = $_POST["title"];
  $rating = $_POST["rating"];
  $actor = $_POST["actor"];
  $director = $_POST["director"];
  $gross = $_POST["gross"];
  $genre = $_POST["genre"];
  $sql = "insert into movie(title,rating,actor,director,gross,genre) values ('$title', '$rating','$actor','$director','$gross','$genre')";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>