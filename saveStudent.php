<?php
    include_once ('initSession.php');

    $firstNameError = $lastNameError = $NameError = "";
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];

    if (isset($_POST['btn-student'])) {
        if(!empty($_POST['fname']&&$_POST['lname'])){

            $student = new Student($_POST['fname'], $_POST['lname']);
            $projectsManager -> listOfStudents[] = $student;
            print_r($projectsManager -> listOfStudents);
        }
        else {
            switch (1) {
                case empty($_POST["fname"]):
                    $firstNameError =  "your First name is required *";
                    break;
                case empty($_POST["lname"]):
                    $lastNameError = "your Last name is reqiured *";
                    break;
                default:
                    $NameError = "your Name is required *";
                }
        }

        
    }
    include_once ("enterStudent.php");
?>