<?php
class Words extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('words_model');
                $this->load->library('table');
                $this->load->library("pagination");
        }

        public function index()
{
                //$query = $this->db->get('WordList')->num_rows();
                $config['base_url'] = base_url().'index.php/Words/index';
                $config['total_rows'] = $this->db->get('WordList')->num_rows();
                $config['per_page'] = 50; 
                $config['uri_segment'] = 3;
                $choice = $config['total_rows'] / $config['per_page'];
                $config['num_links'] = round($choice);
                $config['full_tag_open'] = '<nav><ul class="pagination">';
                $config['full_tag_close'] = '</ul></nav>';
                $config['first_link'] = 'First';
                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';
                $config['last_link'] = 'Last';
                $config['last_tag_open'] = '<li>';
                $config['last_tag_close'] = '</li>';
                $config['next_link'] = '&raquo;';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['prev_link'] = '&laquo;';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active"><a>';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';



                $this->pagination->initialize($config); 

                $data['links'] = $this->pagination->create_links();
                $data['perPage'] = $config['per_page'];
                $data['records'] = $this->db->get('WordList',$config['per_page'],$this->uri->segment(3));
                //$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                //$data['results'] = $this->words_model->get_words($config['per_page'], $page);
                $data['words'] = $this->words_model->get_words();
                
                //print_r($query);
                
                $data['title'] = 'Words List';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav');
                
                $this->load->view('words/index', $data);
                
                $this->load->view('templates/footer');
        }
        public function example1() {
            // $config = array();
            // $config["base_url"] = base_url() . "welcome/example1";
            // $config["total_rows"] = $this->Countries->record_count();
            // $config["per_page"] = 20;
            // $config["uri_segment"] = 3;

            //$this->pagination->initialize($config);

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data["results"] = $this->Countries->
                fetch_countries($config["per_page"], $page);
            $data["links"] = $this->pagination->create_links();

            //$this->load->view("words/index", $data);
        }

        public function add()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Add a Word';
            $data['alertSuccess'] = FALSE;
            
            $this->form_validation->set_rules('newWord', 'Word', 'required|callback_check_word_advanced');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav');
                $this->load->view('words/add');
                $this->load->view('templates/footer');

            }
            else
            {
                $newWordCaps = ucwords($this->input->post('newWord'));
                $data['newWordAdded'] = $newWordCaps;
                $data['alertSuccess'] = TRUE;
                
                $this->words_model->add_word();
                
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav');
                $this->load->view('words/add', $data);
                $this->load->view('templates/footer');
            }
        }

        public function edit()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            if ($this->input->get('P_id')) {
                $editWordID = $this->input->get('P_id');
                $query = $this->words_model->get_word_to_edit($editWordID);
            
                foreach ($query as $row)
                {
                    $data['editWordID'] = $row['P_id'];
                    $data['editWord'] =  $row['Word'];
                }
            }
            else {
                $data['editWordID'] = $this->input->post('editWordID');
                $data['editWord'] =  $this->input->post('editWord');
            }

            $data['title'] = 'Edit Word';
            $data['alertSuccess'] = FALSE;
            

            $this->form_validation->set_rules('editWord', 'Word', 'required|callback_check_word_advanced');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav');
                $this->load->view('words/edit',$data);
                $this->load->view('templates/footer');

            }
            else
            {
                $editWordCaps = ucwords($this->input->post('editWord'));
                $data['newWordAdded'] = $editWordCaps;
                $data['alertSuccess'] = TRUE;
                
                $data['editWordID'] = $this->input->post('editWordID');
                $data['editWord'] =  $editWordCaps;

                $this->words_model->edit_word();
                
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav');
                $this->load->view('words/edit', $data);
                $this->load->view('templates/footer');
            }
        }

        public function remove() 
        {
            $this->words_model->remove_word($this->input->get('P_id'));
        }
        
        public function check_word_advanced($newWord) {
            $newWordCaps = ucwords($newWord);
            $this->db->where('Word',$newWordCaps);
            $result = $this->db->get('WordList');

            if ($result->num_rows() > 0) {
                $this->form_validation->set_message('check_word_advanced', '<strong>'.$newWordCaps.'</strong> already exists!');
                return FALSE; // User name taken 
            }
            else {
                return TRUE; // User name available
            }
        }
}