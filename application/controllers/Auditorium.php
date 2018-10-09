<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Auditorium extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auditorium_model');
    } 

    /*
     * Listing of auditoria
     */
    function index()
    {
        $data['auditoria'] = $this->Auditorium_model->get_all_auditoria();
        
        $data['_view'] = 'auditorium/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new auditorium
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'usuario_id' => $this->input->post('usuario_id'),
				'acao' => $this->input->post('acao'),
				'dt_acao' => $this->input->post('dt_acao'),
				'reserva_id' => $this->input->post('reserva_id'),
				'laboratorio_id' => $this->input->post('laboratorio_id'),
				'campus_id' => $this->input->post('campus_id'),
				'itens_laboratorio_id' => $this->input->post('itens_laboratorio_id'),
				'ref_anterior' => $this->input->post('ref_anterior'),
            );
            
            $auditorium_id = $this->Auditorium_model->add_auditorium($params);
            redirect('auditorium/index');
        }
        else
        {            
            $data['_view'] = 'auditorium/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a auditorium
     */
    function edit($id)
    {   
        // check if the auditorium exists before trying to edit it
        $data['auditorium'] = $this->Auditorium_model->get_auditorium($id);
        
        if(isset($data['auditorium']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'usuario_id' => $this->input->post('usuario_id'),
					'acao' => $this->input->post('acao'),
					'dt_acao' => $this->input->post('dt_acao'),
					'reserva_id' => $this->input->post('reserva_id'),
					'laboratorio_id' => $this->input->post('laboratorio_id'),
					'campus_id' => $this->input->post('campus_id'),
					'itens_laboratorio_id' => $this->input->post('itens_laboratorio_id'),
					'ref_anterior' => $this->input->post('ref_anterior'),
                );

                $this->Auditorium_model->update_auditorium($id,$params);            
                redirect('auditorium/index');
            }
            else
            {
                $data['_view'] = 'auditorium/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The auditorium you are trying to edit does not exist.');
    } 

    /*
     * Deleting auditorium
     */
    function remove($id)
    {
        $auditorium = $this->Auditorium_model->get_auditorium($id);

        // check if the auditorium exists before trying to delete it
        if(isset($auditorium['id']))
        {
            $this->Auditorium_model->delete_auditorium($id);
            redirect('auditorium/index');
        }
        else
            show_error('The auditorium you are trying to delete does not exist.');
    }
    
}
