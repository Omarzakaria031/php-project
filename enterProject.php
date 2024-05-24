<?php 
    include_once('initSession.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter a Project</title>
    <link rel="stylesheet" href="./Assets/master.css">
</head>
<style>
    .required-field {
        color: red;
        font-size: 16px;
    }

</style>
<body>
    <div class="form-container">
        <h2>Enter a project</h2>
        <span class = "required-field">
                <?php 
                    if(isset($Error)){
                        echo $Error;
                    }
                ?>
            </span>
        <form method="post" action="saveProject.php">
            <label>Project Name:</label>
            <span class = "required-field">
                <?php 
                    if(isset($nameError)){
                        echo $nameError;
                    }
                ?>
            </span>
            <input type="text" name="project_name" class = "input" value = "<?php if(isset($ProjectName)) echo $ProjectName ?>" placeholder = "Enter The Name of Project">
            
            <label>Project Description:</label>
            <textarea name="project_description" value = "<?php if(isset($description)) echo $description ?>"></textarea>
            
            <label>Project Duration:</label>
            <?php 
                    if(isset($durationError)){
                        echo $durationError;
                    }
                ?>
            <input type="text" name="project_duration" class = "input" value = "<?php if(isset($duration)) echo $duration ?>" placeholder = "Enter The Duration of Project">
            
            <div class="inline-container">
                <button class="btn-donate" name ="btn-project">Submit</button>
            </div>
            <div class="inline-container">
                <button class="btn-donate" name ="btn-back"><a href="home.php">Back</a></button>
            </div>
        </form>
    </div>
</body>
</html>
