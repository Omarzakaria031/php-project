<?php
    include_once ('studentProfileManager.php');
    session_start();
    // session_destroy();

    if(!isset($_SESSION['projectManager'])){
        $_SESSION['projectManager'] = new ProjectManager();
    }
    $projectsManager = &$_SESSION['projectManager'];


    // $projectsManager->setStudentProfileManager(new StudentProfileManager());

?>
