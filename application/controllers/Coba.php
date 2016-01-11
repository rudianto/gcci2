<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	public function index()
	{
		
	}
	public function alamat()
    {
        $crud = new grocery_CRUD();
 		
 		$crud->set_theme('twitter-bootstrap');
        $crud->set_table('alamat');
        $crud->order_by('id','desc');
        $output = $crud->render();
 
        $this->_example_output($output);                
    }
 
    function _example_output($output = null)
 
    {
        $this->load->view('coba',$output);    
    }    
}



/* End of file coba.php */
/* Location: ./application/controllers/coba.php */