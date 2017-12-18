<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<table border="1"cellpadding="10" align="center" class="table table-hover" style="width:70%;">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th style="background-color:#F1ECEA;">' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '" style="text-decoration:none;">View</a></td>';
                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10" align="center" class="table table-hover" style="width:70%;" ><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th style="background-color:#F1ECEA;">' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>