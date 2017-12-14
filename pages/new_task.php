<?php include 'headerPage.php' ?>

<?php
session_start();
date_default_timezone_set('America/New_York');
?>

<form action="index.php?page=tasks&action=addTask" method="POST" name="addTaskForm">

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <label><b>Created Date</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                     <input type="text" name="createddate" class="form-control" value="<?php echo date("j/n/Y"); ?>" readonly required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Due Date</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="duedate" class="form-control" id="duedate"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Message</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="message" class="form-control" id="message">
                </div>
            </div>
        </div>

        <div class="col-lg-2"><button class="btn btn-primary" id="addTask" form="form1" type="submit" value="save">Add Task</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>

    </div>
</form>


<script type="text/javascript" src="validations/todovalidation.js">

</script>
</body>
</html>