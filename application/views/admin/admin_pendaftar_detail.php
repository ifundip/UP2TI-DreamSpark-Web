<div class='col-md-8'>
  <div class='card'>
    <div class='header'>
      <h4 class='title'>Detail Pendaftar</h4>
    </div>
    <div class='content'>
      <form method='POST'>

        <div class='row'>
          <div class='col-md-6'>
            <!-- NIM Disabled -->
            <div class='form-group'>
              <label>Nomor Induk Mahasiswa</label>
              <input class='form-control' disabled placeholder='NIM' value='<?php echo safe_echo_input($pendaftar['nim']); ?>'/>
            </div>
          </div>
          <div class='col-md-6'>
            <!-- Nama Mahasiswa -->
            <div class='form-group'>
              <label>Nama Lengkap</label>
              <input class='form-control' placeholder='Nama Lengkap' value='<?php echo safe_echo_input($pendaftar['nama']); ?>'/>
            </div>
          </div>
        </div>

        <div class='form-group'>
          <label>Email</label>
          <input class='form-control' placeholder='Email' value='<?php echo safe_echo_input($pendaftar['email']); ?>'/>
        </div>

        <label>Kartu Tanda Mahasiswa</label>
        <div class='form-group'>
          <a href='<?php echo base_url('assets/ktm/'.jurusan_by_nim($pendaftar['nim']).'/'.$pendaftar['ktm']); ?>' class='btn btn-default' onclick='window.open(this.href,"KTM","left=20,top=20,width=600,height=400,toolbar=1,resizable=0"); return false;'>Lihat KTM</a>
        </div>
        <hr/>
        <button type='submit' class='btn btn-danger'>Simpan</button>

      </form>
    </div>
  </div>
</div>
