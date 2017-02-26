<?php
  defined('BASEPATH') or die('Tidak dapat akses langsung!');

  class Control_ajax extends CI_Controller
  {
    public function get_detail_mahasiswa()
    {
      $out['status']  = false;
      $out['result']  = '';

      $this->form_validation->set_rules('nim','NIM','required');

      if($this->form_validation->run()!=false){
        $this->load->model('model_mahasiswa');
        $nim    = $this->input->post('nim');
        $result = $this->model_mahasiswa->get_detail_mahasiswa($nim);
        if($result!=false){
          $out['status'] = true;
          $out['result'] = $result;
        }
      }

      echo json_encode($out);
    }

    public function register_dreamspark()
    {
      $this->load->model('model_mahasiswa');
      $out['status']  = false;
      $out['message'] = array();

      $this->form_validation->set_rules('nim','NIM','required|callback_availability_check');
      $this->form_validation->set_rules('nama',"Nama",'required');
      $this->form_validation->set_rules('email','Email','required|valid_email');

      $isok = true;

      if(!$this->form_validation->run()){
        if(!empty(form_error('nim'))){ array_push($out['message'], form_error('nim',null,null)); }
        if(!empty(form_error('nama'))){ array_push($out['message'], form_error('nama',null,null)); }
        if(!empty(form_error('email'))){ array_push($out['message'], form_error('email',null,null)); }
      }else{
        $nim    = $this->input->post('nim');
        $nama   = $this->input->post('nama');
        $email  = $this->input->post('email');

        switch( substr($nim,3,3) ){
          case '103' : {
            $jurusan  = "informatika";
            break;
          }
          case '201' : {
            $jurusan  = 'biologi';
            break;
          }
          case '102' : {
            $jurusan  = 'statistika';
            break;
          }
          case '401' : {
            $jurusan  = 'fisika';
            break;
          }
          case '301' : {
            $jurusan  = 'kimia';
            break;
          }
          case '101' : {
            $jurusan  = 'matematika';
            break;
          }
          default : {
            $jurusan  = false;
            break;
          }
        }

        if($jurusan!=false){
          $config['upload_path']      = FCPATH.'assets/ktm/'.$jurusan.'/';
          $config['allowed_types']    = 'gif|jpg|png';
          $config['max_size']         = 2048;
          $config['file_name']        = $nim."_".date("[Y-m-d][H:i:s]")."_".$nama;

          $this->load->library('upload', $config);

          if(!$this->upload->do_upload('ktm')){
            array_push($out['message'], $this->upload->display_errors());
          }else{
            $this->load->helper('file');

            $logs   = "[".date("Y-m-d H:i:s")."]\n";
            $logs  .= "NIM     : ".$nim."\n";
            $logs  .= "Nama    : ".$nama."\n";
            $logs  .= "Email   : ".$email."\n\n";

            write_file(FCPATH.'application/logs/logs_pendaftaran.txt', $logs, 'a+');

            $mahasiswa['nim']         = $nim;
            $mahasiswa['nama']        = $nama;
            $mahasiswa['email']       = $email;
            $mahasiswa['ktm']         = $this->upload->data()['file_name'];
            $mahasiswa['expired']     = date("Y-m-d", strtotime(date("Y-m-d")) + (3600*24*365));
            // $mahasiswa['konfirmasi']  = 0;
            //
            // print_r($mahasiswa);

            $this->model_mahasiswa->daftar($mahasiswa);

            $out['status']  = true;
          }

        }else{
          $out['message'] = 'Jurusan harus berasal dari FSM UNDIP';
        }

      }

      echo json_encode($out);
    }

    public function availability_check($nim)
    {
      $this->load->model('model_mahasiswa');
      if( $this->model_mahasiswa->availability_check($nim) != false ){
        return true;
      }else{
        $this->form_validation->set_message('availability_check', "NIM anda sudah terdaftar di UP2TI");
        return false;
      }
    }

  }
