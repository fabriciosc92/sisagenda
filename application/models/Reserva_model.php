<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Reserva_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get reserva by id
     */
    function get_reserva($id)
    {
        return $this->db->get_where('reserva',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all reserva
     */
    function get_all_reserva()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('reserva')->result_array();
    }
        
    /*
     * function to add new reserva
     */
    function add_reserva($params)
    {
        $this->db->insert('reserva',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update reserva
     */
    function update_reserva($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('reserva',$params);
    }
    
    /*
     * function to delete reserva
     */
    function delete_reserva($id)
    {
        return $this->db->delete('reserva',array('id'=>$id));
    }
}