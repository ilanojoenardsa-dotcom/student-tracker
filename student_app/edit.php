<!DOCTYPE html>
<html>
<head>
  <title>Edit Student</title>
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
  $id = $_GET['id'];

  $result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
  $row = mysqli_fetch_assoc($result);
  ?>

  <h2>Edit Student</h2>

  <form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
    Course: <input type="text" name="course" value="<?php echo $row['course']; ?>" required><br><br>
    Grade: <input type="number" step="0.01" name="grade" value="<?php echo $row['grade']; ?>" required><br><br>
    <input type="submit" name="update" value="Update">
  </form>

  <?php
  if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $grade = $_POST['grade'];

    $query = "UPDATE students SET name='$name', course='$course', grade='$grade' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
      echo "<p style='color:green;'>Record updated successfully!</p>";
    } else {
      echo "<p style='color:red;'>Error updating record: " . mysqli_error($conn) . "</p>";
    }
    echo "<a href='index.php'>Back to list</a>";
  }
  ?>
</div>
</body>
</html>