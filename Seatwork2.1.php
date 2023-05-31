<!DOCTYPE html>
<html>
<head>
  <title>Seatwork 2.1 Output</title>
  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f2f2f2;
    }
    h2 {
      margin-bottom: 10px;
    }
    p {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Seatwork 2.1 Output</h2>
    <p>Student No. <?php echo $_GET['studentNumber']; ?></p>
    <p>Name: <?php echo $_GET['studentName']; ?></p>
    <p>Course: <?php echo $_GET['course']; ?></p>
    <p>Year Level: <?php echo $_GET['yearLevel']; ?></p>
    <h3>Grades Record</h3>
    <p>Class Standing (60%): <?php echo $_GET['classStanding']; ?></p>
    <p>Midterm Exam (15%): <?php echo $_GET['midtermExam']; ?></p>
    <p>Final Exam (25%): <?php echo $_GET['finalExam']; ?></p>
    <p>Status: <?php echo $_GET['statusMessage']; ?></p>
    <?php
      if (isset($_GET['honorStudent']) && $_GET['honorStudent'] === "true") {
        echo "<p>Honor Student</p>";
      }
    ?>
  </div>
</body>
</html>
