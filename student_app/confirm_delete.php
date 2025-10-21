<!DOCTYPE html>
<html>
<head>
  <title>Confirm Delete</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <div class="nav">
    <a href="index.php">Home</a>
    <a href="add.php">Add Student</a>
    <a href="analytics.php">Analytics</a>
  </div>

  <h2>⚠️ Confirm Deletion</h2>
  <?php
  $id = $_GET['id'];
  ?>
  <p>Are you sure you want to delete the student with ID <strong><?php echo $id; ?></strong>?</p>

  <form method="POST" action="delete.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="confirm" value="Yes, Delete">
    <a href="index.php" style="margin-left: 10px;">Cancel</a>
  </form>
</div>

</body>
</html>
