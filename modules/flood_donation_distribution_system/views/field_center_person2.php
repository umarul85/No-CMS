<?php
    // Generate HTML. Parameters: column_name, caption, array_of_field_captions
    $HTML = build_md_html_table('person2', 'Person Detail', array('Person Ic', 'Person Name', 'Gender', 'Age', 'Contact Number', 'Home Address', 'City', 'Postal Code', 'State/Region', 'Current IPTA/IPTS', 'Person Status', 'Person Enter Date', 'Person Out Date'));
    // Generate global variable and event-binding
    $JS   = build_md_global_variable_script('person2', 'person_id', $date_format, $result, $options);
    $JS  .= build_md_event_script('person2', '{{ module_site_url }}manage_center/index/insert', '{{ module_site_url }}manage_center/index/update');
    // Show HTML
    echo $HTML;
    // Show JS
    echo '<script type="text/javascript">'.$JS.'</script>';
?>
<script type="text/javascript">

    // Function to get default value
    function default_row_person2(){
        return {
            person_ic : '',
            Person_name : '',
            gender : '',
            age : '',
            contact_number : '',
            home_address : '',
            city : '',
            postal_code : '',
            state_region : '',
            current_ipta_ipts : '',
            person_status : '',
            person_enter_date : '',
            person_out_date : '',        };
    }

    // Function to add row
    function add_table_row_person2(value){

        // Prepare some variables
        var input_prefix = 'md_field_person2_col';
        var row_index    = RECORD_INDEX_person2;
        var inputs       = new Array();
        
        // FIELD "person_ic"
        var input_id    = input_prefix + 'person_ic' + row_index;
        var field_value = get_object_property_as_str(value, 'person_ic');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="person_ic" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "Person_name"
        var input_id    = input_prefix + 'Person_name' + row_index;
        var field_value = get_object_property_as_str(value, 'Person_name');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="Person_name" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "gender"
        var input_id    = input_prefix + 'gender' + row_index;
        var field_value = get_object_property_as_str(value, 'gender');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="gender" >';
        html += build_single_select_option(field_value, OPTIONS_person2.gender);
        html += '</select>';
        inputs.push(html);

        // FIELD "age"
        var input_id    = input_prefix + 'age' + row_index;
        var field_value = get_object_property_as_str(value, 'age');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric" column_name="age" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "contact_number"
        var input_id    = input_prefix + 'contact_number' + row_index;
        var field_value = get_object_property_as_str(value, 'contact_number');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="contact_number" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "home_address"
        var input_id    = input_prefix + 'home_address' + row_index;
        var field_value = get_object_property_as_str(value, 'home_address');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="home_address" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "city"
        var input_id    = input_prefix + 'city' + row_index;
        var field_value = get_object_property_as_str(value, 'city');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="city" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "postal_code"
        var input_id    = input_prefix + 'postal_code' + row_index;
        var field_value = get_object_property_as_str(value, 'postal_code');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric" column_name="postal_code" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "state_region"
        var input_id    = input_prefix + 'state_region' + row_index;
        var field_value = get_object_property_as_str(value, 'state_region');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="state_region" >';
        html += build_single_select_option(field_value, OPTIONS_person2.state_region);
        html += '</select>';
        inputs.push(html);

        // FIELD "current_ipta_ipts"
        var input_id    = input_prefix + 'current_ipta_ipts' + row_index;
        var field_value = get_object_property_as_str(value, 'current_ipta_ipts');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="current_ipta_ipts" >';
        html += build_single_select_option(field_value, OPTIONS_person2.current_ipta_ipts);
        html += '</select>';
        inputs.push(html);

        // FIELD "person_status"
        var input_id    = input_prefix + 'person_status' + row_index;
        var field_value = get_object_property_as_str(value, 'person_status');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' chzn-select" column_name="person_status" >';
        html += build_single_select_option(field_value, OPTIONS_person2.person_status);
        html += '</select>';
        inputs.push(html);

        // FIELD "person_enter_date"
        var input_id    = input_prefix + 'person_enter_date' + row_index;
        var field_value = get_object_property_as_str(value, 'person_enter_date');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="person_enter_date" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // FIELD "person_out_date"
        var input_id    = input_prefix + 'person_out_date' + row_index;
        var field_value = get_object_property_as_str(value, 'person_out_date');
        var html = '<input id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="person_out_date" type="text" value="'+field_value+'"/>';
        inputs.push(html);

        // Return inputs
        return inputs;
    }

</script>
