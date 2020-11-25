<?php
class User extends CI_controller{
	function login()
	{ 
		 
         $msg['error'] ="";
		$this->load->view('Login',$msg);

	}
	function dashboard()
	{
		$data = array('view'=>'vTemplates/portfolio-details');
		$this->load->view('vAdmin/tplAdppAdmin',$data);
	}
	function validate()
	{

		$this->load->model('Log_models');
		$a = $this->Log_models->user($this->input->post()); 
		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == false){
        	$msg['error'] = "";
               $this->load->view('login',$msg);
             


		}

		else
		{ 
			 if(!empty($a)){
             redirect(base_url().'index.php/User/dashboard');
            

        }
        else {
        	$msg['error'] = "invalid user";
        	$this->load->view('Login',$msg);
        }


		}
		

	}
	function table(){
		
		
		$data = array('view'=>'vTemplates/table');
		$this->load->view('vAdmin/tplAdppAdmin',$data);	 

		}
	function question()
	{
		$this->load->model('Log_models');
		$d= $this->Log_models->tbldata();
		$data = array('view'=>'vTemplates/question','data'=>$d);
		$this->load->view('vAdmin/tplAdppAdmin',$data);	 
	}
	function add_question()
	{
		
		$data = array();

		$data['id'] = -6;
		$data['question'] = "";
		$x= array();
		$x['data'] = $data;

		
		$this->load->view('example',$x);
	}
	function added(){
		$this->load->model('Log_models');
		if($_POST['id'] == -6){
			unset($_POST['id']);

		 $this->Log_models->add_question($this->input->post());
		}
		else{
			$a =  $this->Log_models->updat($this->input->post());
		}
		redirect(base_url().'index.php/User/add_question');

		
		
	}
	function edit(){
		$this->load->model('Log_models');
		 $data = $this->Log_models->description($this->input->get('id'));
		 
		
		 $x = array();
		 $x['data'] = (array)$data[0];

		 $this->load->view('example',$x);
		 
	}
	function countries_list()
	{
		$this->load->model('Log_models');
		 $data = $this->Log_models->list();
		 $x['data'] = (array)$data;
		$this->load->view('country_list',$x);
	}
	function add_countries()
	{
		$data = array();
		$data['id'] = -1 ; 
		$data['countries'] = "";
		$x['data'] = $data ;
		
		$this->load->view('add_countries',$x);
	}
	function edit_countries()
	{
		$this->load->model('Log_models');
		$data = $this->Log_models->edit_countires($this->input->get('id'));
		$x['data'] = (array)$data[0];
		
		$this->load->view('add_countries',$x);
	}
	function save_country()
	{
		$this->load->model('Log_models');
		$y = $this->Log_models->check($this->input->post('countries'));

		if($_POST['id'] == -1){
               if(empty($y)){


              unset($_POST['id']);
              $this->Log_models->add_countries($this->input->post());
          }
		}

		else{
			$this->Log_models->updat_country($this->input->post());
		}
		redirect(base_url().'index.php/User/add_countries');

	}

}

?>