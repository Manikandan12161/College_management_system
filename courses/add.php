<?php include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_name = $_POST['course_name'];
    $department = $_POST['department'];
    $duration = $_POST['duration'];

    if ($course_name && $department && $duration) {
        $stmt = $conn->prepare("INSERT INTO courses (course_name, department, duration) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $course_name, $department, $duration);
        $stmt->execute();
        header("Location: index.php");
    } else {
        echo "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h2>Add New Course</h2>
    <form method="POST">
        <input type="text" name="course_name" placeholder="Course Name" required>
        <input type="text" name="department" placeholder="Department" required>
        <input type="text" name="duration" placeholder="Duration (e.g., 3 Years)" required>
        <input type="submit" value="Add Course">
    </form>
</div>
</body>
</html>
