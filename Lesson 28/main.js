// // //js
// // //
// // document.getElementById("myElement").style.display = "none";

// // //jquery
// // $('myElement').hide();

// //manipulate with html
// // $('myElement').text("New Text");

// $('.btn').click(function(){
//     console.log($('#myElement').text())
//     $('#myElement').text("Test");
//     $('#myElement').append('<br> Extra text');
// });

// $('#btn3').click(function(){
//     $('.hidden').show('slow');
// })
// $('#btn4').click(function(){
//     $('.hidden').hide();
// })

// $('#square').click(function(){
//     $('#square').animate({
//         'width':'200px',
//         'height':'200px'
//     })
// })

$('#sort').sortable();

$(function(){
    $('#accordion').accordion();
})
$(function(){
    $('#tabs').tabs();
})

