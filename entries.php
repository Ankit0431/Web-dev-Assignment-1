<?php
    require "function.php";
    require_once "User.php";
    $pdo = connectToDb();
    $users = selectAll($pdo,"users","User");
    // var_dump($users);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <table border="2" style="margin-top: 3%;" class="table table-striped table-hover">
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
        </tr>
        <?php foreach ($users as $value) :?>
            <tr>
                <td><?= $value->id;?></td>
                <td><?= $value->name;?></td>
                <td><?= $value->email;?></td>
                <td><?= $value->gender;?></td>
                <td><?= $value->city;?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <button class="btn btn-info" onClick="location.href = 'index.php';" style="margin-left: 1%;">Back to form</button><br>
</body>
</html>