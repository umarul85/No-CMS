<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$contents = '';
foreach($result as $record){
    $contents .= '<div id="record_'.$record->person_id.'" class="record_container panel panel-default">';
    $contents .= '<div class="panel-body">';

    // TABLE
    $contents .= '<table class="table table-hover">';
    $contents .= '<tbody>';

    // COLUMNS
    //PERSON IC
    $contents .= '<tr>';
    $contents .= '<th>Person Ic</th>';
    $contents .= '<td>' . $record->person_ic . '</td>';
    $contents .= '</tr>';
    //PERSON NAME
    $contents .= '<tr>';
    $contents .= '<th>Person Name</th>';
    $contents .= '<td>' . $record->Person_name . '</td>';
    $contents .= '</tr>';
    //GENDER
    $contents .= '<tr>';
    $contents .= '<th>Gender</th>';
    $contents .= '<td>' . $record->gender . '</td>';
    $contents .= '</tr>';
    //AGE
    $contents .= '<tr>';
    $contents .= '<th>Age</th>';
    $contents .= '<td>' . $record->age . '</td>';
    $contents .= '</tr>';
    //CONTACT NUMBER
    $contents .= '<tr>';
    $contents .= '<th>Contact Number</th>';
    $contents .= '<td>' . $record->contact_number . '</td>';
    $contents .= '</tr>';
    //HOME ADDRESS
    $contents .= '<tr>';
    $contents .= '<th>Home Address</th>';
    $contents .= '<td>' . $record->home_address . '</td>';
    $contents .= '</tr>';
    //CITY
    $contents .= '<tr>';
    $contents .= '<th>City</th>';
    $contents .= '<td>' . $record->city . '</td>';
    $contents .= '</tr>';
    //POSTAL CODE
    $contents .= '<tr>';
    $contents .= '<th>Postal Code</th>';
    $contents .= '<td>' . $record->postal_code . '</td>';
    $contents .= '</tr>';
    //STATE/REGION
    $contents .= '<tr>';
    $contents .= '<th>State/Region</th>';
    $contents .= '<td>' . $record->state_region . '</td>';
    $contents .= '</tr>';
    //CURRENT IPTA/IPTS
    $contents .= '<tr>';
    $contents .= '<th>Current IPTA/IPTS</th>';
    $contents .= '<td>' . $record->IPTA_IPTS_list_name . '</td>';
    $contents .= '</tr>';
    //PERSON STATUS
    $contents .= '<tr>';
    $contents .= '<th>Person Status</th>';
    $contents .= '<td>' . $record->person_status . '</td>';
    $contents .= '</tr>';
    //PERSON ENTER DATE
    $contents .= '<tr>';
    $contents .= '<th>Person Enter Date</th>';
    $contents .= '<td>' . $record->person_enter_date . '</td>';
    $contents .= '</tr>';
    //PERSON OUT DATE
    $contents .= '<tr>';
    $contents .= '<th>Person Out Date</th>';
    $contents .= '<td>' . $record->person_out_date . '</td>';
    $contents .= '</tr>';

    $contents .= '</tbody>';
    $contents .= '</table>';


    // EDIT AND DELETE BUTTON
    if($allow_navigate_backend && ($have_edit_privilege || $have_delete_privilege)){

        $contents .= '<div class="edit_delete_record_container pull-right">';

        // EDIT BUTTON
        if($have_edit_privilege){
            $contents .= '<a href="'.$backend_url.'/edit/'.$record->person_id.'" class="btn edit_record btn-default" primary_key = "'.$record->person_id.'"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
            $contents .= '&nbsp;';
        }
        // DELETE BUTTON
        if($have_delete_privilege){
            $contents .= '<a href="'.$backend_url.'/delete/'.$record->person_id.'" class="btn delete_record btn-danger" primary_key = "'.$record->person_id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
        }

        $contents .= '</div>';

        $contents .= '<div style="clear:both;"></div>';
    }

    // end of div record
    $contents .= '</div>';
    $contents .= '</div>';
}

echo $contents;
