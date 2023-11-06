<?php
require_once "User.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Sample Form</title>
    <style>
        .Form {
            padding-top: 20px;
            font-size: larger;
            margin-left: 3%;
            margin-right: 3%;
        }
    </style>
</head>

<body>
    <div class="Form">
        <form action="input.php" method="POST">
            <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">
                    Name:
                </label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Jon Doe">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    Email:
                </label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    Gender:
                </label><br>
                <input type="radio" name="gender" value="Male" class="form-check-input" id="flexRadioDefault1" style="margin-left: 25px;" />
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label><br>
                <input type="radio" name="gender" value="Female" class="form-check-input" id="flexRadioDefault1" style="margin-left: 25px;" />
                <label class="form-check-label" for="flexRadioDefault1">
                    Female
                </label><br>
                <input type="radio" name="gender" value="Other" class="form-check-input" id="flexRadioDefault1" style="margin-left: 25px;" />
                <label class="form-check-label" for="flexRadioDefault1">
                    Other
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    City:
                </label> <select name="city" class="form-select">
                    <option selected>Choose city...</option>
                    <option value="Nagpur">Nagpur</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Delhi">Delhi</option>
                </select>
            </div>
            <input class="btn btn-danger" type="reset" value="Reset">
            <input class="btn btn-primary" type="submit" value="Submit" />
            <br><br>
        </form>
        <button class="btn btn-info" onClick="location.href = 'entries.php';">View Entries</button>
    </div>
</body>

</html>