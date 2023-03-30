<?php
  include 'db.php';
  $id = $_POST['id'];
  $title = $_POST["title"];
  $rating = $_POST["rating"];
  $actor = $_POST["actor"];
  $director = $_POST["director"];
  $gross = $_POST["gross"];
  $genre = $_POST["genre"];
  $sql = "update movie set title='$title', rating='$rating',actor='$actor',director='$director',gross='$gross',genre='$genre' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>