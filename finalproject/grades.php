<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Kick them out if not logged in
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
</head>
<body>
    <h1>Grades</h1>

    <form action="grades.php" method="get">
        <label for="semesterFilter">Semester:</label>
        <select id="semesterFilter" name="semesterFilter">
            <option value="All">All</option>
            <option value="Spring 2000">Spring 2000</option>
            <option value="Summer 2000">Summer 2000</option>
            <option value="Fall 2000">Fall 2000</option>
            <option value="Spring 2001">Spring 2001</option>
            <option value="Summer 2001">Summer 2001</option>
            <option value="Fall 2001">Fall 2001</option>
            <option value="Spring 2002">Spring 2002</option>
            <option value="Summer 2002">Summer 2002</option>
            <option value="Fall 2002">Fall 2002</option>
            <option value="Spring 2003">Spring 2003</option>
            <option value="Summer 2003">Summer 2003</option>
            <option value="Fall 2003">Fall 2003</option>
            <option value="Spring 2004">Spring 2004</option>
            <option value="Summer 2004">Summer 2004</option>
            <option value="Fall 2004">Fall 2004</option>
            <option value="Spring 2005">Spring 2005</option>
            <option value="Summer 2005">Summer 2005</option>
            <option value="Fall 2005">Fall 2005</option>
            <option value="Spring 2006">Spring 2006</option>
            <option value="Summer 2006">Summer 2006</option>
            <option value="Fall 2006">Fall 2006</option>
            <option value="Spring 2007">Spring 2007</option>
            <option value="Summer 2007">Summer 2007</option>
            <option value="Fall 2007">Fall 2007</option>
            <option value="Spring 2008">Spring 2008</option>
            <option value="Summer 2008">Summer 2008</option>
            <option value="Fall 2008">Fall 2008</option>
            <option value="Spring 2009">Spring 2009</option>
            <option value="Summer 2009">Summer 2009</option>
            <option value="Fall 2009">Fall 2009</option>
            <option value="Spring 2010">Spring 2010</option>
            <option value="Summer 2010">Summer 2010</option>
            <option value="Fall 2010">Fall 2010</option>
            <option value="Spring 2011">Spring 2011</option>
            <option value="Summer 2011">Summer 2011</option>
            <option value="Fall 2011">Fall 2011</option>
            <option value="Spring 2012">Spring 2012</option>
            <option value="Summer 2012">Summer 2012</option>
            <option value="Fall 2012">Fall 2012</option>
            <option value="Spring 2013">Spring 2013</option>
            <option value="Summer 2013">Summer 2013</option>
            <option value="Fall 2013">Fall 2013</option>
            <option value="Spring 2014">Spring 2014</option>
            <option value="Summer 2014">Summer 2014</option>
            <option value="Fall 2014">Fall 2014</option>
            <option value="Spring 2015">Spring 2015</option>
            <option value="Summer 2015">Summer 2015</option>
            <option value="Fall 2015">Fall 2015</option>
            <option value="Spring 2016">Spring 2016</option>
            <option value="Summer 2016">Summer 2016</option>
            <option value="Fall 2016">Fall 2016</option>
            <option value="Spring 2017">Spring 2017</option>
            <option value="Summer 2017">Summer 2017</option>
            <option value="Fall 2017">Fall 2017</option>
            <option value="Spring 2018">Spring 2018</option>
            <option value="Summer 2018">Summer 2018</option>
            <option value="Fall 2018">Fall 2018</option>
            <option value="Spring 2019">Spring 2019</option>
            <option value="Summer 2019">Summer 2019</option>
            <option value="Fall 2019">Fall 2019</option>
            <option value="Spring 2020">Spring 2020</option>
            <option value="Summer 2020">Summer 2020</option>
            <option value="Fall 2020">Fall 2020</option>
            <option value="Spring 2021">Spring 2021</option>
            <option value="Summer 2021">Summer 2021</option>
            <option value="Fall 2021">Fall 2021</option>
            <option value="Spring 2022">Spring 2022</option>
            <option value="Summer 2022">Summer 2022</option>
            <option value="Fall 2022">Fall 2022</option>
            <option value="Spring 2023">Spring 2023</option>
            <option value="Summer 2023">Summer 2023</option>
            <option value="Fall 2023">Fall 2023</option>
            <option value="Spring 2024">Spring 2024</option>
            <option value="Summer 2024">Summer 2024</option>
            <option value="Fall 2024">Fall 2024</option>
            <option value="Spring 2025">Spring 2025</option>
            <option value="Summer 2025">Summer 2025</option>
            <option value="Fall 2025">Fall 2025</option>
            <option value="Spring 2026">Spring 2026</option>
            <option value="Summer 2026">Summer 2026</option>
            <option value="Fall 2026">Fall 2026</option>
        </select>

        <button type="submit">View</button>
    </form>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Semester</th>
                <th>Year</th>
                <th>Course Number</th>
                <th>Credit Hours</th>
                <th>Grade</th>
                <th>Instructor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Fall</td>
                <td>2025</td>
                <td>COP3813</td>
                <td>3</td>
                <td>A</td>
                <td>Dr. Smith</td>
            </tr>
            <tr>
                <td>Spring</td>
                <td>2026</td>
                <td>COP3330</td>
                <td>4</td>
                <td>B+</td>
                <td>Professor Jones</td>
            </tr>
        </tbody>
    </table>

    <br>

    <p><strong>Semester GPA:</strong> 3.57</p>
    <p><strong>Cumulative GPA:</strong> 3.72</p>

    <br>

    <a href="main.html">Back to Main Menu</a>
</body>
</html>