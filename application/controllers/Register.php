<?php
class Register extends CI_Controller {
  public function __construct(){

    parent::__construct();
    $this->load->helper('url');
    $this->load->model('user');
    }
	public function show(){
		$this->load->view('input.php');
	}
	public function upload(){
		$length=count($_POST);
		for ($i = 0; $i <50; $i++) {
			if(isset($_POST["firstname"][$i]) || isset($_POST["lastname"][$i]) || isset($_POST["email"][$i]) || isset($_POST["password"][$i])){
			$toins["firstname"]=$_POST['firstname'][$i];
			$toins["lastname"]=$_POST['lastname'][$i];
			$toins["email"]=$_POST['email'][$i];
			$toins["password"]=$_POST['password'][$i];
			$this->user->insert($toins);
			}
			else{
				break;
			}
		
	}
	echo "thank you";
}
}
?>