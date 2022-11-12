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

    $("#gradient-bg-faded").click(function(){
        $("#form-container-reg-acc").css('display','none');
        $("#form-container-login").css('display','none');
        $("#gradient-bg-faded").css('display','none');
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
        $("#form-login").submit();
    })
})