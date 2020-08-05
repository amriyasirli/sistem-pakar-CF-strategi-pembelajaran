<?php 
class Diagnosa_model extends CI_Model { 

    public function gabung ()
    {
        $this->db->select('*');
        $this->db->join('strategi', 'strategi.strategi_id = hasil.hasil_id');
        $this->db->order_by('id_hasil', 'DESC');
        $this->db->limit(10);
        $this->db->distinct('strategi_nama');
        return $this->db->get('hasil');
    }

    public function sqlkondisi ()
    {
        $this->db->order_by('kondisi_id');
        $query = $this->db->get('kondisi');
        return $query;
    }
    
    public function sqlstrategi ()
    {
        $this->db->order_by('strategi_id');
        $query = $this->db->get('strategi');
        return $query;
    }

    public function strategi_id ($id)
    {
        // $this->db->select('*');
        // $this->db->from('basis_pengetahuan');
       return $this->db->get_where('basis_pengetahuan', ['strategi_id' =>$id]);
        
    }

    public function data_statistisk(){
        $query = $this->db->query("SELECT hasil_id, COUNT(hasil_id) AS hasil_id FROM hasil GROUP BY hasil_id");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 }
?>