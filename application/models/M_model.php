<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_model extends CI_Model
{

    public function read($kode = FALSE)
    {
        if ($kode === FALSE) {
            // return all posts 
            return $this->db->get('waifuku')->result_array();
        } else {
            $query = $this->db->get_where('waifuku', ['kode' => $kode]);
            return $query->row();
        }
    }

    public function create($filename)
    {
        $data = [
            'nama' => $this->input->post('nama', TRUE),
            'asal' => $this->input->post('asal', TRUE),
            'gambar' => $filename
        ];

        $this->db->insert('waifuku', $data);
    }
    public function update($kode)
    {
        $data = [
            'nama' => $this->input->post('nama', TRUE),
            'asal' => $this->input->post('asal', TRUE),
        ];

        $this->db->where('kode', $kode);
        $this->db->update('waifuku', $data);
    }

    public function delete($kode)
    {
        $this->db->where('kode', $kode);
        $this->db->delete('waifuku');
    }

    // public function deleteAll(){
    //     $this->db->empty_table('post');
    // }
}
