<?php include 'headerPage.php' ?>


<body background="https://thumbs.dreamstime.com/z/to-do-list-white-paper-pencils-background-template-56711188.jpg">
<?php
date_default_timezone_set('America/New_York');
?>

<form action="index.php?page=tasks&action=addTask" method="POST" name="addTaskForm">

    <div class="container"><br><br><br><br><br><br>
        <div class="row">
            <div class="col-lg-2">
                <label><h4><b>Created Date</b></h4></label>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                     <input type="text" name="createddate" class="form-control" value="<?php echo date("j/n/Y"); ?>" readonly required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><h4><b>Due Date</b></h4></label>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="date" name="duedate" class="form-control" id="duedate"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><h4><b>Message</b></h4></label>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" name="message" class="form-control" id="message">
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group text-right">
                    <button class="btn btn-primary" id="addTask" form="form1" type="submit" value="save">Add Task</button>
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