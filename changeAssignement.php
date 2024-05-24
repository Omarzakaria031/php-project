<?php
    include_once('initSession.php');

    ini_set('display_errors', 'Off');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Students</title>
    <link rel="stylesheet" href="./Assets/assignStyle.css">
</head>

<body>
    <div class = "assignement-container">
        <form action="" method="post">
            <span>Select a project: </span>
            <select class = "selected-options" name="projectSelected" class>
                <?php
                foreach ($projectsManager->listOfProjects as $project) {
                    echo "<option value='{$project->name}'>{$project->name}</option>";
                }
                ?>
            </select>
            <input style= "width:30%" type="submit" name="display-student-assigned" value="Display" class = "ASSIGN-BUTTON">
            <br><br>
            
            <span>Select students to be changed: </span>
            <br><br>
            <!-- list of all projects -->
            <?php
            if (isset($_POST['display-student-assigned'])) {
                $projectSelected = $_POST['projectSelected'];
                foreach ($projectsManager->record[$projectSelected] as $student) {
                    echo "<div class='checkbox-container'>";

                    echo "<input class = 'checkbox-list' type='checkbox' name='select-student[]' value='{$student}'>{$student}<br>";

                    echo "</div>";
                }
            }


            // delete student from project
            if (isset($_POST['delete-students'])) {
                $projectSelected = $_POST['projectSelected'];
                $studentsSelected = $_POST['select-student'];
                foreach ($studentsSelected as $student) {
                    $projectsManager->deleteStudentFromProject($projectSelected, $student);
                }
                echo "<p class = 'handle-error'>Student deleted from project</p>";
                if(empty($projectsManager->record[$projectSelected])){
                    unset($projectsManager->record[$projectSelected]);
                }
            }            
            ?>
            <input style= "margin-top:10px" type="submit" name="delete-students" value="delete student" class = "ASSIGN-BUTTON">
            <br><br>
            <span>Choose new available Student: </span>
            <hr>

            <!-- display the available student as a check box to assigned to the empty project -->


            <?php
            if (isset($_POST['display-student-assigned'])) {
                $projectSelected = $_POST['projectSelected'];
                $availableStudents = $projectsManager->displayAvailableStudents();
                foreach ($availableStudents as $student) {
                    echo "<div class='checkbox-container'>";

                    echo "<input type='checkbox' name='select-student[]' value='{$student->firstName} {$student->lastName}'>{$student->firstName} {$student->lastName}<br>";

                    echo "</div>";
                }
            }


            // add student to project
            if (isset($_POST['add-students'])) {
                $projectSelected = $_POST['projectSelected'];
                $studentsSelected = $_POST['select-student'];
                foreach ($studentsSelected as $student) {
                    // test if the student to the project > 2
                    if (count($projectsManager->record[$projectSelected]) < 2) {
                        $projectsManager->addStudentToProject($projectSelected, $student);
                    } else {
                        echo "<span class ='handle-error'>Sorry Can't be added! Any project can't take more than 2 students! *</span><br>";
                    }
                }
                echo "<span>Student added to project</span>";
            }
            ?>
            <br>
            
            <input type="submit" name="add-students" value="add student" class = "ASSIGN-BUTTON"><br>
            
            <div class="button-container">
                <button style= "width:80%" class = "ASSIGN-BUTTON" name = "btn-back"><a href = "home.php">Back</a></button>
            <div>
        </form>
    </div>
</body>

</html>