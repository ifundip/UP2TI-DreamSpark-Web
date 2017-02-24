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

  }
