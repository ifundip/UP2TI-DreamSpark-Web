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

    $.ajax({
      url: 'ajax/register_dreamspark',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      type: 'POST',
      success: function(response){
        console.log(response);
      }
    });
  }
});

$("input[name='nim']").focusout(function(){
  var nim         = $(this).val();
  var input_nama  = $("input[name='nama']");
  var nama        = input_nama.val();
  if(!nama){
    $(".loading").show();
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
