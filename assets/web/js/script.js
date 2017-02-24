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

  alert(ktm_image);
});
