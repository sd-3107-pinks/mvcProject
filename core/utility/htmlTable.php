<?php
namespace utility;
class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {
        if(!empty($array)) {
            $tableGen = '<table class="table-hover table table-striped">';
            $tableGen .= '<tr>';
            $fieldHeadings = $array[0];
            $fieldHeadings = get_object_vars($fieldHeadings);
            $fieldHeadings = array_keys($fieldHeadings);
            $referingPage = $_REQUEST['page'];
            foreach ($fieldHeadings as $heading) {
                $tableGen .= '<th style="text-align:center;background-color:goldenrod">' . $heading . '</th>';
            }
            $tableGen .= '</tr>';
            foreach ($array as $record) {
                $tableGen .= '<tr>';
                foreach ($record as $key => $value) {
                    if ($key == 'id') {
                        $tableGen .= '<td style="text-align:center"><b><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></b></td>';
                    } else {
                        $tableGen .= '<td style="text-align:center"><b>' . $value . '</b></td>';
                    }
                }
                $tableGen .= '</tr>';
            }
            $tableGen .= '</table>';
            return $tableGen;
        }
    }
    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table class="table-hover table table-striped"><tr>';
        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
    public static function generateTableForOneTodo($tableData)
    {
        $tableGen = '<table style="background-color:lightcyan" class="table-hover table table-bordered table-striped"><tr>';
        $tableGen .= '<tr><td><h6><b>Id</b></h6></td><td><h6><b>'.$tableData->id.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Owner Email</b></h6></td><td><h6><b>'.$tableData->owneremail.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Owner Id</b></h6></td><td><h6><b>'.$tableData->ownerid.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Created Date</b></h6></td><td><h6><b>'.$tableData->createddate.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Due Date</b></h6></td><td><h6><b>'.$tableData->duedate.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Message</b></h6></td><td><h6><b>'.$tableData->message.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Is Done</b></h6></td><td><h6><b>'.$tableData->isdone.'</b></h6></td>';
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
    public static function generateTableForOneAccount($tableData)
    {
        $tableGen = '<table style="background-color:beige" class="table-hover table table-striped table-striped"><tr>';
        $tableGen .= '<tr><td><h6><b>Id</b></h6></td><td><h6><b>'.$tableData->id.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Email</b></h6></td><td><h6><b>'.$tableData->email.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>First Name</b></h6></td><td><h6><b>'.$tableData->fname.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Last Name</b></h6></td><td><h6><b>'.$tableData->lname.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Phone</b></h6></td><td><h6><b>'.$tableData->phone.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Birthday</b></h6></td><td><h6><b>'.$tableData->birthday.'</b></h6></td></tr>';
        $tableGen .= '<tr><td><h6><b>Gender</b></h6></td><td><h6><b>'.$tableData->gender.'</b></h6></td>';
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}
?>