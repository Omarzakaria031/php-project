<?php 
    include_once('initSession.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="./Assets/master.css">
</head>
<body>
    <div class="button-container">
        <button class="BUTTON"><a href="enterProject.php">Enter a new Project</a></button>
        <button class="BUTTON"><a href="enterStudent.php">Enter a new Student</a></button>
        <button class="BUTTON"><a href="assignProjectToStudent.php">Assign project to Student</a></button>
        <button class="BUTTON"><a href="displayProjects.php">Display project with student</a></button>
        <button class="BUTTON"><a href="changeAssignement.php">Change assignment for student</a></button>
    </div>
</body>
</html>
