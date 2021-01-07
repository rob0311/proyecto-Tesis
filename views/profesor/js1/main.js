
  $(document).ready(function(){

 /*=============================================
ELIMINAR ASIGNATURAS
=============================================*/

 $(document).on('click', '.btn-borrar_asig', function () {
   let base=document.getElementById("base_url").value;
//capturar el id
var ID =$(this).parents("tr").find("td").eq(0).text();
var name =$(this).parents("tr").find("td").eq(1).text();

  
swal({

    title: '¿Está seguro de borrar la Asignatura ?'+name,
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar Asignatura!'
        }).then(function(result) {
        if (result.value=true) {

          $.ajax({
                 async: false,
               url:base+'profesor/elimAsig',
               data: {"idAsig" :ID},
               type: "post",
              success:(function(data){
                
                if(data!=0){
                  swal({
                          type: "success",
                          title: "¡La Asignatura  ha sido Eliminada correctamente!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
  
                      }).then(function(result){
  
                          if(result.value=true){
                            window.location.reload(base+"profesor/asignaturas");
  
                          }
  
                      });
      
      
                 }
                
            })//fin de succes
        })// fin de ajax


         
        }// fin del if de result

  });//fin de then


})
/*=============================================

=============================================*/


/*=============================================
ELIMINAR CLASES
=============================================*/
 $(document).on('click', '.btn-borrar', function () {
  let base=document.getElementById("base_ur").value;
//capturar el id
var ID =$(this).parents("tr").find("td").eq(0).text();
var name =$(this).parents("tr").find("td").eq(1).text();
  
swal({

    title: '¿Está seguro de borrar la Clase?'+name,
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar Clase!'
        }).then(function(result) {
        if (result.value=true) {

          $.ajax({
                 async: false,
               url:base+'profesor/elimClass',
               data: {"idclass" :ID},
               type: "post",
              success:(function(data){
                
                if(data!=0){
            swal({
                          type: "success",
                          title: "¡La Clase  ha sido Eliminada correctamente!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
  
                      }).then(function(result){
  
                          if(result.value=true){
                            window.location.reload("profesor");
  
                          }
  
                      });
      
                 }
                
            })//fin de succes
        })// fin de ajax


          
        }// fin del if de result

  });//fin de then


})
/*=============================================

=============================================*/


})/*fin de documnet*/
