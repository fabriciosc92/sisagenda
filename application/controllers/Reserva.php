<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Reserva extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Reserva_model');
    } 

    /*
     * Listing of reserva
     */
    function index()
    {
        $data['reserva'] = $this->Reserva_model->get_all_reserva();
        
        $data['_view'] = 'reserva/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new reserva
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'usuario_id' => $this->input->post('usuario_id'),
				'laboratorio_id' => $this->input->post('laboratorio_id'),
				'responsavel' => $this->input->post('responsavel'),
				'dt_inicio' => $this->input->post('dt_inicio'),
				'dt_fim' => $this->input->post('dt_fim'),
				'dt_solicitacao' => $this->input->post('dt_solicitacao'),
				'dt_aprovacao' => $this->input->post('dt_aprovacao'),
				'status' => $this->input->post('status'),
				'observacao' => $this->input->post('observacao'),
            );
            
            $reserva_id = $this->Reserva_model->add_reserva($params);
            redirect('reserva/index');
        }
        else
        {            
            $data['_view'] = 'reserva/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a reserva
     */
    function edit($id)
    {   
        // check if the reserva exists before trying to edit it
        $data['reserva'] = $this->Reserva_model->get_reserva($id);
        
        if(isset($data['reserva']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'usuario_id' => $this->input->post('usuario_id'),
					'laboratorio_id' => $this->input->post('laboratorio_id'),
					'responsavel' => $this->input->post('responsavel'),
					'dt_inicio' => $this->input->post('dt_inicio'),
					'dt_fim' => $this->input->post('dt_fim'),
					'dt_solicitacao' => $this->input->post('dt_solicitacao'),
					'dt_aprovacao' => $this->input->post('dt_aprovacao'),
					'status' => $this->input->post('status'),
					'observacao' => $this->input->post('observacao'),
                );

                $this->Reserva_model->update_reserva($id,$params);            
                redirect('reserva/index');
            }
            else
            {
                $data['_view'] = 'reserva/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The reserva you are trying to edit does not exist.');
    } 

    /*
     * Deleting reserva
     */
    function remove($id)
    {
        $reserva = $this->Reserva_model->get_reserva($id);

        // check if the reserva exists before trying to delete it
        if(isset($reserva['id']))
        {
            $this->Reserva_model->delete_reserva($id);
            redirect('reserva/index');
        }
        else
            show_error('The reserva you are trying to delete does not exist.');
    }
    
}
