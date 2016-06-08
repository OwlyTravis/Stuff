<?php
class Pages extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
                $this->load->model('words_model');
                $this->load->helper('url_helper');
                $this->load->helper('date');
        }

        public function view($page = 'home')
        {
        	if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	        {
				show_404();
	        }

	        $data['title'] = ucfirst($page); // Capitalize the first letter
	        $data['twoWords'] = $this->words_model->two_words();
			
			$this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
	        $this->load->view('pages/'.$page, $data);
	        $this->load->view('templates/footer', $data);
		}


}