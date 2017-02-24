<?php
  defined("BASEPATH") or die("Tidak dapat akses langsung!");

  class Template {
    private $folder = 'home';

    public function load($view, $data = array())
    {
      $ci   =& get_instance();

      $ci->load->library('parser');
      $subdata['content'] = $ci->load->view($view, $data, true);
      $ci->parser->parse($this->folder.'/template', $subdata);
    }

  }
