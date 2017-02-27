<?php

  class Model_admin extends CI_Model
  {

    public function login($username)
    {
      $this->db->select('*');
      $this->db->from('tbl_admin');
      $this->db->where('username',$username);

      $query = $this->db->get();

      return $query->num_rows()!=0 ? $query->row_array() : false;
    }

  }
