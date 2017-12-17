
<?php include 'headerPage.php' ?>

<body background="https://marketinginsidergroup.com/wp-content/uploads/2016/12/pexels-photo-70232.jpeg">

<form action="index.php?page=accounts&action=update&id=<?php echo $data->id; ?> " method="POST" name="userformedit">

    <div class="container">
        <label style="color:white"><h1><b>Hi <?php echo $data->fname; ?>! You can change your details here..!! </b></h1></label>
        <div class="row">
            <div class="col-lg-2">
                <label style="color:white"><b>Email</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $data->email; ?>" required>
                </div>
            </div>
            <div class="col-lg-1">
                <span id="emailok" class="glyphicon glyphicon-ok" style="color:white">Valid</span>
                <span id="emailnotok" class="glyphicon glyphicon-remove" style="color:white">Invalid</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label style="color:white"><b>First Name</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $data->fname; ?>" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label style="color:white"><b>Last Name</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $data->lname; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label style="color:white"><b>Phone</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" value="<?php echo $data->phone; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label style="color:white"><b>Birthday</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="birthday" class="form-control" value="<?php echo $data->birthday; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label style="color:white"><b>Gender</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="gender" class="form-control" value="<?php echo $data->gender; ?>" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group text-right">
                    <button class="btn btn-default" type="submit" form="form1" id="editAccount" value="save">Save</button>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group text-center">
                    <a style="color:white" href="index.php?page=accounts&action=showProf"><h4><b>Cancel</b></h4></a>
                </div>
            </div>
        </div>

    </div>

</form>

<script type="text/javascript" src="validations/jsvalidation.js">

</script>
</body>
</html>