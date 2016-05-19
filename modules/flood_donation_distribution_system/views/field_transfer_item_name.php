<?php
    // Generate HTML. Parameters: column_name, caption, array_of_field_captions
    $HTML = build_md_html_table('item_name', 'Inventory', array('Center Name', 'Item Name', 'Item Type', 'Quantity', 'Donator Name ', 'Receiver Name', 'Received Date', 'Send Date', 'Remark'));
    // Generate global variable and event-binding
    $JS   = build_md_global_variable_script('item_name', 'inventory_id', $date_format, $result, $options);
    $JS  .= build_md_event_script('item_name', '{{ module_site_url }}manage_transfer/index/insert', '{{ module_site_url }}manage_transfer/index/update');
    // Show HTML
    echo $HTML;
    // Show JS
    echo '<script type="text/javascript">'.$JS.'</script>';
?>
<script type="text/javascript">

    // Function to get default value
    function default_row_item_name(){
        return {
            center_id : '',
            item_name : '',
            item_type : '',
            quantity : '',
            donator_name : '',
            receiver_name : '',
            received_date : '',
            send_date : '',
            remark : '',        };
    }

    // Function to add row
    function add_table_row_item_name(value){

        // Prepare some variables
        var input_prefix = 'md_field_item_name_col';
        var row_index    = RECORD_INDEX_item_name;
        var inputs       = new Array();
        
        // FIELD "center_id"
        var input_id    = input_prefix + 'center_id' + row_index;
        var field_value = get_object_property_as_str(value, 'center_id');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric chzn-select" column_name="center_id" >';
        html += build_single_select_option(field_value, OPTIONS_item_name.center_id);
        html += '</select>';
        inputs.push(html);

        // FIELD "item_name"
        var input_id    = input_prefix + 'item_name' + row_index;
        var field_value = get_object_property_as_str(value, 'item_name');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="item_name" >';
        html += build_single_select_option(field_value, OPTIONS_item_name.item_name);
        html += '</select>';
        inputs.push(html);

        // FIELD "item_type"
        var input_id    = input_prefix + 'item_type' + row_index;
        var field_value = get_object_property_as_str(value, 'item_type');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="item_type" >';
        html += build_single_select_option(field_value, OPTIONS_item_name.item_type);
        html += '</select>';
        inputs.push(html);

        // FIELD "quantity"
        var input_id    = input_prefix + 'quantity' + row_index;
        var field_value = get_object_property_as_str(value, 'quantity');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric" column_name="quantity" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "donator_name"
        var input_id    = input_prefix + 'donator_name' + row_index;
        var field_value = get_object_property_as_str(value, 'donator_name');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="donator_name" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "receiver_name"
        var input_id    = input_prefix + 'receiver_name' + row_index;
        var field_value = get_object_property_as_str(value, 'receiver_name');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="receiver_name" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "received_date"
        var input_id    = input_prefix + 'received_date' + row_index;
        var field_value = get_object_property_as_str(value, 'received_date');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="received_date" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "send_date"
        var input_id    = input_prefix + 'send_date' + row_index;
        var field_value = get_object_property_as_str(value, 'send_date');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="send_date" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "remark"
        var input_id    = input_prefix + 'remark' + row_index;
        var field_value = get_object_property_as_str(value, 'remark');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="remark" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // Return inputs
        return inputs;
    }

</script>
