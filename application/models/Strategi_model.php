<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Strategi_model extends CI_Model {
                        
     public function get_stra(){
          return $this->db->get('strategi');                   
                                   
     }

     public function get_by_id($id)
    {
        $this->db->where('strategi_id', $id);
        return $this->db->get('strategi')->row();
    }
     
     public function insert($data){
          return $this->db->insert('strategi', $data);                   
                                   
     }

     public function update($id, $data)
    {
        $this->db->where('strategi_id', $id);
        $this->db->update('strategi', $data);
    }

    // delete data
    public function delete($id)
    {
        $this->db->where('strategi_id', $id);
        $this->db->delete('strategi');
    }

                            
                        
}
                        
/* End of file Strategi_m.php */
    
                        