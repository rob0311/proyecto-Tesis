 $(document).ready(function(){

 	$(document).on('click', '.btn-success', function () {
 		


var codigo_clase = document.getElementById("id_dia").innerHTML;
let base=document.getElementById("base").value;
 document.getElementById("resultado_asistencia").innerHTML ="";
 $.ajax({
            async: false,
            url:base+'student/asistencia',
            data: { "id_clase" :codigo_clase},
            type: "post",
            success:(function(datos){
  
         
       //var datos = datos.responseText;
        console.log(datos);
        document.getElementById("resultado_asistencia").innerHTML ="<h3 class='alert alert-danger' role='alert'> "+datos+"</h3>";
          $("#resultado_asistencia").fadeOut(3000);	  
          
        
                
               
            })
        })
  
       

})

 	})/*fin de documnet*/