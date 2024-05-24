<?php
//when a new attendance is created

include_once ('initSession.php');  
	
	$msgError = $msgDone = "";
	if(isset($_POST['assign-Student']))
	{
		if(count($_POST['select-student']) > 2)
		{
			echo $msgError = "You can only assign one student at a time!";
			// echo "<script>alert('You can only select 2 students for each project!')</script>";
			// echo "<script>window.location.href='assignProjectToStudent.php'</script>";
			header("Location:assignProjectToStudent.php");
		}else{
			$projectSelected = $_POST['projectSelected'];
			$studentsSelected = $_POST['select-student'];
			$projectsManager->record[$projectSelected] = $studentsSelected;
			$msgDone = "Students assigned successfully!";
			// echo "<script>alert('Students assigned successfully!')</script>";
			// echo "<script>window.location.href='home.php'</script>";
			header("Location:home.php");
		}
	}

	include_once 'home.php';
?>