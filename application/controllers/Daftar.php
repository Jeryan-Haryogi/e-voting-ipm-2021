<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	/**
	 * @author : Jeryan Haryogi
	 * @email : jeryanharyogi@gmail.com
	 **/
	    
	public function index()
	{
		
        echo "<h3>List DB</h3>";
        echo "<ul>";
        $listdb = array('pemilih','pilih','userlog','calon_formatur','revoting');
        foreach($listdb as $a){
            echo "<li>".$a." => ";
            echo hash("crc32b", $a);
            echo "</li>";
        }        
        echo "</ul>";
        
        echo "<h3>List Umum</h3>";
        echo "<ul>";
        $listdb = array('muktamar');
        foreach($listdb as $a){
            echo "<li>".$a." => ";
            echo hash("crc32b", $a);
            echo "</li>";
        }        
        echo "</ul>";
		
		
	}
}
