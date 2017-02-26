<?php
  class Model_mahasiswa extends CI_Model
  {

    public function get_detail_mahasiswa($nim)
    {
      $this->db->select('*');
      $this->db->from('tbl_mahasiswa');
      $this->db->where('nim',$nim);

      $query = $this->db->get();
      if($query->num_rows()!=0){
        return $query->row_array();
      }else{
        return false;
      }
    }

    public function availability_check($nim)
    {
      $this->db->select('*');
      $this->db->from('tbl_mahasiswa_daftar');
      $this->db->where('nim',$nim);
      $query = $this->db->get();

      return $query->num_rows()!=0 ? false : true;
    }

    public function daftar($arr)
    {
      $this->db->insert('tbl_mahasiswa_daftar', $arr);
    }

  }
