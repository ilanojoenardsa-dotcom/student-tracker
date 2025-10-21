<!DOCTYPE html>
<html>
<head>
  <title>Student Management</title>
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
  <h2>Student List</h2>
  <a href="add.php">Add New</a>
  <table border="1">
  <tr><th>ID</th><th>Name</th><th>Course</th><th>Grade</th><th>Actions</th></tr>

  <?php
  $result = mysqli_query($conn, "SELECT * FROM students");
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['course']}</td>
      <td>{$row['grade']}</td>
      <td>
        <a href='edit.php?id={$row['id']}'>Edit</a> |
        <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
      </td>
    </tr>";
  }
  ?>
</div>
</body>
</html>