<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process the form data here
        // You can save the personal information data to a database or perform other actions
        
        // Redirect to the next page
        header('Location: educational_attainment.php');
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Resume Form - Personal Information</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Personal Information</h2>
    <table>
        <tr>
            <th>Full Name</th>
            <td>Franz Phillip G. Domingo</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>Computer Science</td>
        </tr>
        <tr>
            <th>Objective</th>
            <td>
                As a computer science student, my objective is to acquire comprehensive knowledge and skills in software development, algorithms, and computer systems. I am passionate about using technology to solve complex problems and contribute to innovative projects. Through continuous learning and hands-on experience, I strive to become a proficient programmer and stay updated with the latest advancements in the field. I am eager to apply my knowledge and collaborate with others to create impactful solutions that drive positive change.
            </td>
        </tr>
    </table>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="Next" style="display: block; margin: 20px auto;">
    </form>
</body>
</html>
