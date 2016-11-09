<?php 
include("../config.php");
$result = mysql_query("select * from jugadores order by id desc");  
$json_response = array();

while ($row = mysql_fetch_array($result)) {
    $row_array['id'] = $row['id'];
    $row_array['apellido'] = $row['apellido'];
    $row_array['nombre'] = $row['nombre'];
    $row_array['documento'] = $row['dni'];
    $row_array['categoria'] = $row['categoria'];

    $row_array['foto'] = '<img src="jugador.jpg" width="50" height="50" />';
    $row_array['opciones'] = '<button type="button" class="btn btn-success" onclick="#">Ficha</button><button type="button" class="btn btn-danger" onclick="#">Eliminar</button>
    <form action="" method="post" id="frmo'.$row['id'].'">
    <input type="hidden" name="anular" value="'.$row['id'].'"/>	
    </form>';
    array_push($json_response,$row_array);
}
echo json_encode($json_response);
?>