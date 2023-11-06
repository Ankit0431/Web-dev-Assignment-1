<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
require "function.php";
//collection of data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $flag = "OK";   //flag for data validation
    $msg = "";      //error message to be displayed if data validation fails
    //data validation
    if($name == ""){      //validating name (should not be empty)
        $flag = "NOTOK";
        $msg = $msg."Name cannot be empty!<br>";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){  //validating correctness of email
        $flag = "NOTOK";
        $msg = $msg."Enter a valid email address<br>";
    }
    if(!isset($_POST["gender"])){   //validating gender (should not be empty)
        $flag = "NOTOK";
        $msg = $msg."Select a gender!<br>";
    }
    else{
        $gender = $_POST["gender"];
    }
    if($city == "Choose city..."){   //validating city (should not be default selection)
        $flag = "NOTOK";
        $msg = $msg."Select a city!<br>";
    }
?>
<!-- processing -->
<?php if($flag === "OK"): ?>
        Form has been submitted successfully!<br><br>
        <button class='btn btn-success' onClick="location.href = 'index.php';" style="margin-right: 10px; margin-left: 10px;" >Go Back</button>
        <button class='btn btn-primary' onClick="location.href = 'entries.php';">View Entries</button>
        <?php
        //inserting data to database
        $pdo = connectToDb();
        $sql = "INSERT INTO users (name, email, gender, city) VALUES (?,?,?,?)";
        $statement= $pdo->prepare($sql);
        $statement->execute([$name, $email, $gender, $city]);
        ?>
    <?php else: ?>
        <!-- printing error message -->
        <font color = red> <?=$msg;?> </font><br>
        <input type = 'button' value = 'Retry' class='btn btn-warning' onClick='history.go(-1)'>
    <?php endif; ?>