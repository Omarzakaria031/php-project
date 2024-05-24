<?php
include_once('initSession.php');

// Check if the session variable is set
if (isset($_SESSION['projectManager'])) {

    // print_r($projectsManager->record);

    // Display the project selected with students in a table
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Projects and Students</title>
        
    </head>

    <body>
        <div class="table-container">
            <?php if (!empty($projectsManager->listOfProjects)) : ?>
                <?php echo '<link rel="stylesheet" href="./Assets/displayMatrixStyle.css">';?>
                <div class="wave">
                    <svg viewBox="0 0 1440 320">
                        <path fill="#007bff" fill-opacity="0.2" d="M0,160L30,170.7C60,181,120,203,180,202.7C240,203,300,181,360,176C420,171,480,181,540,181.3C600,181,660,171,720,160C780,149,840,139,900,154.7C960,170,1020,203,1080,192C1140,181,1200,139,1260,128C1320,117,1380,139,1410,144L1440,144L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
                    </svg>
                </div>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th style = "font-style:italic; color:white ; background:#007bff">Assignments</th>
                        <?php foreach ($projectsManager->listOfStudents as $student) : ?>
                            <th><?php echo "{$student->firstName} {$student->lastName}"; ?></th>
                        <?php endforeach; ?>
                    </tr>

                    <?php foreach ($projectsManager->listOfProjects as $project) : ?>
                        <tr>
                            <td><?php echo $project->name; ?></td>
                            <?php foreach ($projectsManager->listOfStudents as $student) : ?>
                                <?php
                                if (isset($projectsManager->record[$project->name])) {
                                    if (in_array("{$student->firstName} {$student->lastName}", $projectsManager->record[$project->name])) {
                                        echo "<td>X</td>";
                                    } else {
                                        echo "<td></td>";
                                    }
                                }
                                ?>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <div class="button-container">
                    <button class = "btn btn-primary btn-donate" name = "btn-back"><a href = "home.php">Back</a></button>
                <div>
        </div>                       
            <?php else : ?>
                <link rel = 'stylesheet' href = './assets/emptyStyle.css'>
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
            
    </body>
    </html>
<?php
}
?>