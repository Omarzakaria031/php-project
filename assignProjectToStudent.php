<?php 
    include_once('initSession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Projects To Students</title>
    <style>
        .required-field {
            color: red;
        }
        </style>
</head>
<body>
    <div class="assignement-container">
        <?php if (!empty($projectsManager->listOfProjects)) : ?>
            <link rel="stylesheet" href="./Assets/assignStyle.css">
            <form action="assignManager.php" method="post">
                <h2>Assign a project to 2 student</h2>
                <span>Select a project:</span>

                <select name="projectSelected" class = "selected-options">
                    <!-- display project not taken -->
                    <?php foreach ($projectsManager->displayAvailableProjects() as $project) : ?>
                        <option value="<?php echo $project->name; ?>"><?php echo $project->name; ?></option>
                    <?php endforeach; ?>
                </select>

                <span>
                    <?php if(isset($msgError)){
                        echo $msgError;
                    } 
                    ?>
                </span>

                <span>Check the student for the selected project:</span>
                
                <!-- display student not taken -->
                <?php foreach ($projectsManager->displayAvailableStudents() as $student) : ?>

                <div class='checkbox-container'>

                    <input class = 'checkbox-list' type="checkbox" name="select-student[]" value="<?php echo $student->firstName." ".$student->lastName; ?>"><?php echo $student->firstName . ' ' . $student->lastName; ?>

                </div>
                <?php endforeach; ?>
                
                <span>
                    <?php if(isset($msgDone)){
                        echo $msgDone;
                    } 
                    ?>
                </span>

                <div class="inline-container">
                    <button class = "ASSIGN-BUTTON" name = "assign-Student">Assign The Students</button>
                </div>
                <div class="inline-container">
                    <button class = "ASSIGN-BUTTON" name = "btn-back"><a href = "home.php">Back</a></button>
                </div>
            </form>
                
        <?php else : 
            echo "<link rel = 'stylesheet' href = './assets/emptyStyle.css'>";?>
            <div class="wave">
                <svg viewBox="0 0 1440 320">
                    <path class="path" fill-rule="evenodd" clip-rule="evenodd" d="M0 32C176 102.7 351 149.7 526 149.7C664.5 149.7 773.4 102.7 938 64C1102.6 25.3 1268 32 1440 32C1352.9 32 1264.9 32 1177.9 32C1090.9 32 1002.9 32 915.9 32C791.9 32 683.9 64.7 595.9 101.4C507.9 138 430.9 149.7 353.9 149.7C276.9 149.7 198.9 102.7 121.9 32C44.9 32 0 32 0 32z"></path>
                </svg>
                </div>
                <div class="wave wave-2">
                <svg viewBox="0 0 1440 320">
                    <path class="path" fill-rule="evenodd" clip-rule="evenodd" d="M0 32C176 102.7 351 149.7 526 149.7C664.5 149.7 773.4 102.7 938 64C1102.6 25.3 1268 32 1440 32C1352.9 32 1264.9 32 1177.9 32C1090.9 32 1002.9 32 915.9 32C791.9 32 683.9 64.7 595.9 101.4C507.9 138 430.9 149.7 353.9 149.7C276.9 149.7 198.9 102.7 121.9 32C44.9 32 0 32 0 32z"></path>
                </svg>
                </div>
                <div class="wave wave-3">
                <svg viewBox="0 0 1440 320">
                    <path class="path" fill-rule="evenodd" clip-rule="evenodd" d="M0 32C176 102.7 351 149.7 526 149.7C664.5 149.7 773.4 102.7 938 64C1102.6 25.3 1268 32 1440 32C1352.9 32 1264.9 32 1177.9 32C1090.9 32 1002.9 32 915.9 32C791.9 32 683.9 64.7 595.9 101.4C507.9 138 430.9 149.7 353.9 149.7C276.9 149.7 198.9 102.7 121.9 32C44.9 32 0 32 0 32z"></path>
                </svg>
                </div>
                <div class="text">
                <span style="--index: 0">N</span>
                <span style="--index: 1">o</span>
                <span style="--index: 2">
                    <span style="--index: 3">P</span>
                    <span style="--index: 4">r</span>
                    <span style="--index: 5">o</span>
                    <span style="--index: 6">j</span>
                    <span style="--index: 7">e</span>
                    <span style="--index: 8">c</span>
                    <span style="--index: 9">t</span>
                    <span style="--index: 10">s</span>
                </span>
                <span style="--index: 11">
                    <span style="--index: 12">A</span>
                    <span style="--index: 13">v</span>
                    <span style="--index: 14">a</span>
                    <span style="--index: 15">i</span>
                    <span style="--index: 16">l</span>
                    <span style="--index: 17">a</span>
                    <span style="--index: 18">b</span>
                    <span style="--index: 19">l</span>
                    <span style="--index: 20">e</span>
                </span>
                </div>
        <?php endif; ?>

        
    </div>
</body>
</html>
