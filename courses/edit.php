<?php include '../db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM courses WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_name = $_POST['course_name'];
    $department = $_POST['department'];
    $duration = $_POST['duration'];

    $stmt = $conn->prepare("UPDATE courses SET course_name=?, department=?, duration=? WHERE id=?");
    $stmt->bind_param("sssi", $course_name, $department, $duration, $id);
    $stmt->execute();
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h2>Edit Course</h2>
    <form method="POST">
        <input type="text" name="course_name" value="<?= htmlspecialchars($row['course_name']) ?>" required>
        <input type="text" name="department" value="<?= htmlspecialchars($row['department']) ?>" required>
        <input type="text" name="duration" value="<?= htmlspecialchars($row['duration']) ?>" required>
        <input type="submit" value="Update Course">
    </form>
</div>
</body>
</html>
