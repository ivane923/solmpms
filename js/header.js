$(document).ready(function() {
    $('.btnPasswordSave').click(function() {
        var user_id = $('#user_id').html();
        var newpass = $('.newpassword').val();
        var repass = $('.repassword').val();
        var err;

        if(newpass && repass) {
            if (newpass!=repass) {
                $('#pw_error').html("Your Password did not match!");
            } else if (newpass.length < 5) {
                $('#pw_error').html("Please provide atleast 6 characters or more");
            } else {
                var url = "<?=base_url();?>users/change_password";
                var param = {
                    'user_id'   : user_id,
                    'newpass'   : newpass
                };

                $.post(url, param, function(data) {
                    if(data) {
                        $( "#pw_error" ).slideUp( 300 ).delay( 800 ).fadeIn( 400 ).html(data);
                    }else {
                        $('#pw_error').html('');
                        $( "#pw_success" ).slideUp( 300 ).delay( 800 ).fadeIn( 400 ).html('Password has been changed');
                        $('#pw_success').removeClass('hidden');
                        $('.newpassword').val('');
                        $('.repassword').val('');
                    }
                });
            }
        }else {
            $('#pw_error').html('Sorry, please fill in all required information.');
        }
    }); 

    $('#changePW').click(function(){
        $('#pw_success').addClass('hidden');
    });
    
    $('#btnclose').click(function() {
        $('#pw_success').removeClass('hidden');
    });
    
});