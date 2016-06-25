<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Installation script for FLOOD DONATION DISTRIBUTION SYSTEM
 *
 * @author No-CMS Module Generator
 */
class Info extends CMS_Module {

    //////////////////////////////////////////////////////////////////////////////
    // NAVIGATIONS
    //////////////////////////////////////////////////////////////////////////////
    protected $NAVIGATIONS = array(
            // Flood Donation Distribution System
            array(
                'navigation_name'   => 'index',
                'url'               => 'flood_donation_distribution_system',
                'authorization_id'  => PRIV_EVERYONE,
                'default_layout'    => NULL,
                'title'             => 'Flood Donation Distribution System',
                'parent_name'       => NULL,
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Browse Center
            array(
                'navigation_name'   => 'browse_center',
                'url'               => 'browse_center',
                'authorization_id'  => PRIV_EVERYONE,
                'default_layout'    => NULL,
                'title'             => 'Browse Center',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Browse Inventory
            array(
                'navigation_name'   => 'browse_inventory',
                'url'               => 'browse_inventory',
                'authorization_id'  => PRIV_EVERYONE,
                'default_layout'    => NULL,
                'title'             => 'Browse Inventory',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Browse Flood Victim Detail
            array(
                'navigation_name'   => 'browse_flood_victim_detail',
                'url'               => 'browse_flood_victim_detail',
                'authorization_id'  => PRIV_EVERYONE,
                'default_layout'    => NULL,
                'title'             => 'Browse Flood Victim Detail',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),

        );

    protected $BACKEND_NAVIGATIONS = array(
            // Manage Center
            array(
                'entity_name'       => 'center',
                'url'               => 'manage_center',
                'authorization_id'  => PRIV_AUTHORIZED,
                'default_layout'    => 'default-one-column',
                'title'             => 'Manage Center',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Manage Inventory
            array(
                'entity_name'       => 'inventory',
                'url'               => 'manage_inventory',
                'authorization_id'  => PRIV_AUTHORIZED,
                'default_layout'    => 'default-one-column',
                'title'             => 'Manage Inventory',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Manage Flood Victim Detail
            array(
                'entity_name'       => 'flood_victim_detail',
                'url'               => 'manage_flood_victim_detail',
                'authorization_id'  => PRIV_AUTHORIZED,
                'default_layout'    => 'default-one-column',
                'title'             => 'Manage Flood Victim Detail',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Manage item detail
            array(
                'entity_name'       => 'item',
                'url'               => 'manage_item',
                'authorization_id'  => PRIV_AUTHORIZED,
                'default_layout'    => 'default-one-column',
                'title'             => 'Manage item detail',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Manage Type Of Item Detail
            array(
                'entity_name'       => 'item_type',
                'url'               => 'manage_item_type',
                'authorization_id'  => PRIV_AUTHORIZED,
                'default_layout'    => 'default-one-column',
                'title'             => 'Manage Type Of Item Detail',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Manage Transfer Item To Other
            array(
                'entity_name'       => 'transfer',
                'url'               => 'manage_transfer',
                'authorization_id'  => PRIV_AUTHORIZED,
                'default_layout'    => 'default-one-column',
                'title'             => 'Manage Transfer Item To Other',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Manage Item Measurement Type
            array(
                'entity_name'       => 'item_measurement_type',
                'url'               => 'manage_item_measurement_type',
                'authorization_id'  => PRIV_AUTHORIZED,
                'default_layout'    => 'default-one-column',
                'title'             => 'Manage Item Measurement Type',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),
            // Manage Donate
            array(
                'entity_name'       => 'donate',
                'url'               => 'manage_donate',
                'authorization_id'  => PRIV_AUTHORIZED,
                'default_layout'    => 'default-one-column',
                'title'             => 'Manage Donate',
                'parent_name'       => 'index',
                'index'             => NULL,
                'description'       => NULL,
                'bootstrap_glyph'   => NULL,
                'notification_url'  => NULL,
                'hidden'            => NULL,
                'static_content'    => NULL,
            ),

        );

    //////////////////////////////////////////////////////////////////////////////
    // CONFIGURATIONS
    //////////////////////////////////////////////////////////////////////////////
    protected $CONFIGS = array();

    //////////////////////////////////////////////////////////////////////////////
    // PRIVILEGES
    //////////////////////////////////////////////////////////////////////////////
    protected $PRIVILEGES = array();

    //////////////////////////////////////////////////////////////////////////////
    // GROUPS
    //////////////////////////////////////////////////////////////////////////////
    protected $GROUPS = array(
            array('group_name' => 'Flood Donation Distribution System Manager', 'description' => 'Flood Donation Distribution System Manager'),
        );
    protected $GROUP_NAVIGATIONS = array();
    protected $GROUP_BACKEND_NAVIGATIONS = array(
            'Flood Donation Distribution System Manager' => array('center', 'inventory', 'flood_victim_detail', 'item', 'item_type', 'transfer', 'item_measurement_type', 'donate')
        );
    protected $GROUP_PRIVILEGES = array();
    protected $GROUP_BACKEND_PRIVILEGES = array(
            'Flood Donation Distribution System Manager' => array(
                'center' => array('read', 'add', 'edit', 'delete', 'list', 'back_to_list', 'print', 'export'),
                'inventory' => array('read', 'add', 'edit', 'delete', 'list', 'back_to_list', 'print', 'export'),
                'flood_victim_detail' => array('read', 'add', 'edit', 'delete', 'list', 'back_to_list', 'print', 'export'),
                'item' => array('read', 'add', 'edit', 'delete', 'list', 'back_to_list', 'print', 'export'),
                'item_type' => array('read', 'add', 'edit', 'delete', 'list', 'back_to_list', 'print', 'export'),
                'transfer' => array('read', 'add', 'edit', 'delete', 'list', 'back_to_list', 'print', 'export'),
                'item_measurement_type' => array('read', 'add', 'edit', 'delete', 'list', 'back_to_list', 'print', 'export'),
                'donate' => array('read', 'add', 'edit', 'delete', 'list', 'back_to_list', 'print', 'export'),
            )
        );

    //////////////////////////////////////////////////////////////////////////////
    // TABLES and DATA
    //////////////////////////////////////////////////////////////////////////////
    protected $TABLES = array(
        // center
        'center' => array(
            'key'    => 'center_id',
            'fields' => array(
                'center_id'            => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'center_name'          => array("type" => 'varchar',    "constraint" => 50,  "null" => TRUE),
                'residing_address'     => array("type" => 'tinytext',   "null" => TRUE),
                'city'                 => array("type" => 'varchar',    "constraint" => 11,  "null" => TRUE),
                'postal_code'          => array("type" => 'int',        "constraint" => 11,  "null" => TRUE),
                'state_region'         => array("type" => 'enum',    "constraint" => array("Johor","Kedah","Kelantan","Melaka","Negeri Sembilan","Pahang","Pulau Pinang","Perak","Perlis","Sabah","Sarawak","Selangor","Terengganu"), "null" => TRUE),
                'center_type'          => array("type" => 'enum',    "constraint" => array("FLOOD CENTER","DONATION COLLECTION CENTER"), "null" => TRUE),
                'center_total_capacity' => array("type" => 'int',        "constraint" => 11,  "null" => TRUE),
                'center_current_cappacity' => array("type" => 'int',        "constraint" => 11,  "null" => TRUE),
                'center_status'        => array("type" => 'enum',    "constraint" => array("Open","Closed"), "null" => TRUE),
                'center_open_date'     => array("type" => 'timestamp',  "null" => TRUE),
                'center_closed_date'   => array("type" => 'timestamp',  "null" => TRUE),
                'center_manager'       => array("type" => 'int',        "constraint" => 20,  "null" => TRUE),
            ),
        ),
        // inventory
        'inventory' => array(
            'key'    => 'inventory_id',
            'fields' => array(
                'inventory_id'         => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'center_id'            => array("type" => 'int',        "constraint" => 10,  "null" => TRUE),
                'item_name'            => array("type" => 'varchar',    "constraint" => 50,  "null" => TRUE),
                'item_type'            => array("type" => 'varchar',    "constraint" => 50,  "null" => TRUE),
                'item_measurement_type' => array("type" => 'varchar',    "constraint" => 20,  "null" => TRUE),
                'current_quantity'     => array("type" => 'int',        "constraint" => 11,  "null" => TRUE),
                'request_quantity'     => array("type" => 'int',        "constraint" => 11,  "null" => TRUE),
            ),
        ),
        // flood_victim_detail
        'flood_victim_detail' => array(
            'key'    => 'victim_id',
            'fields' => array(
                'victim_id'            => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'center_id'            => array("type" => 'int',        "constraint" => 10,  "null" => TRUE),
                'victim_name'          => array("type" => 'tinytext',   "null" => TRUE),
                'victim_ic'            => array("type" => 'varchar',    "constraint" => 12,  "null" => TRUE),
                'gender'               => array("type" => 'enum',    "constraint" => array("male","female"), "null" => TRUE),
                'age'                  => array("type" => 'int',        "constraint" => 11,  "null" => TRUE),
                'contact_number'       => array("type" => 'tinytext',   "null" => TRUE),
                'home_address'         => array("type" => 'tinytext',   "null" => TRUE),
                'city'                 => array("type" => 'varchar',    "constraint" => 11,  "null" => TRUE),
                'postal_code'          => array("type" => 'int',        "constraint" => 11,  "null" => TRUE),
                'state_region'         => array("type" => 'enum',    "constraint" => array("Johor","Kedah","Kelantan","Melaka","Negeri Sembilan","Pahang","Pulau Pinang","Perak","Perlis","Sabah","Sarawak","Selangor","Terengganu"), "null" => TRUE),
                'current_ipta_ipts'    => array("type" => 'varchar',    "constraint" => 11,  "null" => TRUE),
                'victim_status'        => array("type" => 'enum',    "constraint" => array("In","Out"), "null" => TRUE),
                'victim_enter_date'    => array("type" => 'timestamp',  "null" => TRUE),
                'victim_out_date'      => array("type" => 'timestamp',  "null" => TRUE),
            ),
        ),
        // item
        'item' => array(
            'key'    => 'item_id',
            'fields' => array(
                'item_id'              => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'item_name'            => array("type" => 'varchar',    "constraint" => 20,  "null" => TRUE),
            ),
        ),
        // item_type
        'item_type' => array(
            'key'    => 'item_type_id',
            'fields' => array(
                'item_type_id'         => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'item_type'            => array("type" => 'varchar',    "constraint" => 50,  "null" => TRUE),
            ),
        ),
        // transfer
        'transfer' => array(
            'key'    => 'transfer_id',
            'fields' => array(
                'transfer_id'          => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'item_name'            => array("type" => 'varchar',    "constraint" => 20,  "null" => TRUE),
            ),
        ),
        // inventory_transfer
        'inventory_transfer' => array(
            'key'    => 'id',
            'fields' => array(
                'id'                   => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'inventory_id'         => array("type" => 'int',        "constraint" => 10,  "null" => TRUE),
                'item_id'              => array("type" => 'int',        "constraint" => 10,  "null" => TRUE),
                'priority'             => array("type" => 'int',        "constraint" => 10,  "null" => TRUE),
            ),
        ),
        // item_measurement_type
        'item_measurement_type' => array(
            'key'    => 'measurement_id',
            'fields' => array(
                'measurement_id'       => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'item_measurement'     => array("type" => 'varchar',    "constraint" => 20,  "null" => TRUE),
            ),
        ),
        // donate
        'donate' => array(
            'key'    => 'donate_id',
            'fields' => array(
                'donate_id'            => 'TYPE_INT_UNSIGNED_AUTO_INCREMENT',
                'donator_name'         => array("type" => 'varchar',    "constraint" => 20,  "null" => TRUE),
                'center_name'          => array("type" => 'int',        "constraint" => 10,  "null" => TRUE),
                'item'                 => array("type" => 'varchar',    "constraint" => 255, "null" => TRUE),
            ),
        ),
    );
    protected $DATA = array(
        
    );

    //////////////////////////////////////////////////////////////////////////////
    // ACTIVATION
    //////////////////////////////////////////////////////////////////////////////
    public function do_activate(){
        // TODO : write your module activation script here
    }

    //////////////////////////////////////////////////////////////////////////////
    // DEACTIVATION
    //////////////////////////////////////////////////////////////////////////////
    public function do_deactivate(){
        // TODO : write your module deactivation script here
    }

    //////////////////////////////////////////////////////////////////////////////
    // UPGRADE
    //////////////////////////////////////////////////////////////////////////////
    // TODO: write your upgrade function: do_upgrade_to_x_x_x

}
