<?php
  defined('BASEPATH') or die('Tidak dapat akses langsung!');

  class Admin {
    private $ci;

    public function __construct()
    {
      $this->ci =& get_instance();
      $this->ci->load->model('model_admin');
      $this->ci->load->library('encryption');
    }

    public function login($username, $password)
    {
      $out   = false;
      $login = $this->ci->model_admin->login($username);
      if($login!=false){
        if(password_verify($password, $login['password'])){
          $cookie_value['username']   = $login['username'];
          $cookie_value['email']      = $login['email'];
          $cookie_value['fullname']   = $login['fullname'];
          $cookie_value['privilege']  = $login['privilege'];
          $cookie_value['nimJurusan'] = $login['nimJurusan'];

          $cookie_value   = json_encode($cookie_value);
          $cookie_value   = $this->ci->encryption->encrypt($cookie_value);

          set_cookie('admin',$cookie_value,time()+3600*24);

          $out = true;
        }
      }
      return $out;
    }

    public function pendaftaran_delete($nim, $nimJurusan=NULL)
    {
      $this->ci->model_admin->delete_pendaftar($nim, $nimJurusan);
    }

    public function pendaftaran_detail($nim, $nimJurusan=NULL)
    {
      return $this->ci->model_admin->detail_pendaftar($nim, $nimJurusan);
    }

  }
