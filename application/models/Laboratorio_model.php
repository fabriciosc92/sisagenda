<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Laboratorio_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get laboratorio by id
     */
    function get_laboratorio($id)
    {
        return $this->db->get_where('laboratorio',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all laboratorio
     */
    function get_all_laboratorio()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('laboratorio')->result_array();
    }
        
    /*
     * function to add new laboratorio
     */
    function add_laboratorio($params)
    {
        $this->db->insert('laboratorio',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update laboratorio
     */
    function update_laboratorio($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('laboratorio',$params);
    }
    
    /*
     * function to delete laboratorio
     */
    function delete_laboratorio($id)
    {
        return $this->db->delete('laboratorio',array('id'=>$id));
    }
}
