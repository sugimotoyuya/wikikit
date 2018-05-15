var flg = true;
$(document).on("click",".tmp_slider",function () {
    $(this).find(".tmp_slide").removeAttr("style");
    if (flg){
        $(this).find(".tmp_slide").animate({
            "right":"0px"
        });
        flg = false;
    }else{
        $(this).find(".tmp_slide").animate({
            "left":"0px"
        });
        flg = true;
    }

});