$(document).ready(function(){
   $("#asist").submit(function(e){
      var estado=true;
      e.preventDefault();
      
    //  document.getElementById("resultado_asistencia").innerHTML ="";
      var id=$("#asistir").val();
      //document.getElementById("id_dia").innerHTML;
      $.ajax({
        async: false,
        url:"student/asistencia",
        data: { "id_dia" :id },
        type: "post",
        success:(function(data){
    
            if(data!=0){
                    
              $("#resultado_asistencia").html(data).fadeIn(500).fadeOut(7000);
         //document.getElementById("resultado_asistencia").innerHTML ="<h3 class='alert alert-danger' role='alert'> "+response+"</h3>";
            estado= false;
        }
        })
    })
    if(estado==true)
    swal({
      title:'Bienvenido a clase',
      text:" Exito",
      type:'success'
    })
    return estado;

    
  });
  

  
});


//$("#btn").click(function(){
  //swal({
    //title:'Bienvenido a clase',
    //text:" Exito",
   // type:'success'
  //})

//}); 