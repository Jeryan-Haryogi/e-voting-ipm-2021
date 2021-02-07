<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
    
    public function _construct()
	{
		session_start();
	}
	
    
    public function index()
    {
        $cek = $this->session->userdata('admin');
		if(empty($cek))
		{
			$frm['username'] = array('name' => 'username',
				'id' => 'username',
				'type' => 'text',
				'value' => '',
				'class' => 'form-control',
				'placeholder' => 'Type Your Username'
			);
            $frm['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'value' => '',
				'class' => 'form-control',
				'placeholder' => 'Password'
			);
            $this->load->view('back/header_nonav');
            $this->load->view('back/login', $frm);
            $this->load->view('back/footer');
		}
		else
		{   
			
            $this->load->view('back/header');
            $this->load->view('back/utama');
            $this->load->view('back/footer');  
        }  
    }    
    
    public function login()
    {
		$u = $this->input->post('username');
        $p = $this->input->post('password');
		$this->bas_model->getLoginDataControl($u,$p);
	}
	
	public function logout()
	{
		$cek = $this->session->userdata('admin');
		if(empty($cek))
		{
			header('location:'.site_url().'/control');
		}
		else
		{
			$this->session->sess_destroy();
			header('location:'.site_url().'/control');
		}
	}
    
    public function dashboard()
    {
		$this->bas_model->checks();
        $d['formatur'] = $this->bas_model->getAllData("0ec06eb2");
		$d['hitung'] = $this->bas_model->getAllData("cf45a49b");
		$d['sementara'] = $this->bas_model->getNumRow("b82a9109");
		$d['tetap'] = $this->bas_model->getNumRowMultiple("b82a9109", array("tetap"=>1));
		$d['sah'] = $this->bas_model->getNumRow("cf45a49b");
		$this->load->view('back/header');
		$this->load->view('back/dashboard',$d);
		$this->load->view('back/footer');
    }
    
    public function hasil()
    {
    		$d['formatur'] = $this->bas_model->getAllData("0ec06eb2");
        	$d['hitung'] = $this->bas_model->getAllData("cf45a49b");
			$d['sementara'] = $this->bas_model->getNumRow("b82a9109");
			$d['tetap'] = $this->bas_model->getNumRowMultiple("b82a9109", array("tetap"=>1));
			$d['sah'] = $this->bas_model->getNumRow("cf45a49b");
            $this->load->view('back/header');
            $this->load->view('back/dashboard',$d);
            $this->load->view('back/footer');  
    }
    public function pemilih()
    {
        $this->bas_model->checks();
        $d['pemilih'] = $this->bas_model->getAllData("b82a9109");
        $this->load->view('back/header');
        $this->load->view('back/pemilih', $d); 
        $this->load->view('back/footer');
    }
    
    public function updPemilih()
    {
        $this->bas_model->checks();
        $id = $this->input->post('id');
        $data['nama'] = $this->input->post('nama');
        $data['nba'] = $this->input->post('nba');
        $data['asal'] = $this->input->post('asal');
        $data['kode'] = $this->input->post('kode');
		$hak = $this->input->post('hak');
		if($hak!=1){
			$data['hak'] = "0";
		} else {
			$data['hak'] = "1";	
		}
		$tetap = $this->input->post('tetap');
		if($tetap!=1){
			$data['tetap'] = "0";
		} else {
			$data['tetap'] = "1";	
		}
		$this->bas_model->updateDataMultiField("b82a9109",$data,array("id"=>$id));
        redirect('control/pemilih', 'refresh');
    }
    
    public function addPemilih()
    {
        $this->bas_model->checks();
        $data['nama'] = $this->input->post('nama');
        $data['nba'] = $this->input->post('nba');
        $data['asal'] = $this->input->post('asal');
        $data['kode'] = $this->hak->gen($data['nama']);
		$this->bas_model->insertData("b82a9109",$data);
        redirect('control/pemilih', 'refresh');
    }
    
    public function delPemilih($id)
    {
        $this->bas_model->checks();
        $this->bas_model->deleteData("b82a9109",array("id"=>$id));
        redirect('control/pemilih', 'refresh');
    }
	
    
    public function formatur()
    {
        $this->bas_model->checks();
        $d['formatur'] = $this->bas_model->getAllData("0ec06eb2");
        $this->load->view('back/header');
        $this->load->view('back/formatur', $d);
        $this->load->view('back/footer');
    }
     
    public function updFormatur()
    {
        $this->bas_model->checks();
        $id = $this->input->post('id');
        $data['nama'] = $this->input->post('nama');
        $data['nba'] = $this->input->post('nba');
		$foto = $this->bas_model->uploadImg($_FILES['foto'],$id);
		if(strlen($foto)!=0){
			$data['foto'] = $foto;
		}
		$this->bas_model->updateDataMultiField("0ec06eb2",$data,array("id"=>$id));
        redirect('control/formatur', 'refresh');
    }
    
    public function addFormatur()
    {
        $this->bas_model->checks();
        $data['nama'] = $this->input->post('nama');
        $data['nba'] = $this->input->post('nba');
        $data['visi'] = $this->input->post('visi');
        $data['misi'] = $this->input->post('misi');
		$data['foto'] = $this->bas_model->uploadNewImg($_FILES['foto']);
		$this->bas_model->insertData("0ec06eb2",$data);
        redirect('control/formatur', 'refresh');
    }
    
    public function delFormatur($id)
    {
        $this->bas_model->checks();
        $this->bas_model->deleteData("0ec06eb2",array("id"=>$id));
        redirect('control/formatur', 'refresh');
	}
	
	public function perhitungan()
    {
        $this->bas_model->checks();
		$d['formatur'] = $this->bas_model->getAllData("0ec06eb2");
        $d['hitung'] = $this->bas_model->getAllData("cf45a49b");
        $this->load->view('back/header');
        $this->load->view('back/hitung', $d);
        $this->load->view('back/footer');
    }
	
	public function qrcode($data,$nama)
    {
		$this->load->library('ciqrcode');
		$params['data'] = $data;
		$params['level'] = 'H';
		$params['size'] = 3;
		$params['savename'] = FCPATH.'dist/img/qr/'.$data.'.png';
		$this->ciqrcode->generate($params);
		$d['data'] = $data;
		$d['nama'] = $nama;
		$d['setqr'] = $this->bas_model->getAllData("setqr");
		$this->load->view('back/qr', $d);
		header("Refresh:3; url=".site_url()."/control/pemilih");
	}
	
	public function copy()
    {
        $this->bas_model->checks();
        $this->load->view('back/header');
        $this->load->view('back/copy');
        $this->load->view('back/footer');
    }
	
	public function suara()
    {
        $this->bas_model->checks();
		$d['sementara'] = $this->bas_model->getNumRow("b82a9109");
		$d['tetap'] = $this->bas_model->getNumRowMultiple("b82a9109", array("hak"=>1));
		$d['golput'] = $this->bas_model->getNumRowMultiple("cf45a49b", array("pilih"=>0));
		$pilih = $this->bas_model->getNumRow("cf45a49b");
		$d['sah'] = $pilih - $d['golput'];
        $this->load->view('back/header');
        $this->load->view('back/suara', $d);
        $this->load->view('back/footer');
    }
	
	public function revoting()
    {
        $this->bas_model->checks();
		$d['formatur'] = $this->bas_model->getAllData("0ec06eb2");
        $d['hitung'] = $this->bas_model->getSelectedDataMultiple("cf45a49b",array("re"=>0));
        $this->load->view('back/header');
        $this->load->view('back/revoting', $d);
        $this->load->view('back/footer');
    }
	
	public function revotingco()
	{
		$this->bas_model->checks();
		$kode = $this->input->post('code');
		$data['re'] = 0;
		$this->bas_model->updateDataMultiField("cf45a49b",$data,array("kode"=>$kode));
        redirect('control/revoting', 'refresh');        
	}
	
	public function revotingcoqr($qr)
	{
		$this->bas_model->checks();
		$data['re'] = 0;
		$this->bas_model->updateDataMultiField("cf45a49b",$data,array("kode"=>$qr));
        redirect('control/revoting', 'refresh');        
	}
	
	public function setting()
    {
        $this->bas_model->checks();
		$d['setqr'] = $this->bas_model->getAllData("setqr");
        $this->load->view('back/header');
        $this->load->view('back/setting', $d);
        $this->load->view('back/footer');
    }
	
	public function exupload()
    {
     	$config['upload_path'] = './dist/file/';
		$config['allowed_types'] = 'xls';
                
		$this->load->library('upload', $config);
                

		if ( ! $this->upload->do_upload())
		{
			$data = array('error' => $this->upload->display_errors());
			
		}
		else
		{
            $data = array('error' => false);
			$upload_data = $this->upload->data();

            $this->load->library('excel_reader');
			$this->excel_reader->setOutputEncoding('CP1251');

			$file =  $upload_data['full_path'];
			$this->excel_reader->read($file);
			error_reporting(E_ALL ^ E_NOTICE);

			// Sheet 1
			$data = $this->excel_reader->sheets[0] ;
            $dataexcel = Array();
			for ($i = 1; $i <= $data['numRows']-1; $i++) {
				if($data['cells'][$i][1] == '') break;
				$dataexcel[$i-1]['nama'] = $data['cells'][$i+1][1];
				$dataexcel[$i-1]['asal'] = $data['cells'][$i+1][2];
				$dataexcel[$i-1]['nba'] = $data['cells'][$i+1][3];
				$dataexcel[$i-1]['kode'] = $this->hak->gen($data['cells'][$i+1][1]);
			}
            $this->bas_model->excelup($dataexcel);
		}
		//redirect('control/setting', 'refresh');
    }
	
	public function panduan()
    {
        $this->bas_model->checks();
        $this->load->view('back/header');
        $this->load->view('back/panduan');
        $this->load->view('back/footer');
    }
	
	public function changeLog()
    {
        $this->bas_model->checks();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
        $data['nama'] = hash("crc32b", $username);
        $data['pass'] = md5($password);
		$this->bas_model->updateDataAll("4e107e60", $data);
        redirect('control/setting', 'refresh');
    }
	
	
	public function changeQr()
    {
        $this->bas_model->checks();
		$data['atas'] = $this->input->post('atas');
		$data['kiri'] = $this->input->post('kiri');
		$this->bas_model->updateDataAll("setqr", $data);
        redirect('control/setting', 'refresh');
    }
	
	public function resetPemilih()
    {
        $this->bas_model->checks();
		$this->bas_model->resett("b82a9109");
        redirect('control/setting', 'refresh');
    }
	
	public function resetFormatur()
    {
        $this->bas_model->checks();
		$this->bas_model->resett("0ec06eb2");
        redirect('control/setting', 'refresh');
    }
	
	public function resetRekapitulasi()
    {
        $this->bas_model->checks();
		$this->bas_model->resett("cf45a49b");
        redirect('control/setting', 'refresh');
    }
	
	public function resetRevoting()
    {
        $this->bas_model->checks();
		$data['re'] = "1";
		$this->bas_model->updateDataAll("cf45a49b", $data);
        redirect('control/setting', 'refresh');
    }
    public function qrall()
    {
		$this->load->library('ciqrcode');
		$d['qr'] = $this->bas_model->getAllData("b82a9109");
        $this->load->view('back/qrall', $d);
    }
}
