<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>MOVIE REVIEW AND RATING DATABASE</h1>
  <p>Create, read, update, and delete records below</p>
  <table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>
  <form class="form-inline m-2" action="create.php" method="POST">
    <label for="title">Title:</label>
    <input type="text" class="form-control m-2" id="title" name="title">
    <label for="rating">Rating:</label>
    <input type="number" class="form-control m-2" id="rating" name="rating">
    <label for="actor">Actor:</label>
    <input type="text" class="form-control m-2" id="actor" name="actor">
    <label for="director">Director:</label>
    <input type="text" class="form-control m-2" id="director" name="director">
    <label for="gross">Gross:</label>
    <input type="number" class="form-control m-2" id="gross" name="gross">
    <label for="genre">Genre:</label>
    <input type="text" class="form-control m-2" id="genre" name="genre">
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</body>
</html>