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

<body background="https://hdwallsource.com/img/2016/7/keyboard-macro-wallpaper-background-50592-52284-hd-wallpapers.jpg">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><b>Tasks.com</b></a>
        </div>
    </div>
</nav>

<form action="index.php?page=accounts&action=register" method="POST" name="userform">

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
                <div class="well login-box">
                    <form action="">
                        <legend>Sign Up</legend>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="email"><h5><b>E-mail Adress</b></h5></label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input value='' id="email" name="email" placeholder="Enter email" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <span id="emailok" class="glyphicon glyphicon-ok">Valid</span>
                                <span id="emailnotok" class="glyphicon glyphicon-remove">Invalid</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="fname"><h5><b>First Name</b></h5></label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input value='' id="fname" name="fname" placeholder="Enter First Name" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="lname"><h5><b>Last Name</b></h5></label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input value='' id="lname" name="lname" placeholder="Enter Last Name" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="phone"><h5><b>Phone Number</b></h5></label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input value='' id="phone" maxlength="10" name="phone" placeholder="Enter Phone Number" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="bday"><h5><b>Birthday</b></h5></label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input value='' id="bday" name="bday" placeholder="Enter Date of Birth" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="gender"><h5><b>Gender</b></h5></label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input value='' id="gender" name="gender" placeholder="Enter Gender" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="password"><h5><b>Password</b></h5></label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input id="password" name="password" value='' placeholder="Enter Password" type="password" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span id="passStrong" class="glyphicon glyphicon-ok">Strong</span>
                                <span id="passWeak" class="glyphicon glyphicon-warning-sign">Weak</span>
                                <span id="passSmall" class="glyphicon glyphicon-remove">Not Enough</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="password2"><h5><b>Re-enter Password</b></h5></label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input id="password2" name="password2" value='' placeholder="Re-enter Password" type="password" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span id="passMatched" class="glyphicon glyphicon-ok">Passwords match</span>
                                <span id="passNotMatched" class="glyphicon glyphicon-remove">Passwords do not match</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-login-submit" type="submit" id="register" form="form1" value="save">Register</button>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group text-center">
                                    <a href="index.php">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</form>
<script type="text/javascript" src="validations/jsvalidation.js">

</script>
<script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
</body>
</html>