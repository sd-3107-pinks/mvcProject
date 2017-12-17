<?php
class accounts extends \database\collection
{
    protected static $modelName = 'account';
    public static  function findUserbyUsername($uname) {

        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE email ="' . $uname.'"';
        $recordsSet = self::getResults($sql);

        if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet[0];
        }
    }
}
?>