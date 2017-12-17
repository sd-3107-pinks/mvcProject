
<?php include 'headerPage.php' ?>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
?>

<body background="https://marketinginsidergroup.com/wp-content/uploads/2016/12/pexels-photo-70232.jpeg">

<form action="index.php?page=accounts&action=updatePass&id=<?php echo $data->id; ?> " method="POST" name="changePass">

    <div class="container">
        <label style="color:white"><h1><b>Hi <?php echo $data->fname; ?>! Want to change your password? Here you go..!! </b></h1></label>
        <div class="row">
            <div class="col-lg-3">
                <label style="color:white"><b>Enter your current password:</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="currentPass"  required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label style="color:white"><b>Enter New Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="newPass1" id="password">
                </div>
            </div>
            <div class="col-lg-2">
                <span id="passStrong" class="glyphicon glyphicon-ok" style="color:white">Strong</span>
                <span id="passWeak" class="glyphicon glyphicon-warning-sign" style="color:white">Weak</span>
                <span id="passSmall" class="glyphicon glyphicon-remove" style="color:white">Not Enough</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label style="color:white"><b>Re-enter Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="newPass2" id="password2">
                </div>
            </div>
            <div class="col-lg-3">
                <span id="passMatched" class="glyphicon glyphicon-ok" style="color:white">Passwords match</span>
                <span id="passNotMatched" class="glyphicon glyphicon-remove" style="color:white">Passwords do not match</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group text-right">
                    <button class="btn btn-default" type="submit" id="updatePass" value="save">Update Password</button>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group text-center">
                    <a style="color:white" href="index.php?page=accounts&action=showProf"><h5><b>Cancel</b></h5></a>
                </div>
            </div>
        </div>
    </div>

</form>
<script type="text/javascript" src="validations/jsvalidation.js">

</script>
</body>
</html>