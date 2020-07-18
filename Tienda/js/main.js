// Script para data table
$(document).ready(function() {
    $('#tabla').DataTable({
    //para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrando _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "(Buscado en un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
        }
    });
});
// function cambiar() {
//     var x = $('#precio_1').val();
//     $('#ventas_afectas_1').val($('#precio_1').val())
// }

$(document).ready(function(){
    // $('#descripcion_1').val(1);
   
})

function recargarLista(price,iteradorPos){
    $("#num2_"+iteradorPos).val(price);
}
function cal(val1,val2,iterador) {
    //alert(val1+" "+val2+" "+iterador);
    try {
        
      var a = parseInt(val1),
          b = parseInt(val2);
      $('#sum_'+iterador).val(a * b);
    } catch (e) {
    }
  }