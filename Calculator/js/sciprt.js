const form = document.getElementById("gradeForm");

form.addEventListener("submit", function (event) {

    const grades = [
        document.getElementById("grade1").value,
        document.getElementById("grade2").value,
        document.getElementById("grade3").value
    ];

    for (let grade of grades) {

        if (grade < 0 || grade > 100) {
            alert("Grades must be between 0 and 100.");
            event.preventDefault();
            return;
        }
    }

});