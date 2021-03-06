<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Itens_reserva extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Itens_reserva_model');
    } 

    /*
     * Listing of itens_reserva
     */
    function index()
    {
        $data['itens_reserva'] = $this->Itens_reserva_model->get_all_itens_reserva();
        
        $data['_view'] = 'itens_reserva/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new itens_reserva
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'chk_projeto' => $this->input->post('chk_projeto'),
				'usuario_id' => $this->input->post('usuario_id'),
				'qtd_maquinas' => $this->input->post('qtd_maquinas'),
				'observacao' => $this->input->post('observacao'),
            );
            
            $itens_reserva_id = $this->Itens_reserva_model->add_itens_reserva($params);
            redirect('itens_reserva/index');
        }
        else
        {            
            $data['_view'] = 'itens_reserva/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a itens_reserva
     */
    function edit($reserva_id)
    {   
        // check if the itens_reserva exists before trying to edit it
        $data['itens_reserva'] = $this->Itens_reserva_model->get_itens_reserva($reserva_id);
        
        if(isset($data['itens_reserva']['reserva_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'chk_projeto' => $this->input->post('chk_projeto'),
					'usuario_id' => $this->input->post('usuario_id'),
					'qtd_maquinas' => $this->input->post('qtd_maquinas'),
					'observacao' => $this->input->post('observacao'),
                );

                $this->Itens_reserva_model->update_itens_reserva($reserva_id,$params);            
                redirect('itens_reserva/index');
            }
            else
            {
                $data['_view'] = 'itens_reserva/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The itens_reserva you are trying to edit does not exist.');
    } 

    /*
     * Deleting itens_reserva
     */
    function remove($reserva_id)
    {
        $itens_reserva = $this->Itens_reserva_model->get_itens_reserva($reserva_id);

        // check if the itens_reserva exists before trying to delete it
        if(isset($itens_reserva['reserva_id']))
        {
            $this->Itens_reserva_model->delete_itens_reserva($reserva_id);
            redirect('itens_reserva/index');
        }
        else
            show_error('The itens_reserva you are trying to delete does not exist.');
    }
    
}
