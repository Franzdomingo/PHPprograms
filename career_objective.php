<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process the form data here
        // You can save the career objective data to a database or perform other actions
        
        // Redirect to the next page
        header('Location: personal_information.php');
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Resume Form - Career Objective</title>
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
    <h2>Career Objective</h2>
    <table>
        <tr>
            <th>Objective</th>
        </tr>
        <tr>
            <td>
                As a male student in the field of Computer Science, my career objective is to excel in the dynamic and ever-evolving world of technology. While my primary focus lies in software development and programming, I also recognize the importance of being adaptable. Therefore, as a backup career, I aim to leverage my skills and knowledge to explore other roles in the IT industry such as system administration, database management, or cybersecurity. I am passionate about continuous learning, staying up-to-date with emerging technologies, and contributing to innovative projects that have a positive impact on society.
            </td>
        </tr>
    </table>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="Next" style="display: block; margin: 20px auto;">
    </form>
</body>
</html>
