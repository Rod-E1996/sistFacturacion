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
    recargarLista();
    
    $('#descripcion_1').change(function(){
        recargarLista();
    });
})

function recargarLista(){
    // d = document.getElementById("descripcion_1").value;
    // alert(d);
    $.ajax({
        type:"POST",
        url:"datos.php",
        data:
            "descripcion=" + $('#descripcion_1').val(),
        success:function(r){
            $('#fila_1').html(r);
        }
    });
}
function cal() {
    try {
        
      var a = parseInt(document.getElementById('num1').value),
          b = parseInt(document.getElementById('num2').value);
      document.getElementById('sum').value = a * b;
    } catch (e) {
    }
  }