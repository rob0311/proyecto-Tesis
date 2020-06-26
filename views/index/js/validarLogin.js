$(document).ready(function(){
    $("#form_log_est").submit(function(e){
        var est=true;
        e.preventDefault();

        var idc=$("#carnet").val() , idpas=$("#password").val();
        $.ajax({
            async: false,
            url:"index/logEst",
            data: { "carnet" :idc, "password" :idpas},
            type: "post",
            success:(function(data){
        
                if(data!=0){
                   
                $("#Errorlog").html(data).fadeIn(500).fadeOut(7000);
               
                est= false;
            }
            })
        })


        var activo=$("#carnet").val(), actpas=$("#password").val();
        $.ajax({
            async: false,
         url:"index/verificarEstado",
         data: {"carnet" :activo, "password" :actpas  },
         type: "POST",  
         success:(function(data){
            
             if(data!=0){
                
             $("#Errorlog").html(data).fadeIn(500).fadeOut(7000);
            
             est= false;
         }
         })
     });//fin de var activo

        if(est)
  window.location.replace('student');
return est;
        
    })

//********************************************************************************************************************************
//validar login de profesor
    $("#form_log_prof").submit(function(e){
        var estado=true;
        e.preventDefault();

        var idp=$("#users").val() , idpass=$("#pass").val();
        $.ajax({
            async: false,
            url:"index/loginProf",
            data: {"users" :idp, "pass" :idpass},
            type: "post",
            success:(function(data){
        
                if(data!=0){
                   
                $("#Errorprof").html(data).fadeIn(500).fadeOut(7000);
               
                estado= false;
            }
            })
        })

        if(estado)
  window.location.replace('profesor');
return estado;
        
    })

});
