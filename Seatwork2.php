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
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .form-group input[type="text"],
    .form-group select {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .form-group input[type="checkbox"] {
      margin-top: 5px;
    }
    .status-message {
      margin-top: 20px;
      font-weight: bold;
    }
    .btn-container {
      text-align: center;
    }
    .btn-container button {
      margin-right: 10px;
    }
  </style>
  <script src="script.js"></script>
</head>
<body>
  <div class="container">
    <h2>Student Record</h2>
    <form id="student-form" onsubmit="submitForm(event)">
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
        <abel for="honor-student">Honor Student:</label>
        <input type="checkbox" id="honor-student">
        </div>
        <div class="btn-container">
        <button type="submit">SUBMIT</button>
        <button type="reset">RESET</button>
        </div>
        </form>
        <div id="report" style="display: none;">
        <hr>
        <h2>Report</h2>
        <p id="student-number-report"></p>
        <p id="student-name-report"></p>
        <p id="course-report"></p>
        <p id="year-level-report"></p>
        <p id="class-standing-report"></p>
        <p id="midterm-exam-report"></p>
        <p id="final-exam-report"></p>
        <p id="status-message"></p>
        </div>
        </div>
        </body>
        </html>
