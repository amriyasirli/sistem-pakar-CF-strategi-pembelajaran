<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pengetahuan_model extends CI_Model {
                        
     public function get(){
         $this->db->select('*');
         $this->db->from('basis_pengetahuan');
         $this->db->join('strategi', 'strategi.strategi_id = basis_pengetahuan.strategi_id');
         $this->db->join('indikator', 'indikator.indikator_id = basis_pengetahuan.indikator_id');
          return $this->db->get();                   
                                   
     }

     public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('basis_pengetahuan');
        $this->db->join('strategi', 'strategi.strategi_id = basis_pengetahuan.strategi_id');
        $this->db->join('indikator', 'indikator.indikator_id = basis_pengetahuan.indikator_id');
        $this->db->where('basis_id', $id);
        return $this->db->get()->row();
    }
     
     public function insert($data){
          return $this->db->insert('basis_pengetahuan', $data);                   
                                   
     }

     public function update($id, $data)
    {
        $this->db->where('basis_id', $id);
        $this->db->update('basis_pengetahuan', $data);
    }

    // delete data
    public function delete($id)
    {
        $this->db->where('basis_id', $id);
        $this->db->delete('basis_pengetahuan');
    }

                            
                        
}
                        
/* End of file indikator_m.php */
    
                        