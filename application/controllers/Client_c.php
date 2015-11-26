<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Client_c
 */
class Client_c extends CI_Controller
{
    /**
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('users_m');
        $this->load->model('Produit_m');
    }

    /**
     *
     */
    public function index()
    {
        if($this->session->userdata('droit')!=1){
            redirect('users_c');
        }
        $data['produit']=$this->Produit_m->getAllProduits();
        $this->load->view('head_v');
        $this->load->view('clients/navClient_v');      
        $this->load->view('clients/client_index', $data);
        $this->load->view('foot_v');
    }
}