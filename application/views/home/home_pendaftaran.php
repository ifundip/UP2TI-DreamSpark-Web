
  <div id='form-pendaftaran'>

    <div class='head-title'>
      <img src='<?php echo base_url('assets/web/img/dreamspark.png'); ?>'/>
      <h3>DreamSpark</h3>
      <h4>UP2TI FSM UNDIP</h4>
    </div>

    <form method='POST' enctype="multipart/form-data">

      <div class='small-title'>Registration</div>

      <div class="input-group">
    		<span class="input-group-addon">
    			<i class="material-icons">verified_user</i>
    		</span>
        <div class='form-group label-floating'>
          <label class='control-label'>Nomor Induk Mahasiswa</label>
          <input autofocus class='form-control' name='nim' maxlength='14' required/>
        </div>
      </div>

      <div class="input-group">
    		<span class="input-group-addon">
    			<i class="material-icons">face</i>
    		</span>
        <div class='form-group label-floating'>
          <label class='control-label'>Nama Lengkap</label>
          <input class='form-control' name='nama' maxlength='40' required/>
        </div>
      </div>

      <div class="input-group">
    		<span class="input-group-addon">
    			<i class="material-icons">mail_outline</i>
    		</span>
        <div class='form-group label-floating'>
          <label class='control-label'>Email</label>
          <input class='form-control' name='email' maxlength='40' type='email' required/>
        </div>
      </div>

      <div class="input-group">
    		<span class="input-group-addon">
    			<i class="material-icons">credit_card</i>
    		</span>
        <div class='form-group'>
          <div class='kotak-gambar'>
            <img src='' style="display:none" id='ktm_image'/>
            <span>Upload KTM</span>
          </div>
          <input name='ktm' type='file' style='display:none;' id='upload_ktm' accept="image/*"/>
          <label class='btn btn-info' style='width:100%;' for='upload_ktm'><i class='material-icons'>file_upload</i> Upload File</label>
        </div>
      </div>

      <div class='form-group'>
        <button type='submit' class='btn btn-primary' style='width:100%;font-weight:bold;'><i class='material-icons'>send</i> Submit</button>
      </div>

    </form>
  </div>
