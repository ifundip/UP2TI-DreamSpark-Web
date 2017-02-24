<?php
  defined("BASEPATH") or exit("Tidak dapat akses langsung!");

  class Control_pendaftaran extends CI_Controller
  {

    public function index()
    {
      $this->template->load('home/home_pendaftaran.php');
    }

  }
