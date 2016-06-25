<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Person_detail_model
 *
 * @author No-CMS Module Generator
 */
class Person_detail_model extends  CMS_Model{

    public function get_data($keyword, $page=0){
        $limit = 10;
        $query = $this->db->select('person_detail.person_id, person_detail.person_ic, person_detail.Person_name, person_detail.gender, person_detail.age, person_detail.contact_number, person_detail.home_address, person_detail.city, person_detail.postal_code, person_detail.state_region, IPTA_IPTS_list.name as IPTA_IPTS_list_name, person_detail.person_status, person_detail.person_enter_date, person_detail.person_out_date')
            ->from($this->t('person_detail').' as person_detail')
            ->join($this->t('IPTA_IPTS_list').' as IPTA_IPTS_list', 'person_detail.current_ipta_ipts=IPTA_IPTS_list.id', 'left')
            ->like('person_detail.person_ic', $keyword)
            ->or_like('person_detail.Person_name', $keyword)
            ->or_like('person_detail.gender', $keyword)
            ->or_like('person_detail.age', $keyword)
            ->or_like('person_detail.contact_number', $keyword)
            ->or_like('person_detail.home_address', $keyword)
            ->or_like('person_detail.city', $keyword)
            ->or_like('person_detail.postal_code', $keyword)
            ->or_like('person_detail.state_region', $keyword)
            ->or_like('IPTA_IPTS_list.name', $keyword)
            ->or_like('person_detail.person_status', $keyword)
            ->or_like('person_detail.person_enter_date', $keyword)
            ->or_like('person_detail.person_out_date', $keyword)
            ->limit($limit, $page*$limit)
            ->get();
        $result = $query->result();
        return $result;
    }

}
