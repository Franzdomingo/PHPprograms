<?php

    $name = "Franz Phillip G. Domingo";
    $contact = "090901309123";
    $objectives = "Entry-level marketing professional, looking for a full-time position where I can assist in creating engaging social media content for viewers to learn about a company's mission and products.";
    $edu = "Marketing professional";
    $skills = "Marketing, Technical marketing skills";
    $achi = "Efficiently cold-called over 30 potential customers daily, with a monthly average closing rate of 50%. Exceeded sales key performance indicators consistently over a three-month timeframe in 2020."; 
    $train = "Onboarding, Internal training, Outsourced training";
    $references = "sample@abcdcompany.com";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Resume Form</title>
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
    <h2>My Resume</h2>
    <table>
        <tr>
            <th>Personal Information</th>
        </tr>
        <tr>
            <td>
                <center>
                <img src="me.jpeg" alt="My Photo" class="photo">
                </center>
                Name: <?php echo $name; ?><br>
                Contact Details: <?php echo $contact; ?><br>
                Objectives: <?php echo $objectives; ?><br>
                Educational Background: <?php echo $edu; ?><br>
                Skills and Qualifications: <?php echo $skills; ?><br>
                Achievements and Certification: <?php echo $achi; ?><br>
                Trainings and Seminars: <?php echo $train; ?><br>
                References: <?php echo $references; ?><br>
            </td>
        </tr>
        <tr>
            <th>Affiliation</th>
        </tr>
        <tr>
            <td>
                <?php include("affiliation.php"); ?>
            </td>
        </tr>
        <tr>
            <th>Educational Attainment</th>
        </tr>
        <tr>
            <td>
                <?php include("educational_attainment.php"); ?>
            </td>
        </tr>
        <tr>
            <th>Skills</th>
        </tr>
        <tr>
            <td>
                <?php include("skills.php"); ?>
            </td>
        </tr>
        <tr>
            <th>Work Experience</th>
        </tr>
        <tr>
            <td>
                <?php include("work_experience.php"); ?>
            </td>
        </tr>
    </table>
</body>
</html>
