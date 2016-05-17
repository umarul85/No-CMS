<?php
    // Generate HTML. Parameters: column_name, caption, array_of_field_captions
    $HTML = build_md_html_table('item_name', 'item detail', array());
    // Generate global variable and event-binding
    $JS   = build_md_global_variable_script('item_name', 'item_id', $date_format, $result, $options);
    $JS  .= build_md_event_script('item_name', '{{ module_site_url }}manage_inventory/index/insert', '{{ module_site_url }}manage_inventory/index/update');
    // Show HTML
    echo $HTML;
    // Show JS
    echo '<script type="text/javascript">'.$JS.'</script>';
?>
<script type="text/javascript">

    // Function to get default value
    function default_row_item_name(){
        return {
                    };
    }

    // Function to add row
    function add_table_row_item_name(value){

        // Prepare some variables
        var input_prefix = 'md_field_item_name_col';
        var row_index    = RECORD_INDEX_item_name;
        var inputs       = new Array();
        
        // Return inputs
        return inputs;
    }

</script>
