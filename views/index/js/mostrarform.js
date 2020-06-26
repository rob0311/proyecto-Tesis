$(document).ready(function () {
   // $('#estudiante').addClass('hide');
    $('#profesor').addClass('hide');
    

var edit = false;
$('#btn-estudiante').click(() => {
    $('#estudiante').removeClass('hide');
    $('#btn-estudiante').addClass('fondo');
    $('#profesor').addClass('hide');
    $('#btn-profesor').removeClass('fondo');
    
});
$('#btn-profesor').click(() => {
    $('#profesor').removeClass('hide');
    $('#btn-profesor').addClass('fondo');
    $('#estudiante').addClass('hide');
    $('#btn-estudiante').removeClass('fondo');
    $('.message').addClass('hide');

});



});