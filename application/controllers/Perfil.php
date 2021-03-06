<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Perfil extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Perfil_model');
    } 

    /*
     * Listing of perfil
     */
    function index()
    {
        $data['perfil'] = $this->Perfil_model->get_all_perfil();
        
        $data['_view'] = 'perfil/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new perfil
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nome' => $this->input->post('nome'),
            );
            
            $perfil_id = $this->Perfil_model->add_perfil($params);
            redirect('perfil/index');
        }
        else
        {            
            $data['_view'] = 'perfil/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a perfil
     */
    function edit($id)
    {   
        // check if the perfil exists before trying to edit it
        $data['perfil'] = $this->Perfil_model->get_perfil($id);
        
        if(isset($data['perfil']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nome' => $this->input->post('nome'),
                );

                $this->Perfil_model->update_perfil($id,$params);            
                redirect('perfil/index');
            }
            else
            {
                $data['_view'] = 'perfil/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The perfil you are trying to edit does not exist.');
    } 

    /*
     * Deleting perfil
     */
    function remove($id)
    {
        $perfil = $this->Perfil_model->get_perfil($id);

        // check if the perfil exists before trying to delete it
        if(isset($perfil['id']))
        {
            $this->Perfil_model->delete_perfil($id);
            redirect('perfil/index');
        }
        else
            show_error('The perfil you are trying to delete does not exist.');
    }
    
}
