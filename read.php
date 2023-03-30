<?php
  include 'db.php';
  $sql = "select * from movie";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    if ($row['id'] == $_GET['id']) {
      
      echo '<form class="form-inline m-2" action="update.php" method="POST">';
      echo '<td><input type="text" class="form-control" name="title" value="'.$row['title'].'"></td>';
      echo '<td><input type="number" class="form-control" name="rating" value="'.$row['rating'].'"></td>';
      echo '<td><input type="text" class="form-control" name="actor" value="'.$row['actor'].'"></td>';
      echo '<td><input type="text" class="form-control" name="director" value="'.$row['director'].'"></td>';
      echo '<td><input type="number" class="form-control" name="gross" value="'.$row['gross'].'"></td>';
      echo '<td><input type="text" class="form-control" name="genre" value="'.$row['genre'].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row['title'] . "</td>";
      echo "<td>" . $row['rating'] . "</td>";
      echo "<td>" . $row['actor'] . "</td>";
      echo "<td>" . $row['director'] . "</td>";
      echo "<td>" . $row['gross'] . "</td>";
      echo "<td>" . $row['genre'] . "</td>";
      echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
    }
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
  }
  $conn->close();
  ?>