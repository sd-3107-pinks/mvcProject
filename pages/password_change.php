
<?php include 'headerPage.php' ?>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
?>

<form action="index.php?page=accounts&action=updatePass&id=<?php echo $data->id; ?> " method="POST" name="changePass">

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <label><b>Enter your current password:</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="currentPass"  required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label><b>Enter New Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="newPass1" id="password">
                </div>
            </div>
            <div class="col-lg-2">
                <span id="passStrong" class="glyphicon glyphicon-ok">Strong</span>
                <span id="passWeak" class="glyphicon glyphicon-warning-sign">Weak</span>
                <span id="passSmall" class="glyphicon glyphicon-remove">Not Enough</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label><b>Re-enter Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="newPass2" id="password2">
                </div>
            </div>
            <div class="col-lg-3">
                <span id="passMatched" class="glyphicon glyphicon-ok">Passwords match</span>
                <span id="passNotMatched" class="glyphicon glyphicon-remove">Passwords do not match</span>
            </div>
        </div>

        <div class="col-lg-2"><button class="btn btn-primary" type="submit" id="updatePass" value="save">Update Password</button><a href="index.php?page=accounts&action=showProf">Cancel</a></div>
    </div>

</form>
<script type="text/javascript" src="validations/jsvalidation.js">

</script>
</body>
</html>