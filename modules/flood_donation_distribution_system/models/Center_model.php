<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Center_model
 *
 * @author No-CMS Module Generator
 */
class Center_model extends  CMS_Model{

    public function get_data($keyword, $page=0){
        $limit = 10;
        $query = $this->db->select('center.center_id, center.center_name, center.residing_address, center.city, center.postal_code, center.state_region, center.center_type, center.center_total_capacity, center.center_current_cappacity, center.center_status, center.center_open_date, center.center_closed_date')
            ->from($this->t('center').' as center')
            ->like('center.center_name', $keyword)
            ->or_like('center.residing_address', $keyword)
            ->or_like('center.city', $keyword)
            ->or_like('center.postal_code', $keyword)
            ->or_like('center.state_region', $keyword)
            ->or_like('center.center_type', $keyword)
            ->or_like('center.center_total_capacity', $keyword)
            ->or_like('center.center_current_cappacity', $keyword)
            ->or_like('center.center_status', $keyword)
            ->or_like('center.center_open_date', $keyword)
            ->or_like('center.center_closed_date', $keyword)
            ->limit($limit, $page*$limit)
            ->get();
        $result = $query->result();
        return $result;
    }

}
