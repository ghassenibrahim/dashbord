<?php
require APPPATH . 'libraries/REST_Controller.php';    
require_once APPPATH . '/libraries/JWT.php';
use \Firebase\JWT\JWT;

class Api extends REST_Controller {    

    public function __construct() {

      header('Access-Control-Allow-Origin: *');

      header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

       parent::__construct();

       $this->load->database();

       $this->load->model("User_model", "user");

    }

    

   public function Alluser_get(){

      $data["users"] = $this->user->lists();

      $this->response($data, 200);

   }

	public function login_post()
	{
		
		     $username=$this->post('username');
			  $password= $this->post('password');
			  $output = $this->user->user_login($username,$password);
			  if ($output)
			  {
					$date = new DateTime();
					
					$token['username']=$username;
					$token['password']=$password;
				
					
					$res= JWT::encode($token, JWT_KEY);
					
					$return_data = [
						 'username' => $output->username,
						 'token'=> $res,
					];

					$message = [
						 'status' => true,
						 'data' => $return_data,
					];
					$this->response($message, REST_Controller::HTTP_OK);
			  } else
			  {
					$message = [
						 'status' => FALSE,
						 'message' => "Invalid Username or Password"
					];
					$this->response($message, REST_Controller::HTTP_NOT_FOUND);
			  }
		 }
	}


