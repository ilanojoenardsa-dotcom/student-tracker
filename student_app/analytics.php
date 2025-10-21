<!DOCTYPE html>
<html>
<head>
  <title>Student Analytics</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

  <div class="nav">
    <a href="index.php">Home</a>
    <a href="add.php">Add Student</a>
    <a href="analytics.php">Analytics</a>
  </div>

  <h2>📊 Student Analytics (Using SQL Subqueries)</h2>

  <?php
  include 'db.php';
  $sql = "
  SELECT course,
    (SELECT AVG(grade) FROM students s2 WHERE s2.course = s1.course) AS avg_grade
  FROM students s1
  GROUP BY course;
  ";
  $result = mysqli_query($conn, $sql);

  echo "<h3>Average Grades by Course</h3><table border='1'>
  <tr><th>Course</th><th>Average Grade</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['course']}</td><td>{$row['avg_grade']}</td></tr>";
  }
  echo "</table>";
  ?>
</div>
</body>
</html>