$(document).ready(function(){

    $(document).on('click','#login',function (){
        $.ajax({
            url:'../php/login.php',
            type:'post',
            data:{
                userid : $("input[name=i_userid]").val(),
                userpass : $("input[name=i_userpass]").val(),
            }
        }).done(function(data){
            //$("#debg").html(data);
            if (data === "error"){
                $(".error").html("ログインIDまたは、パスワードが違います。");
            }else if(data === "success"){
                window.location.href = "../main.php";
            }
        });
    });

});