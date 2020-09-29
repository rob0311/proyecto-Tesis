$(document).ready(function(){

  
//funcion para marcar Asitencia
$('#btn_asitencia2').click(() => {
	document.getElementById("resultado_asistencia").innerHTML ="";
	 var id_e =document.getElementById('id_dia').innerText; //captura el id de la clase
	 
	     $.ajax({
       	url:'student/asistencia',
       	type: 'POST',
        data: {
        	id_e:id_e
        },
        success: (response) => {
                alert("funciona");
               
            }
   
});


	     
    

        //var response = data.responseText;
          // console.log(response);
    //document.getElementById("resultado_asistencia").innerHTML ="<h3 class='alert alert-danger' role='alert'> "+response+"</h3>";
   //$('#resultado_asistencia').hide(16000);
    
 
           
            
 
    
	});//fin del boton asitencia

})//fin de document