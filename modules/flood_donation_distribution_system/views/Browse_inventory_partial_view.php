<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$contents = '';
foreach($result as $record){
    $contents .= '<div id="record_'.$record->inventory_id.'" class="record_container panel panel-default">';
    $contents .= '<div class="panel-body">';

    // TABLE
    $contents .= '<table class="table table-hover">';
    $contents .= '<tbody>';

    // COLUMNS
    //CENTER NAME
    $contents .= '<tr>';
    $contents .= '<th>Center Name</th>';
    $contents .= '<td>' . $record->center_center_name . '</td>';
    $contents .= '</tr>';
    //ITEM NAME
    $contents .= '<tr>';
    $contents .= '<th>Item Name</th>';
    $contents .= '<td>' . $record->item_item_name . '</td>';
    $contents .= '</tr>';
    //ITEM TYPE
    $contents .= '<tr>';
    $contents .= '<th>Item Type</th>';
    $contents .= '<td>' . $record->item_type_item_type . '</td>';
    $contents .= '</tr>';
    //QUANTITY
    $contents .= '<tr>';
    $contents .= '<th>Quantity</th>';
    $contents .= '<td>' . $record->quantity . '</td>';
    $contents .= '</tr>';
    //DONATOR NAME 
    $contents .= '<tr>';
    $contents .= '<th>Donator Name </th>';
    $contents .= '<td>' . $record->donator_name . '</td>';
    $contents .= '</tr>';
    //RECEIVER NAME
    $contents .= '<tr>';
    $contents .= '<th>Receiver Name</th>';
    $contents .= '<td>' . $record->receiver_name . '</td>';
    $contents .= '</tr>';
    //RECEIVED DATE
    $contents .= '<tr>';
    $contents .= '<th>Received Date</th>';
    $contents .= '<td>' . $record->received_date . '</td>';
    $contents .= '</tr>';
    //SEND DATE
    $contents .= '<tr>';
    $contents .= '<th>Send Date</th>';
    $contents .= '<td>' . $record->send_date . '</td>';
    $contents .= '</tr>';
    //REMARK
    $contents .= '<tr>';
    $contents .= '<th>Remark</th>';
    $contents .= '<td>' . $record->remark . '</td>';
    $contents .= '</tr>';

    $contents .= '</tbody>';
    $contents .= '</table>';


    // EDIT AND DELETE BUTTON
    if($allow_navigate_backend && ($have_edit_privilege || $have_delete_privilege)){

        $contents .= '<div class="edit_delete_record_container pull-right">';

        // EDIT BUTTON
        if($have_edit_privilege){
            $contents .= '<a href="'.$backend_url.'/edit/'.$record->inventory_id.'" class="btn edit_record btn-default" primary_key = "'.$record->inventory_id.'"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
            $contents .= '&nbsp;';
        }
        // DELETE BUTTON
        if($have_delete_privilege){
            $contents .= '<a href="'.$backend_url.'/delete/'.$record->inventory_id.'" class="btn delete_record btn-danger" primary_key = "'.$record->inventory_id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
        }

        $contents .= '</div>';

        $contents .= '<div style="clear:both;"></div>';
    }

    // end of div record
    $contents .= '</div>';
    $contents .= '</div>';
}

echo $contents;
