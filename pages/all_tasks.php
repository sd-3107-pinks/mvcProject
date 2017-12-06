<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WSD Project 2</title>

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<form action="index.php?page=accounts&action=logout" method="post" id="form3">


    <button type="submit" form="form3" value="logout">Logout</button>
</form>
<?php
//this is how you print something
//print_r($data);
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