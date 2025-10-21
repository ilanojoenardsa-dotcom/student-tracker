<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

  <div class="nav">
    <a href="index.php">Home</a>
    <a href="add.php">Add Student</a>
    <a href="analytics.php">Analytics</a>
  </div>

  <?php include 'db.php'; ?>

  <h2>Add New Student</h2>

  <form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Course: <input type="text" name="course" required><br><br>
    Grade: <input type="number" step="0.01" name="grade" required><br><br>
    <input type="submit" name="save" value="Save">
  </form>

  <?php
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $grade = $_POST['grade'];

    $query = "INSERT INTO students (name, course, grade) VALUES ('$name', '$course', '$grade')";
    if (mysqli_query($conn, $query)) {
      echo "<p style='color:green;'>Student added successfully!</p>";
    } else {
      echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
    echo "<a href='index.php'>Back to list</a>";
  }
  ?>
</div>
</body>
</html>