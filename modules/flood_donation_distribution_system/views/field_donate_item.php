<?php
    // Generate HTML. Parameters: column_name, caption, array_of_field_captions
    $HTML = build_md_html_table('item', 'Inventory', array('Center Name', 'Item Name', 'Item Type', 'Item Measurement Type', 'Current Quantity', 'Request Quantity'));
    // Generate global variable and event-binding
    $JS   = build_md_global_variable_script('item', 'inventory_id', $date_format, $result, $options);
    $JS  .= build_md_event_script('item', '{{ module_site_url }}manage_donate/index/insert', '{{ module_site_url }}manage_donate/index/update');
    // Show HTML
    echo $HTML;
    // Show JS
    echo '<script type="text/javascript">'.$JS.'</script>';
?>
<script type="text/javascript">

    // Function to get default value
    function default_row_item(){
        return {
            center_id : '',
            item_name : '',
            item_type : '',
            item_measurement_type : '',
            current_quantity : '',
            request_quantity : '',
        };
    }

    // Function to add row
    function add_table_row_item(value){

        // Prepare some variables
        var input_prefix = 'md_field_item_col';
        var row_index    = RECORD_INDEX_item;
        var inputs       = new Array();
        
        // FIELD "center_id"
        var input_id    = input_prefix + 'center_id' + row_index;
        var field_value = get_object_property_as_str(value, 'center_id');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric chzn-select" column_name="center_id" >';
        html += build_single_select_option(field_value, OPTIONS_item.center_id);
        html += '</select>';
        inputs.push(html);

        // FIELD "item_name"
        var input_id    = input_prefix + 'item_name' + row_index;
        var field_value = get_object_property_as_str(value, 'item_name');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="item_name" >';
        html += build_single_select_option(field_value, OPTIONS_item.item_name);
        html += '</select>';
        inputs.push(html);

        // FIELD "item_type"
        var input_id    = input_prefix + 'item_type' + row_index;
        var field_value = get_object_property_as_str(value, 'item_type');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="item_type" >';
        html += build_single_select_option(field_value, OPTIONS_item.item_type);
        html += '</select>';
        inputs.push(html);

        // FIELD "item_measurement_type"
        var input_id    = input_prefix + 'item_measurement_type' + row_index;
        var field_value = get_object_property_as_str(value, 'item_measurement_type');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="item_measurement_type" >';
        html += build_single_select_option(field_value, OPTIONS_item.item_measurement_type);
        html += '</select>';
        inputs.push(html);

        // FIELD "current_quantity"
        var input_id    = input_prefix + 'current_quantity' + row_index;
        var field_value = get_object_property_as_str(value, 'current_quantity');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric" column_name="current_quantity" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "request_quantity"
        var input_id    = input_prefix + 'request_quantity' + row_index;
        var field_value = get_object_property_as_str(value, 'request_quantity');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric" column_name="request_quantity" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // Return inputs
        return inputs;
    }

</script>
