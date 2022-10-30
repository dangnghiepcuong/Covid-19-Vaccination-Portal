$(document).ready(function(){
    $("#btn-login").click(function(){
        $("#gradient-bg-faded").css('display','block');
        $("#form-login").css('display','block');
    })

    $("#btn-close-form-login").click(function(){
        $("#gradient-bg-faded").css('display','none');
        $("#form-login").css('display','none');
    })

    $("#btn-create-account").click(function(){
        $("#form-login").css('display','none');
        $("#form-reg-acc").css('display','block');
    })

    $("#btn-close-form-reg-acc").click(function(){
        $("#gradient-bg-faded").css('display','none');
        $("#form-reg-acc").css('display','none');
    })

    $("#btn-login-in-form-reg-acc").click(function(){
        $("#form-reg-acc").css('display','none');
        $("#form-login").css('display','block');
    })
})