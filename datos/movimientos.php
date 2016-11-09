<?php 
include("../config.php");
$result = mysql_query("select fecha, concat(descripcion,' - ',cliente) as descripcion, concat('$',monto) as monto, 'p' as tipo, id from pago
union
select fecha, descripcion, concat('$',monto) as monto, 'i' as tipo, id from ingreso
union
select fecha, descripcion, concat('-$',monto) as monto, 'e' as tipo, id from egreso");  
$json_response = array();

while ($row = mysql_fetch_array($result)) {

    $anular=' <button type="button" class="btn btn-danger" onclick="eliminar_movimiento('.$row['id'].')">Eliminar</button>
    <form action="" method="post" id="frmo'.$row['id'].'">
    <input type="hidden" name="anular" value="'.$row['id'].'"/> 
    <input type="hidden" name="tipo" value="'.$row['tipo'].'"/> 
    </form>';

    $row_array['descripcion'] = $row['descripcion'];
    $row_array['fecha'] = $row['fecha'];
    $row_array['monto'] = $row['monto'];
  
    $row_array['operaciones'] = $anular;
    array_push($json_response,$row_array);
}
echo json_encode($json_response);
?>