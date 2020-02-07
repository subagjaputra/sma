<?php
// This will be my Work -> Putra

class Mailing extends CI_Controller
{
    public function index()
    {
        $this->load->view('mailing');
    }

    public function send()
    {
        $this->load->library('email');

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

        $this->email->from('gerup.mail@gmail.com', 'Gerup Email');
        $this->email->to('linglung.puyeng@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email.');

        if ($this->email->send()) {
            echo 'Sent';
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
