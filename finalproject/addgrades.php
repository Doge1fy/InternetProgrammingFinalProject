<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Kick them out if not logged in
    exit;
}
require_once('dataHandler.php');

//user clicks submit this is what happens
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $semester = $_POST['semester'];
    $year = $_POST['year'];
    $courseNumber = $_POST['courseNumber'];
    $creditHours = $_POST['creditHours'];
    $grade = $_POST['grade'];
    $instructor = $_POST['instructor'];

    $users = get_data();
    $userName = $_SESSION['username'];
    

    //does the grades section under the username exist
    if(!isset($users[$userName]['grades'])){
        $users[$userName]['grades'] = array();
    }

    //make the array
    $gradeAdd = array("semester" => $semester, "year" => $year, "courseNumber" => $courseNumber, "creditHours" => $creditHours, "grade" => $grade, "instructor" => $instructor);
    //add it
    $users[$userName]['grades'][] = $newGrade;
    update_data($users);
    

}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Grades</title>
</head>
<body>
    <h1>Add Grades</h1>

    <form action="addgrades.php" method="post">
        <div>
            <label for="semester">Semester:</label>
            <select id="semester" name="semester" required>
                <option value="">Select Semester</option>
                <option value="Fall">Fall</option>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
            </select>
        </div>

        <br>

        <div>
            <label for="year">Year:</label>
            <select id="year" name="year" required>
                <option value="">Select Year</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
            </select>
        </div>

        <br>

        <div>
            <label for="courseNumber">Course Number:</label>
            <input type="text" id="courseNumber" name="courseNumber" required>
        </div>

        <br>

        <div>
            <label for="creditHours">Credit Hours:</label>
            <input type="number" id="creditHours" name="creditHours" min="1" required>
        </div>

        <br>

        <div>
            <label for="grade">Grade:</label>
            <select id="grade" name="grade" required>
                <option value="">Select Grade</option>
                <option value="A+">A+</option>
                <option value="A">A</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="B-">B-</option>
                <option value="C+">C+</option>
                <option value="C">C</option>
                <option value="C-">C-</option>
                <option value="D+">D+</option>
                <option value="D">D</option>
                <option value="D-">D-</option>
                <option value="F">F</option>
            </select>
        </div>

        <br>

        <div>
            <label for="instructor">Instructor:</label>
            <input type="text" id="instructor" name="instructor" required>
        </div>

        <br>

        <button type="submit">Save Grade</button>
    </form>

    <br>

    <a href="main.html">Back to Main Menu</a>
</body>
</html>	
