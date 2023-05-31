<!DOCTYPE html>
<html>
<head>
  <title>Student Record</title>
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
    .btn-container {
      margin-top: 20px;
    }
  </style>
  <script src="script.js"></script>
</head>
<body>
  <div class="container">
    <h2>Student Record</h2>
    <form id="student-form">
      <div class="form-group">
        <label for="student-number">Student No.</label>
        <input type="text" id="student-number" placeholder="Enter student number" required>
      </div>
      <div class="form-group">
        <label for="student-name">Name:</label>
        <input type="text" id="student-name" placeholder="Enter student name" required>
      </div>
      <div class="form-group">
        <label for="course">Course:</label>
        <select id="course" required>
          <option value="" disabled selected>Select course</option>
          <option value="BSCS">BSCS</option>
          <option value="BSIT">BSIT</option>
          <option value="BSCPE">BSCPE</option>
          <option value="BSECE">BSECE</option>
          <option value="BSCE">BSCE</option>
        </select>
      </div>
      <div class="form-group">
        <label for="year-level">Year Level:</label>
        <select id="year-level" required>
          <option value="" disabled selected>Select year level</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
      <h3>Grades Record</h3>
      <div class="form-group">
        <label for="class-standing">Class Standing (60%):</label>
        <input type="text" id="class-standing" placeholder="Enter class standing grade" required>
      </div>
      <div class="form-group">
        <label for="midterm-exam">Midterm Exam (15%):</label>
        <input type="text" id="midterm-exam" placeholder="Enter midterm exam grade" required>
      </div>
      <div class="form-group">
        <label for="final-exam">Final Exam (25%):</label>
        <input type="text" id="final-exam" placeholder="Enter final exam grade" required>
      </div>
      <div class="form-group">
        <label for="honor-student">Honor Student:</label>
        <input type="checkbox" id="honor-student">
      </div>
      <div class="btn-container">
        <button type="submit">SUBMIT</button>
        <button type="reset">RESET</button>
      </div>
    </form>
  </div>
  <script>
  // Place this code in the same HTML file

  document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("student-form");
    form.addEventListener("submit", submitForm);
  });

  function submitForm(event) {
    event.preventDefault();

    // Get form values
    const studentNumber = document.getElementById("student-number").value;
    const studentName = document.getElementById("student-name").value;
    const course = document.getElementById("course").value;
    const yearLevel = document.getElementById("year-level").value;
    const classStanding = document.getElementById("class-standing").value;
    const midtermExam = document.getElementById("midterm-exam").value;
    const finalExam = document.getElementById("final-exam").value;
    const honorStudent = document.getElementById("honor-student").checked;

    // Redirect to seatwork2.1.php with form data as query parameters
    const queryString = `studentNumber=${encodeURIComponent(studentNumber)}&studentName=${encodeURIComponent(studentName)}&course=${encodeURIComponent(course)}&yearLevel=${encodeURIComponent(yearLevel)}&classStanding=${encodeURIComponent(classStanding)}&midtermExam=${encodeURIComponent(midtermExam)}&finalExam=${encodeURIComponent(finalExam)}&honorStudent=${encodeURIComponent(honorStudent)}`;
    window.location.href = `seatwork2.1.php?${queryString}`;
  }
</script>

</body>
</html>

