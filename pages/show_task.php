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

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
session_start();
?>
<form action="index.php?page=accounts&action=logout" method="post" id="form3">


    <button type="submit" form="form3" value="logout">Logout</button>
</form>



<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form1">
    <?php print utility\htmlTable::generateTableForOneTodo($data);
  //  print_r($data);
    ?>

    <button type="submit" form="form1" value="edit">Edit</button>
</form>


<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2">


    <button type="submit" form="form2" value="delete">Delete</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a>
</form>




<script src="js/scripts.js"></script>
</body>
</html>