<?php

  class Model_admin extends CI_Model
  {

    public function login($username)
    {
      $this->db->select('*');
      $this->db->from('tbl_admin a');
      $this->db->join('tbl_jurusan b', 'a.privilege = b.id', 'left');
      $this->db->where('a.username',$username);

      $query = $this->db->get();

      return $query->num_rows()!=0 ? $query->row_array() : false;
    }

    public function get_pendaftar($nimJurusan)
    {
      $this->db->select('*');
      $this->db->from('tbl_mahasiswa_daftar');
      if($nimJurusan!=NULL){
        $this->db->like($nimJurusan);
      }
      $query = $this->db->get();
      return $query->result_array();
    }

  }
