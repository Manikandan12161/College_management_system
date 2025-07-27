# 🎓 College Management System (PHP + MySQL)

A simple College Management System built using PHP, MySQL, and HTML/CSS.  
This project allows you to manage student and course records through a web interface.

## 📁 Features

- ➕ Add / ✏️ Edit / ❌ Delete Students
- ➕ Add / ✏️ Edit / ❌ Delete Courses
- 📋 View all student and course data in tabular format
- ✅ Input validation
- 🧩 Organized modular structure

---

## 🛠️ Technologies Used

- PHP (Procedural)
- MySQL (via phpMyAdmin)
- HTML5 + CSS3
- XAMPP for local development

---

## 📂 Project Structure

college/
│
├── db.php # Database connection file
├── style.css # Basic styles
│
├── students/ # Student module
│ ├── index.php # List all students
│ ├── add.php # Add a new student
│ ├── edit.php # Edit student details
│ └── delete.php # Delete student
│
├── courses/ # Course module
│ ├── index.php # List all courses
│ ├── add.php # Add a new course
│ ├── edit.php # Edit course details
│ └── delete.php # Delete course


---

## ⚙️ Setup Instructions

1. 🔥 **Start XAMPP**  
   - Launch Apache and MySQL from the XAMPP Control Panel.

2. 📁 **Copy Files**  
   - Place this project inside `htdocs/` folder (e.g., `C:/xampp/htdocs/college/`)

3. 🗃️ **Create Database**  
   - Visit [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a database named: `college_db`

4. 🧱 **Create Tables**

### Run the following SQL:
```sql
-- Students Table
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT,
    gender VARCHAR(10),
    course VARCHAR(100) NOT NULL
);

-- Courses Table
CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    duration VARCHAR(50) NOT NULL
);

### Access the App
http://localhost/college/students/
http://localhost/college/courses/
