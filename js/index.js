$(document).ready(function(){
    $("#btn-login").click(function(){
        $("#gradient-bg-faded").css('display','block');
        $("#form-container-login").css('display','block');
    })

    $("#btn-close-form-login").click(function(){
        $("#gradient-bg-faded").css('display','none');
        $("#form-container-login").css('display','none');
    })

    $("#btn-create-account").click(function(){
        $("#form-container-login").css('display','none');
        $("#form-container-reg-acc").css('display','block');
    })

    $("#btn-close-form-reg-acc").click(function(){
        $("#gradient-bg-faded").css('display','none');
        $("#form-container-reg-acc").css('display','none');
    })

    $("#btn-login-in-form-reg-acc").click(function(){
        $("#form-container-reg-acc").css('display','none');
        $("#form-container-login").css('display','block');
    })

    // HANDLE GRADIENT BG CLICK
    $("#gradient-bg-faded, .btn-confirm").click(function(){
        $("#form-container-reg-acc").css('display','none');
        $("#form-container-login").css('display','none');
        $(".form-popup-confirm").css('display','none');
        $("#gradient-bg-faded").css('display','none');
        $(".container-profile").css('display','none');
    })

    // SUBMIT FORM
    $("#btn-login-in-form-login").click(function(){
        username = $("#form-login").find("input[name='username'").val();
        if (username == "")
        {
            alert("Nhập SĐT/Tên tài khoản!");
            return;
        }
        password = $("#form-login").find("input[name='password'").val();
        if (password == "")
        {
            alert("Nhập mật khẩu!");
            return;
        }
        // $("#form-login").submit();

        $.ajax( 
            'test_function.php', // location of your php script
            { username: username, password: password }, // any data you want to send to the script
            function( data ){  // a function to deal with the returned information
                // $( 'body ').append( data );
            });
    })

    

    //OPEN & CLOSE REGISTRATION PERSONAL PROFILE FORM
    $('#btn-reg-acc').click(function(){
        $("#gradient-bg-faded").css('display','block');
        $(".container-profile").css('display','block');
    })

    $("#close_reg_person_profile").click(function(){
        $(".container-profile").css('display','none');
    })

})