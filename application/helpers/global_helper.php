<?php
  if(!function_exists('safe_echo_html'))
  {
    function safe_echo_html($string)
    {
      return trim(strip_tags(htmlspecialchars($string, ENT_QUOTES)));
    }
  }

  if(!function_exists('safe_echo_input'))
  {
    function safe_echo_input($string='')
    {
      return trim(preg_replace('/\s+/',' ', htmlspecialchars($string, ENT_QUOTES)));
    }
  }

  function jurusan_by_nim($nim){
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

    return $jurusan;
  }
