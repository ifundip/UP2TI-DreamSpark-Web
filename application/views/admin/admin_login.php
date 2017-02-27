<!DOCTYPE html>
<html>
  <head>
    <title>Login | Administration - DreamSpark UP2TI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='<?php echo base_url('assets/web/admin/css/bootstrap.min.css'); ?>' rel='stylesheet'/>
    <link href='<?php echo base_url('assets/web/admin/css/style.css'); ?>' rel='stylesheet'/>
  </head>
  <body class='login-page'>

    <div id='login-wrapper'>
      <form method='POST' class='login-form'>

        <div class='error-form'></div>

        <div class='form-group'>
          <label>Username</label>
          <input class='form-control' name='username' placeholder='Username' autofocus value='<?php echo set_value('username') ?>'/>
        </div>
        <div class='form-group'>
          <label>Password</label>
          <input class='form-control' type='password' name='password' placeholder='Password'/>
        </div>
        <button type='submit' class='btn btn-primary'>Login</button>
      </form>
    </div>

    <script src='<?php echo base_url('assets/web/admin/js/jquery-1.10.2.js'); ?>'></script>
    <script src='<?php echo base_url('assets/web/admin/js/bootstrap.min.js'); ?>'></script>
    <script>function base_url(str){return '<?php echo base_url(); ?>'+str;}</script>
    <script src='<?php echo base_url('assets/web/admin/js/script.js?ver='.date("YmdHis")); ?>'></script>
  </body>
</html>
