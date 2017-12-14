
<?php include 'headerPage.php' ?>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
?>

<form action="index.php?page=accounts&action=update&id=<?php echo $data->id; ?> " method="POST" name="userformedit">

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <label><b>Email</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $data->email; ?>" required>
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
                    <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $data->fname; ?>" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Last Name</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $data->lname; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Phone</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" value="<?php echo $data->phone; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Birthday</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="birthday" class="form-control" value="<?php echo $data->birthday; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Gender</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="gender" class="form-control" value="<?php echo $data->gender; ?>" >
                </div>
            </div>
        </div>

        <div class="col-lg-2"><button class="btn btn-primary" type="submit" form="form1" id="editAccount" value="save">Save</button><a href="index.php?page=accounts&action=showProf">Cancel</a></div>
    </div>

</form>

<script type="text/javascript" src="validations/jsvalidation.js">

</script>
</body>
</html>