<?php
class accounts extends \database\collection
{
    protected static $modelName = 'account';
    //This is the function to write to find user by ID for login.
    //Don't forget to return the object see findOne in the collection class
    public static  function findUserbyUsername($uname) {

        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE email ="' . $uname.'"';
        echo $sql;
        //grab the only record for find one and return as an object
        $recordsSet = self::getResults($sql);
        return $recordsSet[0];
    }
    public static function checkPassword($pass1,$pass2){

        if($pass1 == $pass2){
            return 1;
        }else{
            return 0;
        }
    }
}
?>