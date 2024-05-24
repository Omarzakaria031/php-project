<?php 
    include_once('initSession.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter a Student</title>
    <link rel="stylesheet" href="./Assets/master.css">
    <style>
    .required-field {
        color: red;
        font-size: 16px;
    }

</style>
</head>
<body>
    <div class="form-container">
        <h2>Enter a Student</h2>
        <span class = "required-field">
                <?php 
                    if(isset($NameError)){
                        echo $NameError;
                    }
                ?>
            </span>
        <form method="post" action="saveStudent.php">
            <label>First Name:</label>
            <?php 
                    if(isset($firstNameError)){
                        echo $firstNameError;
                    }
                ?>
            </span>
            <input type="text" name="fname" class = "input" value = "<?php if(isset($firstName)) echo $firstName ?>">
            
            <label>Last Name:</label>
            <?php 
                    if(isset($lastError)){
                        echo $lastError;
                    }
                ?>
            </span>
            <input type="text" name="lname" class = "input" value = "<?php if(isset($lastName)) echo $lastName ?>">
            
            <div class = "inline-container">
                <button class ="btn-donate" name = "btn-student">Submit</button>
            </div>
            <div class = "inline-container">
                <button class ="btn-donate" name = "btn-back"><a href = "home.php">Back</a></button>
            </div>
        </form>
    </div>
</body>
</html>
