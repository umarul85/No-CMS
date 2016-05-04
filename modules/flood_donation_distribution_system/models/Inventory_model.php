<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Inventory_model
 *
 * @author No-CMS Module Generator
 */
class Inventory_model extends  CMS_Model{

    public function get_data($keyword, $page=0){
        $limit = 10;
        $query = $this->db->select('inventory.inventory_id, center.center_name as center_center_name, inventory.item_name, inventory.item_type, inventory.quantity, inventory.donator_name, inventory.receiver_name, inventory.received_date, inventory.send_date, inventory.remark')
            ->from($this->t('inventory').' as inventory')
            ->join($this->t('center').' as center', 'inventory.center_id=center.center_id', 'left')
            ->like('center.center_name', $keyword)
            ->or_like('inventory.item_name', $keyword)
            ->or_like('inventory.item_type', $keyword)
            ->or_like('inventory.quantity', $keyword)
            ->or_like('inventory.donator_name', $keyword)
            ->or_like('inventory.receiver_name', $keyword)
            ->or_like('inventory.received_date', $keyword)
            ->or_like('inventory.send_date', $keyword)
            ->or_like('inventory.remark', $keyword)
            ->limit($limit, $page*$limit)
            ->get();
        $result = $query->result();
        return $result;
    }

}
