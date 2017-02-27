function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#ktm_image').attr('src', e.target.result).show();
            $(".kotak-gambar span").remove();
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#upload_ktm").change(function() {
    readURL(this);
});

$("#form-pendaftaran form").submit(function(e){
  e.preventDefault();

  var ktm_image = $("#upload_ktm").val();

  if(ktm_image){

    var file_ktm  = $("#upload_ktm").prop('files')[0];
    var form_data = new FormData();
    form_data.append('ktm', file_ktm);
    form_data.append('nim', $('input[name="nim"]').val() );
    form_data.append('nama', $('input[name="nama"]').val() );
    form_data.append('email', $('input[name="email"]').val() );

    $("button[type='submit']").prop('disabled',true).html("<i class='fa fa-spin fa-cog'></i> Loading&hellip;");

    $.ajax({
      url: 'ajax/register_dreamspark',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      type: 'POST',
      dataType: 'json',
      success: function(response){
        // console.log(response);
        if(response.status){
          swal("Sukses!","Kamu berhasil mendaftar DreamSpark UP2TI FSM UNDIP");
          $("#form-pendaftaran form")[0].reset();
        }else{
          var errMessage = "";
          $.each(response.message, function(index, element){
            errMessage += "<p>"+element+"</p>";
          });
          swal({
            title: "Oops!",
            text: errMessage+" <p><small>Silahkan hubungi pihak UP2TI atau hubungi melalui email <a href='mailto:m.novalbs@gmail.com'>disini</a></small></p>",
            html: true,
            type: "error",
          });
        }
      },
      complete: function(){
        $("button[type='submit']").prop('disabled',false).html("Submit");
      }
    });
  }else{
    swal("Oops!","Gagal, KTM wajib diupload","error");
  }
});

$("input[name='nim']").focusout(function(){
  var nim         = $(this).val();
  var input_nama  = $("input[name='nama']");
  var nama        = input_nama.val();
  if(!nama){
    $(".loading").css('display','table');
    input_nama.prop('disabled',true);
    $.ajax({
      url: 'ajax/get_detail_mahasiswa',
      type: 'POST',
      data: {nim:nim},
      dataType: 'json',
      timeout: 5000,
      success: function(data){
        if(data.status){
          input_nama.val(data.result.nama);
          input_nama.parents('.form-group').removeClass('is-empty has-error');
          input_nama.click();
        }
        input_nama.prop('disabled',false);
        $(".loading").hide();
      }
    });
  }
});
