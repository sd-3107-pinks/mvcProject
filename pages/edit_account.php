
<?php include 'headerPage.php' ?>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
?>

<form action="index.php?page=accounts&action=update&id=<?php echo $data->id; ?> " method="post" id="form1">

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <label><b>Email</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="email" value="<?php echo $data->email; ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>First Name</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="fname" value="<?php echo $data->fname; ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Last Name</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="lname" value="<?php echo $data->lname; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Phone</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="phone" value="<?php echo $data->phone; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Birthday</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="birthday" value="<?php echo $data->birthday; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Gender</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="gender" value="<?php echo $data->gender; ?>" >
            </div>
        </div>

    </div>
    <div class="col-lg-2"><button class="btn btn-primary" type="submit" form="form1" value="save">Save</button><a href="index.php?page=accounts&action=showProf">Cancel</a></div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>