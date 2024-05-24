<?php

class Project{
    public $name;
    public $description;
    public $duration;
    public function __construct($name, $description, $duration){
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
    }
}

class Student{
    public $firstName;
    public $lastName;
    public function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

class ProjectManager{
    public $listOfProjects = [] ;
    public $listOfStudents = [];
    public $record = [];
    

    
    public function displayAvailableProjects(){   // display project not selected by any student
        $availableProjects = [];
        foreach($this->listOfProjects as $project){
            if(!in_array($project->name, array_keys($this->record))){
                $availableProjects[] = $project;
            }
        }
        return $availableProjects;
    }

   
    public function checkStudentProject($student){  // check if student has a project
        foreach($this->record as $project => $students){
            if(in_array($student, $students)){
                return $project;
            }
        }
        return false;
    }
    
    public function displayAvailableStudents(){  // display student not assigned to any project
        $availableStudents = [];
        foreach($this->listOfStudents as $student){
            if(!$this->checkStudentProject("{$student->firstName} {$student->lastName}")){
                $availableStudents[] = $student;
            }
        }
        return $availableStudents;
    }
    
    public function deleteStudentFromProject($project, $student){  // delete student from project
        $key = array_search($student, $this->record[$project]);
        unset($this->record[$project][$key]);
    }
    
    public function addStudentToProject($project, $student){  // add student to project
        $this->record[$project][] = $student;
    }
}
?>
