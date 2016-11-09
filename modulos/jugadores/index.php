
<h2>Jugadores</h2>
  <table id="mita"
         data-toggle="table"
         data-pagination="true"
         data-search="true"
         data-url="datos/jugadores.php">
      <thead>
      <tr>
          <th data-field="foto">Foto</th>
          <th data-field="apellido">Apellido</th>
          <th data-field="nombre">Nombre</th>
          <th data-field="documento">DNI</th>
          <th data-field="categoria">Categoria</th>
          <th data-field="opciones">Opciones</th>
      </tr>
      </thead>
  </table>


<!-- Button trigger modal -->
<button type="button" class="btn btn-default" onclick="location.href='?mod=jugadores_nuevo'">
 Nuevo Jugador
</button>


<script >
function ver_orden(id){
  window.open("orden.php?id="+id)
}
function ver_dtoc(id){
  window.open("detalleoc.php?id="+id)
}
function anular_orden(id){
  var r = confirm("¿Realmente desea anular la orden de compra nro "+id+"?");
  if (r == true) {
      $('#frmo'+id).submit(); 
  } else {
      return;
  }
}
</script>
