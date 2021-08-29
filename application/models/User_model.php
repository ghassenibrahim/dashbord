<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model {
	protected $user_table = 'user';                 
  public function login_submit($data){

    $userdata = array(
      'username' => $data['username'],
      'password' => md5($data['password'])
    );

    
    $this->db->where($userdata);
		
		$a=null;
		$result=$this->db->get('user')->result_array();
			 if (isset($result[0])){
				 $a=$result[0];
			 }else {
					 $a=null;
			 }
			 
			 return  $a;
																 
		 } 

  public function get_users(){ 
    return $this->db->get('user')->result_array(); 
  }

  

  public function insert_user($data){ 
    $this->db->insert('user', $data);
    return $this->db->affected_rows(); 
  }

  
  
  public function select_user($data){  
    $this->db->from('user'); 
    $this->db->where('user_id', $data);
    return $this->db->get()->result_array()[0];
  }

  
  public function update_user($id,$data){
    
    $this->db->where('user_id', $id); 
    $this->db->set($data); 
    return $this->db->update('user'); 
    
  } 

  public function delete_user($id){
    
    $this->db->where('user_id', $id);
    $this->db->delete('user');
    return $this->db->affected_rows();
    
  }

  public function tot_user(){
     
    return $this->db->get('user')->num_rows(); 
    
  }

  public function insert_logs($data){
    
    $this->db->insert('logs', $data);
    return $this->db->affected_rows();
  }
	public function lists(){

		$data = $this->db->get("user");

		return $data->result();

}
                        
public function user_login($username, $password)
{

	 $this->db->where('username', $username);
	 $this->db->where('password',md5($password));
        $result = $this->db->get($this->user_table)->row();
        if($result){
            return $result;
     	}else{
     		return 0;
     	}
    }
}
                        
/* End of file User.php */
    
                        