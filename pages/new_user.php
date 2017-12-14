<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WSD Project 2</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Tasks.com</a>
        </div>
    </div>
</nav>

<?php
//this is how you print something
//print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<form action="index.php?page=accounts&action=register" method="POST" name="userform">

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <label><b>Email</b></label>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <span id="emailok" class="glyphicon glyphicon-ok">Valid</span>
                <span id="emailnotok" class="glyphicon glyphicon-remove">Invalid</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>First Name</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" placeholder="Enter First Name" id="fname" name="fname" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Last Name</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" placeholder="Enter Last Name" id="lname" name="lname" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Phone Number</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" placeholder="Enter Phone Number" name="phone" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Birthday</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" placeholder="Enter Birthday" name="bday" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Gender</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" placeholder="Enter gender" name="gender" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" placeholder="Enter password" name="password" id="password" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-2">
                <span id="passStrong" class="glyphicon glyphicon-ok">Strong</span>
                <span id="passWeak" class="glyphicon glyphicon-warning-sign">Weak</span>
                <span id="passSmall" class="glyphicon glyphicon-remove">Not Enough</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Reenter Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" placeholder="Reenter password" name="password2" id="password2" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-3">
                <span id="passMatched" class="glyphicon glyphicon-ok">Passwords match</span>
                <span id="passNotMatched" class="glyphicon glyphicon-remove">Passwords do not match</span>
            </div>
        </div>

        <div class="col-lg-2"><button class="btn btn-primary" type="submit" id="register" form="form1" value="save">Register</button><a href="index.php">Cancel</a></div>
    </div>

</form>
<script type="text/javascript" src="validations/jsvalidation.js">

</script>
</body>
</html>