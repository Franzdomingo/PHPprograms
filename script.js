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
  
    // Display report
    document.getElementById("student-number-report").textContent = `Student No. ${studentNumber}`;
    document.getElementById("student-name-report").textContent = `Name: ${studentName}`;
    document.getElementById("course-report").textContent = `Course: ${course}`;
    document.getElementById("year-level-report").textContent = `Year Level: ${yearLevel}`;
    document.getElementById("class-standing-report").textContent = `Class Standing (60%): ${classStanding}`;
    document.getElementById("midterm-exam-report").textContent = `Midterm Exam (15%): ${midtermExam}`;
    document.getElementById("final-exam-report").textContent = `Final Exam (25%): ${finalExam}`;
  
    // Calculate the final grade
    const finalGrade = (classStanding * 0.6) + (midtermExam * 0.15) + (finalExam * 0.25);
  
    // Display pass or fail status
    const statusMessage = finalGrade >= 75 ? "Pass" : "Fail";
    document.getElementById("status-message").textContent = `Status: ${statusMessage}`;
  
    // Display honor student status
    if (honorStudent) {
      document.getElementById("status-message").textContent += " (Honor Student)";
    }
  
    // Show the report section
    document.getElementById("report").style.display = "block";
  }
  