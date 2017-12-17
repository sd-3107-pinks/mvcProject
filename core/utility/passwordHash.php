<?php
namespace utility;
class passwordHash
{
    public static function setPassword($password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;
    }
    public static function checkPassword($password,$userPassword) {
        $checkpsw = password_verify($password, $userPassword);
        return $checkpsw;
    }
}
?>