<?php

class Login extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
        }

        public function index()
        {
                $this->load->library('form_validation');

                $data['title'] = 'Log In';
                $data['loginFail'] = FALSE;
                
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('login/index', $data);
                $this->load->view('templates/footer');
        }

        public function signup()
        {
                $this->load->library('form_validation');

                $data['title'] = 'Create Account';
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('login/signup_form', $data);
                $this->load->view('templates/footer');
        }

        public function success() 
        {
                $data['title'] = 'Create Account';
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('login/success', $data);
                $this->load->view('templates/footer');
        }

        public function create_member()
        {
                $this->load->library('form_validation');

                //validation rules
                $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
                $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
                $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_check_if_email_exists');
                $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[15]|callback_check_if_username_exists');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
                $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]  ');

                if ($this->form_validation->run() === FALSE) // NOT VALID 
                {
                        $this->load->view('templates/header');
                        $this->load->view('templates/nav');
                        $this->load->view('login/signup_form');
                        $this->load->view('templates/footer');
                }
                else 
                {
                        $this->load->model('user_model');

                        if ($query = $this->user_model->create_member())
                        {
                                $data['account_created'] = "Account Created!!!";

                                $this->load->view('templates/header');
                                $this->load->view('templates/nav');
                                $this->load->view('login/index', $data);
                                $this->load->view('templates/footer');
                        }
                }
        }

        public function validate_credentials()
        {
                $this->load->model('User_model');
                $query = $this->User_model->validate();
                
                if($query) // if the user's credentials validate...
                {
                        $data = array(
                                'username' => $this->input->post('username'),
                                'is_logged_in' => TRUE
                                );

                        $this->session->set_userdata($data);
                        redirect('index.php');
                }
                else // Go back to login screen....
                {
                        $data['loginFail'] = TRUE;
                        $this->load->view('templates/header');
                        $this->load->view('templates/nav');
                        $this->load->view('login/index', $data);
                        $this->load->view('templates/footer');
                }
        }

        public function user_logout() 
        {
                $this->session->sess_destroy();
                redirect('index.php');
        }

        public function check_if_username_exists($username) {
                        $this->db->where('username',$username);
                        $result = $this->db->get('Users');

                        if ($result->num_rows() > 0) {
                                $this->form_validation->set_message('check_if_username_exists', 'User name already exists.');
                                return FALSE; // User name taken 
                        }
                        else {
                                return TRUE; // User name available
                        }
                }

        public function check_if_email_exists($email) {
                $this->db->where('email_address',$email);
                $result = $this->db->get('Users');

                if ($result->num_rows() > 0) {
                        $this->form_validation->set_message('check_if_email_exists', 'Sorry, email has already been registered');
                        return FALSE; // User name taken 
                }
                else {
                        return TRUE; // User name available
                }
        }



}

?>