
<?php include 'headerPage.php' ?>

<body>
<form action="index.php?page=accounts&action=logout" method="post" id="form3">


    <button class=".btn-primary" type="submit" form="form3" value="logout">Logout</button>
</form>
<?php
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

</form>
<form action="index.php?page=tasks&action=create" method="POST">

    <div class="container">

        <label><b>Add a task:</b></label><button type="submit">Add Task</button>
    </div>


</form>


<script src="js/scripts.js"></script>
</body>
</html>