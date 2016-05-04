<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Flood_victim_detail_model
 *
 * @author No-CMS Module Generator
 */
class Flood_victim_detail_model extends  CMS_Model{

    public function get_data($keyword, $page=0){
        $limit = 10;
        $query = $this->db->select('flood_victim_detail.victim_ic, center.center_name as center_center_name, flood_victim_detail.victim_name, flood_victim_detail.gender, flood_victim_detail.age, flood_victim_detail.contact_number, flood_victim_detail.home_address, flood_victim_detail.city, flood_victim_detail.postal_code, flood_victim_detail.state_region, flood_victim_detail.current_ipta_ipts, flood_victim_detail.victim_status, flood_victim_detail.victim_enter_date, flood_victim_detail.victim_out_date')
            ->from($this->t('flood_victim_detail').' as flood_victim_detail')
            ->join($this->t('center').' as center', 'flood_victim_detail.center_id=center.center_id', 'left')
            ->like('center.center_name', $keyword)
            ->or_like('flood_victim_detail.victim_name', $keyword)
            ->or_like('flood_victim_detail.gender', $keyword)
            ->or_like('flood_victim_detail.age', $keyword)
            ->or_like('flood_victim_detail.contact_number', $keyword)
            ->or_like('flood_victim_detail.home_address', $keyword)
            ->or_like('flood_victim_detail.city', $keyword)
            ->or_like('flood_victim_detail.postal_code', $keyword)
            ->or_like('flood_victim_detail.state_region', $keyword)
            ->or_like('flood_victim_detail.current_ipta_ipts', $keyword)
            ->or_like('flood_victim_detail.victim_status', $keyword)
            ->or_like('flood_victim_detail.victim_enter_date', $keyword)
            ->or_like('flood_victim_detail.victim_out_date', $keyword)
            ->limit($limit, $page*$limit)
            ->get();
        $result = $query->result();
        return $result;
    }

}
