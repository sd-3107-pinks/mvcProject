<?php include 'headerPage.php' ?>

<body background="https://marketinginsidergroup.com/wp-content/uploads/2016/12/pexels-photo-70232.jpeg">

<form action="index.php?page=accounts&action=edit&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form1">
    <div class="container">
        <label style="color:white"><h1><b>Hi <?php echo $data->fname; ?>! This is your profile..!! </b></h1></label>
        <div class="row">

            <div class="col-md-6 text-center">
                <?php
                //this is how you print something  $data contains the record that was selected on the table.
                print utility\htmlTable::generateTableForOneAccount($data);
                ?>
            </div>
        </div>
    <div class="col-lg-2"><button class="btn btn-default  pull-right" type="submit" form="form1" value="edit">Edit</button></div>
</form>

<form action="index.php?page=accounts&action=editPass&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form2" style="float:left;">

    <div ><button class="btn btn-default" type="submit" form="form2" value="edit">Change Password</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>" style="color:white"><b>Cancel</b></a></div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>