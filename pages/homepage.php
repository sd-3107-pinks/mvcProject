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

<form action="index.php?page=accounts&action=signup" method="POST">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Tasks.com</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><font color="white">Not a member yet?</font><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">Signup</button></li>
        </ul>
    </div>
</nav>
</form>


<form action="index.php?page=accounts&action=login" method="POST">


        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="well login-box">
                        <form action="">
                            <legend>Login</legend>
                            <div class="form-group">
                                <label for="uname">E-mail or Username</label>
                                <input value='' id="uname" name="uname" placeholder="E-mail or Username" type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="psw">Password</label>
                                <input id="psw" name="psw" value='' placeholder="Password" type="text" class="form-control" />
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-success btn-login-submit" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</form>

</body>
</html>