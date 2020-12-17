
  $(document).ready(function(){
  
 /*=============================================
ELIMINAR ASIGNATURAS
=============================================*/
 $("#btn_elim_asig").click(function(){
swal({

    title: '¿Está seguro de borrar la Asignatura?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar Asignatura!'
        }).then(function(result) {
        if (result.value) {

          window.location ="profesor/asignaturas";

        }
  })
})
/*=============================================

=============================================*/


/*=============================================
ELIMINAR CLASES
=============================================*/
 $(document).on('click', '.btn-borrar', function () {
 
//capturar el id
var ID =$(this).parents("tr").find("td").eq(0).text();
var name =$(this).parents("tr").find("td").eq(1).text();
  



})
/*=============================================

=============================================*/


})/*fin de documnet*/
