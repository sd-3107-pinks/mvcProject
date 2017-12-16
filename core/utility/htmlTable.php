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
        $tableGen = '<table style="background-color:aquamarine" class="table-hover table table-bordered table-striped"><tr>';
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
        $tableGen = '<table class="table-hover table table-striped"><tr>';
        $tableGen .= '<tr><td>Id</td><td>'.$tableData->id.'</td></tr>';
        $tableGen .= '<tr><td>Email</td><td>'.$tableData->email.'</td></tr>';
        $tableGen .= '<tr><td>First Name</td><td>'.$tableData->fname.'</td></tr>';
        $tableGen .= '<tr><td>Last Name</td><td>'.$tableData->lname.'</td></tr>';
        $tableGen .= '<tr><td>Phone</td><td>'.$tableData->phone.'</td></tr>';
        $tableGen .= '<tr><td>Birthday</td><td>'.$tableData->birthday.'</td></tr>';
        $tableGen .= '<tr><td>Gender</td><td>'.$tableData->gender.'</td>';
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}
?>