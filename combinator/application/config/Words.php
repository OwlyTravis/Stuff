<?php
class Words extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('words_model');
                $this->load->helper('url_helper');
        }

        public function index()
{
                $data['words'] = $this->words_model->get_words();
                $data['title'] = 'Words List';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('words/index', $data);
                $this->load->view('templates/footer');
        }

        public function add()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Add a Word';

            $this->form_validation->set_rules('newWord', 'New Word', 'required');
            //$this->form_validation->set_rules('text', 'Text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('words/add');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->words_model->add_word();
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('words/success');
                $this->load->view('templates/footer');
            }
        }
}