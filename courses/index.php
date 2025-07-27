<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Course List</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h2>Courses Offered</h2>
    <a href="add.php">➕ Add New Course</a>
    <table>
        <tr>
            <th>ID</th><th>Course Name</th><th>Department</th><th>Duration</th><th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM courses");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td><td>{$row['course_name']}</td><td>{$row['department']}</td><td>{$row['duration']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> | 
                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Delete this course?\")'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
