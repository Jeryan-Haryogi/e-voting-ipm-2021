<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	
	/**
	 * @author : Ahmad Basyiruddin
	 * @email : ahmadbasyiruddin3@gmail.com
	 * @website : http://semartech.com
	 * @phone : +6285640886268
	 **/
	
	public function __construct()
	{
		parent::__construct();
	}
	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('kota')->like('kota',$keyword)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->kota
			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
}
?> 