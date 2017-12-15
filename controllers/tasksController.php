<?php

class tasksController extends http\controller
{
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }
    public static function editTask()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
    }
    //to call the show function the url is index.php?page=task&action=list_task
    public static function all()
    {
        $records = todos::findAll();
        self::getTemplate('all_tasks', $records);
    }
    public static function allOneUser()
    {
        $records = todos::findTasksbyID($_REQUEST['id']);
        self::getTemplate('all_tasks', $records);
    }
    public static function create()
    {
        self::getTemplate('new_task');
    }

    public static function addTask()
    {
        session_start();
        date_default_timezone_set('America/New_York');
        $format = "d/m/Y";
        $record = new todo();
        $record->owneremail = $_SESSION["userEmail"];
        $record->ownerid = $_SESSION["userID"];
        $createddate=$_POST['createddate'];
        $dateobj = DateTime::createFromFormat($format, $createddate);
        $iso_datetime_created = $dateobj->format(Datetime::ATOM);
        $record->createddate = $iso_datetime_created;
        $duedate=$_POST['duedate'];
        $dateobj = DateTime::createFromFormat($format, $duedate);
        $iso_datetime_due = $dateobj->format(Datetime::ATOM);
        $record->duedate = $iso_datetime_due;
        $record->message = $_POST['message'];
        $record->save();
        header('Location: index.php?page=tasks&action=allOneUser&id='.$_SESSION["userID"]);

    }
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        session_start();
        header('Location: index.php?page=tasks&action=allOneUser&id='.$_SESSION["userID"]);
    }
    public static function update()
    {
        $records = todos::findOne($_REQUEST['id']);
        $record = new todo();
        $record->id=$records->id;
        $record->owneremail=$_POST['owneremail'];
        $record->ownerid=$_POST['ownerid'];
        $record->createddate=$_POST['createddate'];
        $record->duedate=$_POST['duedate'];
        $record->message=$_POST['message'];
        $record->isdone=$_POST['isdone'];
        $record->save();
        session_start();
        header('Location: index.php?page=tasks&action=allOneUser&id='.$_SESSION["userID"]);
    }
}
?>