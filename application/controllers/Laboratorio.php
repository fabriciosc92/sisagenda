<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Laboratorio extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Laboratorio_model');
    } 

    /*
     * Listing of laboratorio
     */
    function index()
    {
        $data['laboratorio'] = $this->Laboratorio_model->get_all_laboratorio();
        
        $data['_view'] = 'laboratorio/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new laboratorio
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'projetor' => $this->input->post('projetor'),
				'aprovada' => $this->input->post('aprovada'),
				'campus_id' => $this->input->post('campus_id'),
				'nome' => $this->input->post('nome'),
				'qtd_lugares' => $this->input->post('qtd_lugares'),
				'qtd_maquinas' => $this->input->post('qtd_maquinas'),
				'descricao' => $this->input->post('descricao'),
            );
            
            $laboratorio_id = $this->Laboratorio_model->add_laboratorio($params);
            redirect('laboratorio/index');
        }
        else
        {            
            $data['_view'] = 'laboratorio/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a laboratorio
     */
    function edit($id)
    {   
        // check if the laboratorio exists before trying to edit it
        $data['laboratorio'] = $this->Laboratorio_model->get_laboratorio($id);
        
        if(isset($data['laboratorio']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'projetor' => $this->input->post('projetor'),
					'aprovada' => $this->input->post('aprovada'),
					'campus_id' => $this->input->post('campus_id'),
					'nome' => $this->input->post('nome'),
					'qtd_lugares' => $this->input->post('qtd_lugares'),
					'qtd_maquinas' => $this->input->post('qtd_maquinas'),
					'descricao' => $this->input->post('descricao'),
                );

                $this->Laboratorio_model->update_laboratorio($id,$params);            
                redirect('laboratorio/index');
            }
            else
            {
                $data['_view'] = 'laboratorio/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The laboratorio you are trying to edit does not exist.');
    } 

    /*
     * Deleting laboratorio
     */
    function remove($id)
    {
        $laboratorio = $this->Laboratorio_model->get_laboratorio($id);

        // check if the laboratorio exists before trying to delete it
        if(isset($laboratorio['id']))
        {
            $this->Laboratorio_model->delete_laboratorio($id);
            redirect('laboratorio/index');
        }
        else
            show_error('The laboratorio you are trying to delete does not exist.');
    }
    
}
