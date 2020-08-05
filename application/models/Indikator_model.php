<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Indikator_model extends CI_Model {
                        
     public function get(){
          return $this->db->get('indikator')->result();                   
                                   
     }

     public function ambil(){
        return $this->db->get('indikator')->result_array();                   
                                 
   }

     public function get_by_id($id)
    {
        $this->db->where('indikator_id', $id);
        return $this->db->get('indikator')->row();
    }
     
     public function insert($data){
          return $this->db->insert('indikator', $data);                   
                                   
     }

     public function update($id, $data)
    {
        $this->db->where('indikator_id', $id);
        $this->db->update('indikator', $data);
    }

    // delete data
    public function delete($id)
    {
        $this->db->where('indikator_id', $id);
        $this->db->delete('indikator');
    }

                            
                        
}
                        
/* End of file indikator_m.php */
    
                        