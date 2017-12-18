<?php include 'headerPage.php' ?>

<body background="https://thumbs.dreamstime.com/z/to-do-list-white-paper-pencils-background-template-56711188.jpg">
<div class="container"><br><br><br><br><br>
    <div class="row">

        <div class="col-md-6 text-center">
            <?php print utility\htmlTable::generateTableForOneTodo($data); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group text-right">
                <form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form1">
                    <button class="btn btn-primary text-center" type="submit" form="form1" value="edit">Edit</button>
                </form>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group text-center">
                <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2" style="float:left;">
                    <button class="btn btn-primary" type="submit" form="form2" value="delete">Delete</button>
                </form>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group text-center">
                <a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a>
            </div>
        </div>
    </div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>