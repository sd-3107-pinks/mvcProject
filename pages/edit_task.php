
<?php include 'headerPage.php' ?>

<?php
date_default_timezone_set('America/New_York');
?>
<body background="https://thumbs.dreamstime.com/z/to-do-list-white-paper-pencils-background-template-56711188.jpg">
<form action="index.php?page=tasks&action=update&id=<?php echo $data->id; ?> " method="post" name="editTaskForm">

    <div class="container"><br><br><br><br><br><br>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Owner Email</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="owneremail" class="form-control" value="<?php echo $data->owneremail; ?>" readonly required disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Owner ID</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="ownerid" class="form-control" value="<?php echo $data->ownerid; ?>" readonly required disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Created Date</b></label>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" name="createddate" class="form-control" value="<?php echo $data->createddate; ?>" readonly disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Due Date</b></label>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="date" name="duedate" id="duedate" class="form-control" value="<?php echo $data->duedate; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Message</b></label>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" name="message" id="message" class="form-control" value="<?php echo $data->message; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>isDone</b></label>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                <input type="text" name="isdone" id="isdone" class="form-control" value="<?php echo $data->isdone; ?>" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group text-right">
                    <button class="btn btn-primary" id="editTask" type="submit" form="form1" value="save">Save</button>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group text-center">
                    <a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript" src="validations/todovalidation.js">

</script>
</body>
</html>