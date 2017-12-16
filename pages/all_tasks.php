
<?php include 'headerPage.php' ?>

<body background="https://thumbs.dreamstime.com/z/to-do-list-white-paper-pencils-background-template-56711188.jpg">
<div class="container"><br><br><br><br><br><br>
    <div class="row">

        <div class="col-md-12 text-center">
            <?php
            $dataTable = utility\htmlTable::genarateTableFromMultiArray($data);
            if($dataTable){
                print $dataTable;
            }else{?>
        </div>
        <div class="col-md-12">
                <label><h1>No data found. Please create a task.</h1></label>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>