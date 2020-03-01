$(document).ready(function(){
  
  $("#form_asistencia").submit(function(A){
     var est=true;
     e.preventDefault();
      $.ajax({
    type: 'POST',
    url: 'student/cargar_Anio_esc'
  })
      
  }

  })