<?php
class User extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public $firstname;
	public $lastname;
	public $email;
	public $password;
	public function insert($toins){
		$this->db->insert('Persons',$toins);
	}
}
?>