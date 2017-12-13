<?php include 'headerPage.php' ?>

<?php
session_start();
?>

<form action="index.php?page=tasks&action=addTask" method="POST">

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <label><b>Created Date</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="createddate" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Due Date</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="duedate">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Message</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="message">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>isDone</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="isdone">
            </div>
        </div>

        <div class="col-lg-2"><button class="btn btn-primary" type="submit">Add Task</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>


    </div>


</form>


<script src="js/scripts.js"></script>
</body>
</html>