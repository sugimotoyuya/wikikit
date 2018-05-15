$(document).ready(function(){

    $(document).on('click','#regist',function (){
        $.ajax({
            url:'../php/regist.php',
            type:'post',
            data:{
                userid : $("input[name=i_userid]").val(),
                userpass : $("input[name=i_userpass]").val(),
            }
        }).done(function(data){
            //$("#debg").html(data);
            if (data === "error"){
                $(".error").html("作成できないデータです。");
            }else if(data === "success"){
                window.location.href = "../main.php";
            }
        });
    });

});