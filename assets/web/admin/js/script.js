function informasi(tipe, text){
  return "<div class='alert alert-"+tipe+"'>"+text+"</div>";
}

$(".login-form").submit(function(e){
  e.preventDefault();

  $(this).find('button').prop('disabled',true).html("<i class='fa fa-spin fa-cog'></i> Loading...");

  var username  = $(this).find('input[name="username"]').val();
  var password  = $(this).find('input[name="password"]').val();

  $.ajax({
    url: base_url('ajax/admin_login'),
    type: 'POST',
    dataType: 'json',
    data: {username:username, password:password},
    success: function(data){
      if(data.status!=true){
        $('.error-form').html( informasi('danger',data.message) );
      }else{
        window.location.href=base_url('admin');
      }
    },
    complete: function(){
      $('button').prop('disabled',false).html("Login");
    }
  });
});
