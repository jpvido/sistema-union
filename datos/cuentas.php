<?php 
include("../config.php");
/* 
$query = "select id,DATE_FORMAT(fecha,'%d %b %Y %T') as fecha,descripcion,cantidad,facturado,TRUNCATE(monto,2) as monto
    from cuenta where id_cliente = ".$_REQUEST["id"]."
    UNION 
    select '' as id,'' as fecha,'-TOTAL-' as descripcion, '' as cantidad, '' as facturado,TRUNCATE(sum(monto*cantidad),2) as monto 
    from cuenta where id_cliente = ".$_REQUEST["id"];
*/
if ($_REQUEST["id"]=='0')

   $query = "select id,DATE_FORMAT(fecha,'%d %b %Y %T') as fecha,descripcion,cantidad,facturado,TRUNCATE(monto,2) as monto
    from cuenta where facturado = 0 and id_cliente = ".$_REQUEST["id"]; 
else
    $query = "select id,DATE_FORMAT(fecha,'%d %b %Y %T') as fecha,descripcion,cantidad,facturado,TRUNCATE(monto,2) as monto
    from cuenta where id_cliente = ".$_REQUEST["id"];
    
$result = mysql_query($query) or die(mysql_error());  

$json_response = array();

while ($row = mysql_fetch_array($result)) {
    $f="";
    if ($row["facturado"]==0) $f="No";
    if ($row["facturado"]==1) $f="Si";

    $row_array['fecha'] = $row['fecha'];
    $row_array['descripcion'] = $row['descripcion'];
    $row_array['cantidad'] = $row['cantidad'];
    $row_array['monto'] = '$'.$row['monto'];
    $row_array['total'] = '$'.$row['cantidad'] * $row['monto'];
    $row_array['facturado'] = $f;
    $row_array['id'] = $row['id']; 
    
    if ($row['descripcion']=="-TOTAL-") {
        $row_array['monto'] = '';
        $row_array['total']  = '$'.$row['monto'];
        $row_array['facturado'] = '';
    }
if ($_REQUEST["id"]!='0'){
    if (((float)$row["monto"])>0){
              $row_array['operaciones'] = '<button type="button" onclick="ver_det('.$row['id'].')" class="btn btn-success">Detalle</button>';
         }else{
             $row_array['operaciones'] = '<button type="button" onclick="ver_rec('.$row['id'].')" class="btn btn-success">Recibo</button>';
         }

     $row_array['operaciones'] .= '
     <button type="button" onclick="editar_cuenta('.$row['id'].','."'".str_replace('"', '', $row['descripcion'])."'".',
        '.$row['cantidad'].','.$row['monto'].')" class="btn btn-primary">Editar</button>
<button type="button" onclick="eliminar_cuenta('.$row['id'].','."'".str_replace('"', '', $row['descripcion'])."'".')" class="btn btn-danger">Eliminar</button>
<form action="" method="post" id="frmo'.$row['id'].'">
    <input type="hidden" name="anular" value="'.$row['id'].'"/> 
    </form>';
}else{

     $row_array['operaciones'] = '
     <button type="button" onclick="editar_cuenta('.$row['id'].','."'".str_replace('"', '', $row['descripcion'])."'".',
        '.$row['cantidad'].','.$row['monto'].')" class="btn btn-primary">Editar</button>
<button type="button" onclick="eliminar_cuenta('.$row['id'].','."'".str_replace('"', '', $row['descripcion'])."'".')" class="btn btn-danger">Eliminar</button>
<form action="" method="post" id="frmo'.$row['id'].'">
    <input type="hidden" name="anular" value="'.$row['id'].'"/> 
    </form>';


}
    array_push($json_response,$row_array);

   
}
echo json_encode($json_response);
?>