<?php

class accountsController extends http\controller
{
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }
    //to call the show function the url is index.php?page=task&action=list_task
    public static function all()
    {
        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);
    }
    public static function signup()
    {
        self::getTemplate('new_user');
    }
    public static function register()
    {
        $user = accounts::findUserbyUsername($_REQUEST['email']);

        if ($user == FALSE) {
            $record = new account();
            $record->email = $_POST['email'];
            $record->fname = $_POST['fname'];
            $record->lname = $_POST['lname'];
            $record->phone = $_POST['phone'];
            $record->birthday = $_POST['bday'];
            $record->gender = $_POST['gender'];
            $record->password = \utility\passwordHash::setPassword($_POST['password']);
            $record->save();
            header('Location: index.php');
        }
        else{
            echo 'Sorry. This email is already registered.';
        }
    }

    public static function store()
    {
        print_r($_POST);
    }
    public static function update_profile()
    {
        $records = accounts::findOne($_REQUEST['id']);
        $record = new account();
        $record->id=$records->id;
        $record->email=$_POST['email'];
        $record->fname=$_POST['fname'];
        $record->lname=$_POST['lname'];
        $record->phone=$_POST['phone'];
        $record->birthday=$_POST['birthday'];
        $record->gender=$_POST['gender'];
        $record->save();
        session_start();
        header('Location: index.php?page=accounts&action=showProf');
    }
    public static function edit_profile()
    {
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('edit_account', $record);
    }
    public static function show_profile()
    {
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('show_account', $record);
    }
    public static function editPass()
    {
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('password_change', $record);
    }
    public static function updatePass()
    {
        $records = accounts::findOne($_REQUEST['id']);
        if(\utility\passwordHash::checkPassword($_POST['currentPass'],$records->password) == TRUE){
            if($_POST['newPass1']==$_POST['newPass2']){
                $record = new account();
                $record->id=$records->id;
                $record->email=$records->email;
                $record->fname=$records->fname;
                $record->lname=$records->lname;
                $record->password = \utility\passwordHash::setPassword($_POST['newPass1']);
                $record->save();
                header('Location: index.php?page=accounts&action=showProf');
            }else{
                echo 'Passwords do not match.';
            }
        }else{
            echo 'Wrong password entered.';
        }

    }
    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {
        $record = new account();

        $record = accounts::findUserbyUsername($_POST['uname']);
        if ($record == FALSE) {
            $errorMsg= 'user not found';
        } else {
            if(\utility\passwordHash::checkPassword($_POST['psw'],$record->password) == TRUE) {
                session_start();
                $_SESSION["userID"] = $record->id;
                $_SESSION["userEmail"] = $record->email;
                header('Location: index.php?page=tasks&action=allOneUser&id='.$record->id);
            } else {
                $errorMsg= 'password does not match';
            }
        }
        if ($errorMsg) {
            $_SESSION['validation_message'] = $errorMsg; //session variable to save the error message to show as an alert.
        }
        print "<html></html><script type='text/javascript'>alert(\"$errorMsg\");</script></html>";

    }
    public static function logout()
    {
        session_destroy();
        header('Location: index.php');
    }
}
?>