<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Inventory_model
 *
 * @author No-CMS Module Generator
 */
class Inventory_model extends  CMS_Model{

    public function get_data($keyword, $page=0){
        $limit = 10;
        $query = $this->db->select('inventory.inventory_id, center.center_name as center_center_name, item.item_name as item_item_name, item_type.item_type as item_type_item_type, item_measurement_type.item_measurement as item_measurement_type_item_measurement, inventory.current_quantity, inventory.request_quantity')
            ->from($this->t('inventory').' as inventory')
            ->join($this->t('center').' as center', 'inventory.center_id=center.center_id', 'left')
            ->join($this->t('item').' as item', 'inventory.item_name=item.item_id', 'left')
            ->join($this->t('item_type').' as item_type', 'inventory.item_type=item_type.item_type_id', 'left')
            ->join($this->t('item_measurement_type').' as item_measurement_type', 'inventory.item_measurement_type=item_measurement_type.measurement_id', 'left')
            ->like('center.center_name', $keyword)
            ->or_like('item.item_name', $keyword)
            ->or_like('item_type.item_type', $keyword)
            ->or_like('item_measurement_type.item_measurement', $keyword)
            ->or_like('inventory.current_quantity', $keyword)
            ->or_like('inventory.request_quantity', $keyword)
            ->limit($limit, $page*$limit)
            ->get();
        $result = $query->result();
        return $result;
    }

}
