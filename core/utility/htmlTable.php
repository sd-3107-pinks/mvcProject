<?php
namespace utility;
//namespace MyProject\mvcName;
class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {
        if(!empty($array)) {
            $tableGen = '<table class="table-hover table table-bordered table-striped">';
            $tableGen .= '<tr>';
            //this grabs the first element of the array so we can extract the field headings for the table
            $fieldHeadings = $array[0];
            $fieldHeadings = get_object_vars($fieldHeadings);
            $fieldHeadings = array_keys($fieldHeadings);
            //this gets the page being viewed so that the table routes requests to the correct controller
            $referingPage = $_REQUEST['page'];
            foreach ($fieldHeadings as $heading) {
                $tableGen .= '<th>' . $heading . '</th>';
            }
            $tableGen .= '</tr>';
            foreach ($array as $record) {
                $tableGen .= '<tr>';
                foreach ($record as $key => $value) {
                    if ($key == 'id') {
                        $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                    } else {
                        $tableGen .= '<td>' . $value . '</td>';
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
        $tableGen = '<table class="table-hover table table-bordered table-striped"><tr>';
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
        $tableGen = '<table class="table-hover table table-bordered table-striped"><tr>';
        $tableGen .= '<tr><td>id</td><td>'.$tableData->id.'</td></tr>';
        $tableGen .= '<tr><td>Owner email</td><td>'.$tableData->owneremail.'</td></tr>';
        $tableGen .= '<tr><td>Owner id</td><td>'.$tableData->ownerid.'</td></tr>';
        $tableGen .= '<tr><td>created date</td><td>'.$tableData->createddate.'</td></tr>';
        $tableGen .= '<tr><td>due date</td><td>'.$tableData->duedate.'</td></tr>';
        $tableGen .= '<tr><td>message</td><td>'.$tableData->message.'</td></tr>';
        $tableGen .= '<tr><td>isdone</td><td>'.$tableData->isdone.'</td>';
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}
?>