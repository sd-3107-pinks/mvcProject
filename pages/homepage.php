<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WSD Project 2</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesCss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body background="https://2.bp.blogspot.com/-CuBJscsOt2E/VvRPODA-_MI/AAAAAAAAABY/C2k40Ef4ttAk7AcuPL5kCclP84KmhvY2Q/s1600/IMG_20160324_121143990.jpg">

<form action="index.php?page=accounts&action=signup" method="POST">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><b>Tasks.com</b></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><font color="white"><b>Not a member yet?</b></font><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit"><b>Signup</b></button></li>
        </ul>
    </div>
</nav>
</form>


<form action="index.php?page=accounts&action=login" method="POST">


        <div class="container"><br><br>
            <div class="row vdivide">
                <div class="col-md-6">
                    <label style="color:white"><h1><b> Welcome to Tasks.com</b></h1></label>
                    <label style="color:white"><h2>
                            We help you create and manage your tasks
                            inspite of your everyday busy schedule.<br>
                            You just need to sign up and all for FREE..!!
                            Enjoy..!!

                        </h2></label>

                </div>
                <div class="col-md-6">
                    <div class="well login-box">
                        <form action="">
                            <legend><b>Login</b></legend>
                            <div class="form-group">
                                <label for="uname">E-mail or Username</label>
                                <input value='' id="uname" name="uname" placeholder="E-mail or Username" type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="psw">Password</label>
                                <input id="psw" name="psw" value='' placeholder="Password" type="password" class="form-control" />
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-login-submit" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</form>

</body>
</html>