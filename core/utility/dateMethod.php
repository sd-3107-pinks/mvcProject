<?php
namespace utility;
class dateMethod
{
    public static function setDateFormat($timeZone) {
        date_default_timezone_set($timeZone);
    }
    public static function changeDateFormat($dateVar) {
        date_default_timezone_set('America/New_York');
        $format = "d/m/Y";
        $dateobj = \DateTime::createFromFormat($format, $dateVar);
        return $dateobj->format(\Datetime::ATOM);
    }
}
?>