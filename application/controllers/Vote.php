<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

    public function _construct()
	{
		session_start();
	}
    
	public function index()
	{
        $cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			$frm['code'] = array('name' => 'code',
				'id' => 'code',
				'type' => 'text',
				'value' => '',
				'class' => 'form-control',
				'placeholder' => 'Masukan Code Masuk Akses'
			);
			$frm['data'] = "aa";
            $this->load->view('front/header');
            $this->load->view('front/login', $frm);
            $this->load->view('front/footer');
		}
		else
		{   
            
            $this->load->view('front/header');
			$formatur = $this->bas_model->getNumRow("0ec06eb2");
			if($formatur==0){
				$this->load->view('front/pilihno');
			} else {
				//$d['calon'] = $this->bas_model->getAllData("0ec06eb2");
				$d['calon'] = $this->bas_model->getDataMultipleOrder("0ec06eb2","nama");
				$this->load->view('front/pilih', $d);
			}
            $this->load->view('front/footer');
			
        }
	}
    
    public function login()
	{
		$c = $this->input->post('code');
		$this->bas_model->getLoginData($c);
	}
	
	public function loginqr($qr)
	{
		$this->bas_model->getLoginData($qr);
	}
	
	public function logout()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url());
		}
		else
		{
			$this->session->sess_destroy();
			header('location:'.base_url());
		}
	}
    
    public function pilih()
	{ 
		if ($this->input->post('pilih') == NULL) {
			$this->session->set_flashdata('session', '<div class="alert alert-danger" role="alert">Anda Harus Memilih formatur Terlebih Dahulu</div>');
			redirect(base_url());
		}

        $this->bas_model->check(); 
        $pilih = $this->input->post('pilih');
		$id = $this->session->userdata('id');
		//$this->load->library('ciqrcode');
		//$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
		//$pos = rand(0, strlen($karakter)-1);
		//$gene = $id.$karakter[$pos];
		//$gener = hash("crc32b", $gene);
		$data['pilih'] = implode(" ",$pilih);
		//$data['kode'] = $gener;
		$data['kode'] = $this->session->userdata('kode');
		$this->bas_model->insertData("cf45a49b",$data);
		$data2['hak'] = 0;
		$this->bas_model->updateDataMultiField("b82a9109",$data2,array("id"=>$id));
		//$params['data'] = $gener;
		//$params['level'] = 'H';
		//$params['size'] = 3;
		//$params['savename'] = FCPATH.'dist/img/qr/'.$gener.'.png';
		//$this->ciqrcode->generate($params);
		//$d['data'] = $gener;
		//$this->load->view('front/qr', $d);
        $this->session->sess_destroy();
		//header("Refresh:3; url=".base_url());
		header('location:'.base_url());		
	}
	
	public function pilihNo()
	{
        $this->bas_model->check(); 
        //$data['pilih'] = '';
		//$this->bas_model->insertData("cf45a49b",$data);
		//$id = $this->session->userdata('id');
		//$data2['hak'] = 0;
		//$this->bas_model->updateDataMultiField("b82a9109",$data2,array("id"=>$id));
        $this->session->sess_destroy();
        header('location:'.base_url());
	}
} 
