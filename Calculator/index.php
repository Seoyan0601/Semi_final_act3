<?php
    $average = null;
    $status = "";

    $studentName = trim($_POST["student_name"]);
    $studentId = trim($_POST["student_id"]);
    $course = trim($_POST["course"]);

    $grade1 = floatval($_POST["grade1"]);
    $grade2 = floatval($_POST["grade2"]);
    $grade3 = floatval($_POST["grade3"]);

    $average = ($grade1 + $grade2 + $grade3) / 3;

    if ($average >= 75) {
        $status = "PASSED";
    } else {
        $status = "FAILED";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Calculator</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<div class="container">

    <div class="card">

        <div class="header">
            <h1>Student Grade Calculator</h1>
            <p>Enter student information and grades</p>
        </div>

        <form method="POST" action="" id="gradeForm">

            <div class="form-group">
                <label for="student_name">Student Name</label>
                <input type="text" id="student_name" name="student_name" placeholder="Enter student name" required>
            </div>

            <div class="form-group">
                <label for="student_id">Student ID</label>
                <input type="text" id="student_id" name="student_id" placeholder="Enter student ID" required>
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" id="course" name="course" placeholder="e.g. BS Information Technology" required>
            </div>

            <div class="grades">

                <div class="form-group">
                    <label for="grade1">Grade 1</label>
                    <input type="number" id="grade1" name="grade1" min="0" max="100" placeholder="0 - 100" required>
                </div>

                <div class="form-group">
                    <label for="grade2">Grade 2</label>
                    <input type="number" id="grade2" name="grade2" min="0" max="100" placeholder="0 - 100" required>
                </div>

                <div class="form-group">
                    <label for="grade3">Grade 3</label>
                    <input type="number" id="grade3" name="grade3" min="0" max="100" placeholder="0 - 100" required>
                </div>

            </div>

            <button type="submit">Calculate Result</button>

        </form>

        <?php if ($average !== null): ?>

            <div class="result">

                <h2>Final Result</h2>

                <div class="result-info">
                    <p>
                        <strong>Student Name:</strong>
                        <?= $studentName ?>
                    </p>

                    <p>
                        <strong>Student ID:</strong>
                        <?= $studentId ?>
                    </p>

                    <p>
                        <strong>Course:</strong>
                        <?= $course ?>
                    </p>
                </div>

                <div class="average">
                    <span>Average Grade</span>
                    <strong><?= number_format($average, 2) ?></strong>
                </div>

                <div class="status <?= strtolower($status) ?>">
                    <?= $status ?>
                </div>

            </div>

        <?php endif; ?>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>
