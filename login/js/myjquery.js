$(document).ready(function () {
$('#username,#password').mouseover(function () { 

    $(this).fadeOut(10);
    $(this).fadeIn(1000);

    
});

$('#username,#password').click(function () { 
    
    $(this).css('background-color', "#FFF");
    $(this).css('color', "rgb(44, 44, 44)");
    $(this).css('box-shadow', "2px 2px 5px white");

});
$('#form,body').click(function () { 

    $('#username,#password').css('background-color', "rgba(7, 7, 7, 0.726)");
    $('#username,#password').css('color', "rgb(92, 92, 92)");
    $('#username,#password').css('box-shadow', "0px 0px 0px black");

})

});