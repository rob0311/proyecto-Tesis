$(document).ready(function(){
    $(document).on("click",".pesta",function(e){
        CambiarImagen(e);
    })
})

// PERMITE CAMBIAR LA IMAGEN DE UN ELEMENTO IMG
function CambiarImagen(e){
    const id = e.target.id;
    const img = $(".fondo");
    const imagenes = ["alumnos.jpg","teacher.jpg"];

    if(id == "") img.attr("src","http://localhost:8080/Proyecto-Tesis/views/layout/inicio/img/" + imagenes[1]);
    else if(id === "est") img.attr("src","http://localhost:8080/Proyecto-Tesis/views/layout/inicio/img/" + imagenes[0]);
    else if(id === "doc") img.attr("src","http://localhost:8080/Proyecto-Tesis/views/layout/inicio/img/" + imagenes[1]);
   
}