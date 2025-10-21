<!DOCTYPE html>
<html>
<head>
  <title>Delete Student</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <div class="nav">
    <a href="index.php">Home</a>
    <a href="add.php">Add Student</a>
    <a href="analytics.php">Analytics</a>
  </div>

  <?php
  include 'db.php';

  if (isset($_POST['confirm'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM students WHERE id=$id";
    if (mysqli_query($conn, $query)) {
      echo "<script>alert('Record deleted successfully!'); window.location='index.php';</script>";
    } else {
      echo "<p style='color:red;'>Error deleting record: " . mysqli_error($conn) . "</p>";
    }
  } else {
    echo "<script>window.location='index.php';</script>";
  }
  ?>
</div>
</body>
</html>