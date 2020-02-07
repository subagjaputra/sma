<?php
defined('BASEPATH') or exit('No direct script access allowed');
// This will be my Work -> Putra

class Mailing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }
    public function index()
    {
        $this->load->view('mailing');
    }

    public function send()
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'gerup.mail@gmail.com',
            'smtp_pass' => '*********',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to('gerup.mail@gmail.com');
        $this->email->subject('Email From Website');
        $this->email->message($this->input->post('message'));

        if ($this->email->send()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your email has been sent. Please check your email.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            $this->_noReply();
            redirect('mailing');
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function _noReply()
    {
        $this->email->from('no-reply@sman73.sch.id', 'no-reply');
        $this->email->to($this->input->post('email'));
        $this->email->subject('no-reply');
        $this->email->message('Thanks for your email. We will progress soon.');
        return $this->email->send();
    }
}
