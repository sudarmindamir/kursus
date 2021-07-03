<?php

class M_Kursus extends CI_Model
{
    public function simpan_data_kursus($s)
    {
        $this->db->insert('tabel_kursus', $s);
    }

    public function getDataKursus()
    {
        return $this->db->get('tabel_kursus')->result();
    }


    public function getDataKursusDetail($id_kursus)
    {
        return $this->db->get_where('tabel_kursus', array('id_kursus' => $id_kursus))->row();
    }

    public function updateKursus($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('mytable', $data);
    }
}
