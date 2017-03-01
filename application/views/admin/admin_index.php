<div class='col-md-12'>
  <div class='card'>
    <div class='header'>
      <h4 class='title'>List Pendaftar</h4>
    </div>
    <div class='content table-responsive table-full-width'>
      <table class='table table-hover table-striped'>
        <thead>
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>KTM</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1;foreach ($pendaftar as $mhs) { ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td>
                <p style='margin:0px;font-weight:bold;'><?php echo safe_echo_html($mhs['nim']); ?></p>
                <small><?php echo jurusan_by_nim($mhs['nim']); ?></small>
              </td>
              <td><?php echo safe_echo_html($mhs['nama']); ?></td>
              <td><?php echo safe_echo_html($mhs['email']); ?></td>
              <td><a href='<?php echo base_url('assets/ktm/'.jurusan_by_nim($mhs['nim']).'/'.$mhs['ktm']); ?>' onclick='window.open(this.href,"KTM","left=20,top=20,width=600,height=400,toolbar=1,resizable=0"); return false;'>Lihat KTM</a></td>
              <td><?php echo $mhs['konfirmasi']==1 ? "Confirmed" : "Unconfirmed"; ?></td>
            </tr>
          <?php $no++;} ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
