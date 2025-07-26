<?php 
include "database.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Electric Meter Reading - Relevé de Compteur Électrique</title>
        <link rel="stylesheet" href="index1.css"/>
    </head>
    <body>
        <form action="index1.php" method="POST" onsubmit="submitReading(event)">
            <h1>Electric Meter Entry <img src="11.jpg" alt=""></h1>
            <input type="text" id="read" name="read" readonly><br>
            <span id="span1"></span><br>
            <input type="text" id="start" name="start" placeholder="Start (kwh)"><br>
            <span id="span2"></span><br>
            <input type="text" id="end" name="end" placeholder="End (kwh)"><br>
            <span id="span3"></span><br>
            <input type="date" id="startDate" name="startDate" placeholder="Start Date"><br>
            <span id="span4"></span><br>
            <input type="date" id="endDate" name="endDate" placeholder="End Date"><br>
            <span id="span5"></span><br>
            <input type="submit" class="button">
            <p>Don't have an account? <a href="index2.php">Register now</a></p>
        </form>
        <script src="index1.js"></script>
    </body>
</html>