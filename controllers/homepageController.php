<?php
//this is the controller for the index page.
class homepageController extends http\controller
{
    public static function show()
    {
        if(key_exists('userID',$_SESSION)) {
            header('Location: index.php?page=tasks&action=allOneUser&id='.$_SESSION["userID"]);
        } else {
            self::getTemplate('homepage');
        }
    }
}
?>