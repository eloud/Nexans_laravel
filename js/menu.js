$('.add').click(function(){
    $('.my_left_menu').addClass("attention");
     $('.my_left_menu').removeClass("d-none");
     $('.my_left_menu').addClass("d-block");
     $('.add').removeClass("d-block");
     $('.add').addClass("d-none");
     $('.remove').addClass("d-block");
});

$('.remove').click(function(){
    $('.my_left_menu').removeClass("attention");
    $('.my_left_menu').removeClass("d-block");
     $('.my_left_menu').addClass("d-none");
     $('.add').addClass("d-block");
     $('.remove').removeClass("d-block");
     $('.remove').addClass("d-none");
});

function screen(){
var element = document.getElementById("navbarSupportedContent");

if($(window).width()>991){
    if (element.matches(".attention")) {
        $('.my_left_menu').addClass("att");
    }
}
else{
    if (element.matches(".att")) {
        $('.add').removeClass("d-none");
        $('.remove').removeClass("d-block");
        $('.remove').addClass("d-none");
        $('.my_left_menu').removeClass("att");
        $('.my_left_menu').removeClass("d-block");
        $('.my_left_menu').addClass("d-none");
    }
}
}

window.setInterval(screen,2);

window.setInterval(My_height,2);
function My_height(){
    var height=$(window).height();
    $("body").css("height",height);
}
