<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model {
                        

    public function get(){
        return $this->db->get('user')->result();
    }

    public function get_by_id($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('user')->row();
    }
     
     public function insert($data){
          return $this->db->insert('user', $data);                   
                                   
     }

     public function update($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('user', $data);
    }

    // delete data
    public function delete($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }
                        
                            
                        
}
                        
/* End of file User_model.php */
    
                        