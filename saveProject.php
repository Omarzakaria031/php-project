<?php
    include_once ("initSession.php");


    $nameError = $durationError = $Error = "";
    $ProjectName = $_POST['project_name'];
    $duration = $_POST['project_duration'];
    $description = $_POST['project_description'];

    if (isset($_POST['btn-project'])) {
        
        if(!empty($_POST['project_name']&&$_POST['project_description']&&$_POST['project_duration'])){

            $project = new Project($_POST['project_name'], $_POST['project_description'], $_POST['project_duration']);
            $projectsManager->listOfProjects[] = $project;
        }
        else{
            switch(true){
                    case empty($_POST["project_name"]):
                        $nameError = "Your project name is reqiured *";
                        break;
                    case empty($_POST["project_duration"]):
                        $durationError = "Your project duration is reqiured *";
                        break;
                    default:
                        $Error = "Warning! Please Enter All fields*";
                        break;
            }
        }
    }
    if(isset($_POST["btn-back"])){
        header("Location:home.php");
    }
    include_once ("enterProject.php");

?>
