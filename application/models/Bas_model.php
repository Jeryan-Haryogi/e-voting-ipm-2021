<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bas_model extends CI_Model {

    /**
	 * @author : Ahmad Basyiruddin
	 * @email : ahmadbasyiruddin3@gmail.com
	 **/

	public function __construct()
    {
        parent::__construct();
    }


	public function getAllData($table)
	{
		return $this->db->get($table);
	}

    public function getAllDataLimited($table,$offset,$limit)
	{
		return $this->db->get($table,$limit,$offset);
	}

	public function getSelectedData($table,$key,$value)
	{
		$this->db->where($key, $value);
		return $this->db->get($table);
	}

	public function getSelectedDataMultiple($table,$data)
	{
		return $this->db->get_where($table, $data);
	}

    public function getSelectedDataMultipleLimited($table,$data,$limit,$order)
	{
        $this->db->order_by($order, 'desc');
        $this->db->limit($limit);
		return $this->db->get_where($table, $data);
	}

	public function getDataMultipleOrder($table,$order)
	{
		return $this->db->get($table);
	}

	public function getNumRow($table)
	{
		$query = $this->db->get($table);
		return $query->num_rows();
	}

	public function getNumRowMultiple($table, $data)
	{
		$query = $this->db->get_where($table, $data);
		return $query->num_rows();
	}

    function deleteData($table,$data)
	{
		$this->db->delete($table, $data);
        $this->session->set_flashdata("notif","window.successDataDel();");
	}

	function updateData($table,$data,$field,$key)
	{
		$this->db->where($key,$field);
		$this->db->update($table,$data);
	}

	function updateDataAll($table,$data)
	{
		$this->db->update($table,$data);
		$this->session->set_flashdata("notif", "window.successDataUpd();");
	}

	function updateDataMultiField($table,$data,$field_key)
	{
		$this->db->update($table,$data,$field_key);
        $this->session->set_flashdata("notif", "window.successDataUpd();");
	}

	function insertData($table,$data)
	{
		$this->db->insert($table,$data);
        $this->session->set_flashdata("notif","window.successDataAdd();");
	}

	public function resett($table)
	{
		$this->db->query("TRUNCATE ".$table);
		$this->session->set_flashdata("notif","window.successDataDel();");
	}

    //query login
	public function getLoginData($code)
	{
		$c = $code;
		$q_cek_login = $this->db->get_where('b82a9109', array('kode' => $c));
		if(count($q_cek_login->result())>0)
		{
			foreach($q_cek_login->result() as $qck)
			{
                if($qck->hak==1 and $qck->tetap==1){
                    $sess_data['logged_in'] = 'yes';
					$sess_data['id'] = $qck->id;
					$sess_data['kode'] = $qck->kode;
                    $sess_data['username'] = $qck->nama;
                    $this->session->set_userdata($sess_data);
                    header('location:'.base_url());
                } else {
					$this->session->set_flashdata("login","
            <p class='alert alert-danger alert-dismissible fade in' role='alert'>Kode yang Kamu masukkan salah atau Tidak terdaftar sebagai Pemilih Tetap</p>");
					header('location:'.base_url());
				}
			}
		}
		else
		{
            $this->session->set_flashdata("login","
            <p class='alert alert-danger alert-dismissible fade in' role='alert'>Kode yang Kamu masukkan salah atau Tidak terdaftar sebagai Pemilih Tetap</p>");
			header('location:'.base_url());
		}
	}

    //query login control
	public function getLoginDataControl($username, $password)
	{
		$u = $username;
        $p = md5($password);
		$q_cek_login = $this->db->get_where('4e107e60', array('nama' => $u, 'pass' => $p));
		if(count($q_cek_login->result())>0)
		{

			$sess_data['admin'] = 'yes';
			$sess_data['usernamec'] = $username;
            $this->session->set_userdata($sess_data);
            header('location:'.site_url().'/control');
		}
		else
		{
            $this->session->set_flashdata("login","
            <p class='alert alert-success alert-dismissible fade in' role='alert'>Your Username or Password is wrong</p>");
			header('location:'.site_url().'/control');
		}
	}

    public function check()
    {
        $check = $this->session->userdata('logged_in');
		if(empty($check))
        {
            header('location:'.base_url());
        }
    }

	public function checks()
    {
        $check = $this->session->userdata('admin');
		if(empty($check))
        {
            header('location:'.site_url().'/control');
        }
    }

	public function uploadImg($file,$id)
    {
        $file_max_weight = 5000000; //limit the maximum size of file allowed (2Mb)
        $ok_ext = array('jpg','png','gif','jpeg','JPG','PNG','GIF','JPEG'); // allow only these types of files
        $destination = 'dist/img/'; // where our files will be stored

        $filename = explode(".", $file["name"]);

        $file_name = $file['name']; // file original name
        $file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
        $file_extension = $filename[count($filename)-1];
        $file_weight = $file['size'];
        $file_type = $file['type'];

        // If there is no error
        if( $file['error'] == 0 )
        {
            // check if the extension is accepted
            if( in_array($file_extension, $ok_ext)):
                // check if the size is not beyond expected size
                if( $file_weight <= $file_max_weight ):
                        // rename the file
                        $fileNewName = $id.$file_name_no_ext.'.'.$file_extension ;
                        // and move it to the destination folder
                        if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):
                            return $fileNewName;
                        else:
                            echo "can't upload file.";
                        endif;
                else:
                   echo "File too heavy.";
                endif;
            else:
                echo "File type is not supported.";
            endif;
        }
    }

	public function uploadNewImg($file)
    {
		$id = rand(0,1000);
        $file_max_weight = 5000000; //limit the maximum size of file allowed (2Mb)
        $ok_ext = array('jpg','png','gif','jpeg','JPG','PNG','GIF','JPEG'); // allow only these types of files
        $destination = 'dist/img/'; // where our files will be stored

        $filename = explode(".", $file["name"]);

        $file_name = $file['name']; // file original name
        $file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
        $file_extension = $filename[count($filename)-1];
        $file_weight = $file['size'];
        $file_type = $file['type'];

        // If there is no error
        if( $file['error'] == 0 )
        {
            // check if the extension is accepted
            if( in_array($file_extension, $ok_ext)):
                // check if the size is not beyond expected size
                if( $file_weight <= $file_max_weight ):
                        // rename the file
                        $fileNewName = $id.$file_name_no_ext.'.'.$file_extension ;
                        // and move it to the destination folder
                        if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):
                            return $fileNewName;
                        else:
                            echo "can't upload file.";
                        endif;
                else:
                   echo "File too heavy.";
                endif;
            else:
                echo "File type is not supported.";
            endif;
        }
    }

	function excelup($dataarray)
    {
        for($i=0;$i<count($dataarray);$i++){
            $data = array(
                'nama'=>$dataarray[$i]['nama'],
                'asal'=>$dataarray[$i]['asal'],
				'nba'=>$dataarray[$i]['nba'],
				'kode'=>$dataarray[$i]['kode']
            );
            $this->db->insert('b82a9109', $data);
        }
		$this->session->set_flashdata("notif","window.successDataAdd();");
    }
}
