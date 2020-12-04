
  $(document).ready(function(){
  $("#btn-borrar-asig").click(function(){
     if (confirm("Seguro que quieres borrar este producto")) 
    {
         //capturar el elemento clicado
         let element = $(this)[0].parentElement.parentElement;
         //obtener el valor del atributo idCliente del tr
         let idpbr = $(element).attr('idp');
     
         $.post('producto.php', { idpbr }, (response) => {
             alert(response);
             mostrarproducto()
         });
     }
  
  });
})
