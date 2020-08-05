<?php 
class Hasil_model extends CI_Model { 


    public function simpan($hasil)
    {
        return $this->db->insert('hasil', $hasil);
    }
    
    // public function get_by_id ($id)
    // {
    //     $this->db->where('', $id);
    //     return $this->db->get('')->row();
    // }
    
    // public function insert ($data)
    // {
    //     return $this->db->insert('', $data);
    // }
    
    // public function update ($id,$data)
    // {
    //     $this->db->where('', $id);
    //     $this->db->update('', $data);
    // }
    
    // public function delete ($id)
    // {
    //     $this->db->where('', $id);
    //     $this->db->delete('');
    // }
    
 }
?>