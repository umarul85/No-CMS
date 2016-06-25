<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$contents = '';
foreach($result as $record){
    $contents .= '<div id="record_'.$record->center_id.'" class="record_container panel panel-default">';
    $contents .= '<div class="panel-body">';

    // TABLE
    $contents .= '<table class="table table-hover">';
    $contents .= '<tbody>';

    // COLUMNS
    //CENTER NAME
    $contents .= '<tr>';
    $contents .= '<th>Center Name</th>';
    $contents .= '<td>' . $record->center_name . '</td>';
    $contents .= '</tr>';
    //RESIDING ADDRESS
    $contents .= '<tr>';
    $contents .= '<th>Residing Address</th>';
    $contents .= '<td>' . $record->residing_address . '</td>';
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
    //CENTER TYPE
    $contents .= '<tr>';
    $contents .= '<th>Center Type</th>';
    $contents .= '<td>' . $record->center_type . '</td>';
    $contents .= '</tr>';
    //CENTER TOTAL CAPACITY
    $contents .= '<tr>';
    $contents .= '<th>Center Total Capacity</th>';
    $contents .= '<td>' . $record->center_total_capacity . '</td>';
    $contents .= '</tr>';
    //CENTER CURRENT CAPPACITY
    $contents .= '<tr>';
    $contents .= '<th>Center Current Cappacity</th>';
    $contents .= '<td>' . $record->center_current_cappacity . '</td>';
    $contents .= '</tr>';
    //CENTER STATUS
    $contents .= '<tr>';
    $contents .= '<th>Center Status</th>';
    $contents .= '<td>' . $record->center_status . '</td>';
    $contents .= '</tr>';
    //CENTER OPEN DATE
    $contents .= '<tr>';
    $contents .= '<th>Center Open Date</th>';
    $contents .= '<td>' . $record->center_open_date . '</td>';
    $contents .= '</tr>';
    //CENTER CLOSED DATE
    $contents .= '<tr>';
    $contents .= '<th>Center Closed Date</th>';
    $contents .= '<td>' . $record->center_closed_date . '</td>';
    $contents .= '</tr>';
    //CENTER MANAGER
    $contents .= '<tr>';
    $contents .= '<th>Center manager</th>';
    $contents .= '<td>' . $record->center_manager . '</td>';
    $contents .= '</tr>';

    $contents .= '</tbody>';
    $contents .= '</table>';


    // EDIT AND DELETE BUTTON
    if($allow_navigate_backend && ($have_edit_privilege || $have_delete_privilege)){

        $contents .= '<div class="edit_delete_record_container pull-right">';

        // EDIT BUTTON
        if($have_edit_privilege){
            $contents .= '<a href="'.$backend_url.'/edit/'.$record->center_id.'" class="btn edit_record btn-default" primary_key = "'.$record->center_id.'"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
            $contents .= '&nbsp;';
        }
        // DELETE BUTTON
        if($have_delete_privilege){
            $contents .= '<a href="'.$backend_url.'/delete/'.$record->center_id.'" class="btn delete_record btn-danger" primary_key = "'.$record->center_id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
        }

        $contents .= '</div>';

        $contents .= '<div style="clear:both;"></div>';
    }

    // end of div record
    $contents .= '</div>';
    $contents .= '</div>';
}

echo $contents;
