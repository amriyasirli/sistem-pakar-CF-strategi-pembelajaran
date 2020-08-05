<?php 
class Beranda_model extends CI_Model { 

    public function strategi_count ()
    {
        return $this->db->count_all('strategi');
    }

    public function indikator_count ()
    {
        return $this->db->count_all('indikator');
    }

    public function pengetahuan_count ()
    {
        return $this->db->count_all('basis_pengetahuan');
    }

    public function user_count ()
    {
        return $this->db->count_all('user');
    }

    public function visitor ($data)
    {
        return $this->db->insert('visitor', $data);
    }

    public function visitor_count ()
    {
        return $this->db->count_all('visitor');
    }

    public function analisa_count ()
    {
        return $this->db->count_all('hasil');
    }

    public function feed_activity ()
    {
        $this->db->select('*');
        $this->db->order_by('id_hasil', 'DESC');
        $this->db->limit(4);
        return $this->db->get('hasil');
    }

    public function feed ()
    {
        $this->db->select('*');
        $this->db->order_by('id_hasil', 'DESC');
        $this->db->limit(7);
        return $this->db->get('hasil');
    }
 }
?>