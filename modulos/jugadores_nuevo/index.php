<?php 
if ($_POST){
   //print_r($_POST);
   $json = json_encode($_POST);
   $data = base64_encode($json);
   mysql_query("insert into jugadores (apellido,nombre,dni,categoria,foto,data) 
      values ('".$_POST["jape"]."','".$_POST["jnom"]."','".$_POST["jdni"]."','".$_POST["jdivliga"]."','','".$data."')
      ") or die(mysql_error());
   header("location:?mod=jugadores");
}

?>
<h2>Nuevo Jugador</h2>
  
<form name="frmcompra" id="frmcompra" role="form" action="" method="post">

<input type="hidden" name="op" value="insert" />

<div class="panel panel-primary">

<div class="panel-heading"><h3>Datos Personales</h3></div>
<div class="panel-body">

      <div class="form-group">
         <label for="nombre">Apellido:</label>
         <input type="text" class="form-control" id="" name="jape" placeholder="" >
      </div>
        <div class="form-group">
         <label for="nombre">Nombre:</label>
         <input type="text" class="form-control" id="" name="jnom" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">DNI:</label>
         <input type="text" class="form-control" id="" name="jdni" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Fecha de nacimiento:</label>
         <input type="text" class="form-control" id="" name="jfnac" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Lugar de nacimiento:</label>
         <input type="text" class="form-control" id="" name="jlnac" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Provincia:</label>
         <input type="text" class="form-control" id="" name="jnac" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Obra Social:</label>
         <input type="text" class="form-control" id="" name="jos" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Grupo Sanguineo:</label>
         <input type="text" class="form-control" id="" name="jgsang" placeholder="" >
      </div>
      <div class="form-group">
         <label for="nombre">Factor:</label>
         <input type="text" class="form-control" id="" name="jfac" placeholder="" >
      </div>

      <div class="form-group">
         <label for="nombre">Foto:</label>
         <input type="file" class="form-control" id="" name="jfoto" placeholder="" >
      </div> 
</div>
</div>



<div class="panel panel-primary">
<div class="panel-heading"><h3>Direccion</h3></div>
<div class="panel-body">

      <div class="form-group">
         <label for="nombre">Calle:</label>
         <input type="text" class="form-control" id="" name="jcalle" placeholder="" >
      </div>
        <div class="form-group">
         <label for="nombre">Numero:</label>
         <input type="text" class="form-control" id="" name="jnum" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Ciudad:</label>
         <input type="text" class="form-control" id="" name="jciu" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Piso:</label>
         <input type="text" class="form-control" id="" name="jpiso" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Dto.:</label>
         <input type="text" class="form-control" id="" name="jdto" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Telefono fijo:</label>
         <input type="text" class="form-control" id="" name="jtfijo" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Telefono celular:</label>
         <input type="text" class="form-control" id="" name="jtcel" placeholder="" >
      </div>
       
</div>
</div>



<div class="panel panel-primary">
<div class="panel-heading"><h3>Representante</h3></div>
<div class="panel-body">

 <div class="form-group">
         <label for="nombre">Apellido y nombres:</label>
         <input type="text" class="form-control" id="" name="rapenom" placeholder="" >
      </div> 
      <div class="form-group">
         <label for="nombre">Calle:</label>
         <input type="text" class="form-control" id="" name="rcalle" placeholder="" >
      </div>
        <div class="form-group">
         <label for="nombre">Numero:</label>
         <input type="text" class="form-control" id="" name="rnum" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Ciudad:</label>
         <input type="text" class="form-control" id="" name="rciu" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Piso:</label>
         <input type="text" class="form-control" id="" name="rpiso" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Dto.:</label>
         <input type="text" class="form-control" id="" name="rdto" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Telefono fijo:</label>
         <input type="text" class="form-control" id="" name="rtelf" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Telefono celular:</label>
         <input type="text" class="form-control" id="" name="rtelcel" placeholder="" >
      </div>
       
</div>
</div>



<div class="panel panel-primary">
<div class="panel-heading"><h3>Extranjero</h3></div>
<div class="panel-body">

 <div class="form-group">
         <label for="nombre">Pasaporte argentino:</label>
               <select class="form-control" name="jpasp" >
         <option>Si</option>
         <option>No</option>
         </select>
      </div> 
      <div class="form-group">
         <label for="nombre">Familiares en extranjero:</label>
         <select name="jfamext" class="form-control" >
         <option>Si</option>
         <option>No</option>
         </select>
      </div>
        <div name="jpaisext" class="form-group">
         <label for="nombre">Pais:</label>
         <input type="text" class="form-control" id="" name="" placeholder="" >
      </div>
        
       
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading"><h3>Datos familiares</h3></div>
<div class="panel-body">
      <h2>Padre</h2>
      <div class="form-group">
         <label for="nombre">Apellido y nombre:</label>
         <input type="text" class="form-control" id="" name="mapenom" placeholder="" >
      </div>
        <div class="form-group">
         <label for="nombre">Numero de documento:</label>
         <input type="text" class="form-control" id="" name="mdoc" placeholder="" >
      </div>
        
            <div class="form-group">
         <label for="nombre">Fecha de nacimiento:</label>
         <input type="text" class="form-control" id="" name="mfnac" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Lugar de nacimiento:</label>
         <input type="text" class="form-control" id="" name="mlnac" placeholder="" >
      </div>
      <div class="form-group">
         <label for="nombre">Nacionalidad:</label>
         <input type="text" class="form-control" id="" name="mnacio" placeholder="" >
      </div>

         <h2>Madre</h2>
      <div class="form-group">
         <label for="nombre">Apellido y nombre:</label>
         <input type="text" class="form-control" id="" name="papenom" placeholder="" >
      </div>
        <div class="form-group">
         <label for="nombre">Numero de documento:</label>
         <input type="text" class="form-control" id="" name="pnumdoc" placeholder="" >
      </div>
      
            <div class="form-group">
         <label for="nombre">Fecha de nacimiento:</label>
         <input type="text" class="form-control" id="" name="pfnac" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Lugar de nacimiento:</label>
         <input type="text" class="form-control" id="" name="plnac" placeholder="" >
      </div>
      <div class="form-group">
         <label for="nombre">Nacionalidad:</label>
         <input type="text" class="form-control" id="" name="pnacio" placeholder="" >
      </div>
</div>
</div>


<div class="panel panel-primary">
<div class="panel-heading"><h3>Datos de estudio</h3></div>
<div class="panel-body">
 
      <div class="form-group">
         <label for="nombre">Primario:</label>
         <input type="text" class="form-control" id="" name="jprim" placeholder="" >
      </div>
        <div class="form-group">
         <label for="nombre">Secundario:</label>
         <input type="text" class="form-control" id="" name="jsec" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Terciario/Universitario:</label>
         <input type="text" class="form-control" id="" name="jtec" placeholder="" >
      </div>
      <div class="form-group">
         <label for="nombre">Observaciones:</label>
         <input type="text" class="form-control" id="" name="jobsest" placeholder="" >
      </div>
    
</div>
</div>



<div class="panel panel-primary">
<div class="panel-heading"><h3>Datos de tecnicos y de origen</h3></div>
<div class="panel-body">
 
      <div class="form-group">
         <label for="nombre">Division de liga:</label>
         <input type="text" class="form-control" id="" name="jdivliga" placeholder="" >
      </div>
        <div class="form-group">
         <label for="nombre">Division de AFA:</label>
         <input type="text" class="form-control" id="" name="jdivafa" placeholder="" >
      </div>
            <div class="form-group">
         <label for="nombre">Club de origen:</label>
         <input type="text" class="form-control" id="" name="jclubo" placeholder="" >
      </div>
      <div class="form-group">
         <label for="nombre">Puesto:</label>
         <input type="text" class="form-control" id="" name="jpues" placeholder="" >
      </div>
      <div class="form-group">
         <label for="nombre">Puesto alternativo:</label>
         <input type="text" class="form-control" id="" name="jpuesalt" placeholder="" >
      </div>
     <div class="form-group">
         <label for="nombre">Altura:</label>
         <input type="text" class="form-control" id="" name="jalt" placeholder="" >
      </div>
     <div class="form-group">
         <label for="nombre">Peso:</label>
         <input type="text" class="form-control" id="" name="jpeso" placeholder="" >
      </div>
      <div class="form-group">
         <label for="nombre">Pie habil:</label>
               <select class="form-control" name="jpie" >
         <option>Derecho</option>
         <option>Zurdo</option>
         <option>Ambos</option>
         </select>
      </div> 
    
</div>
</div>


<div class="panel panel-primary">
<div class="panel-heading"><h3>Documentacion</h3></div>
<div class="panel-body">
 
      <div class="form-group">
         <label for="nombre">Subir archivo:</label>
         <input type="file" class="form-control" id="" name="archi" placeholder="" >
      </div>
        <div class="form-group">
         <label for="nombre">Subir video:</label>
         <input type="file" class="form-control" id="" name="video" placeholder="" >
      </div>
          
    
</div>
</div>
<!-- Button trigger modal -->
<button type="submit" class="btn btn-primary"  >
 Guardar
</button>

 </form>
<br/><br/>



<script>
var item = 0;
var total = 0;

function guardar(){
  alert("Base de datos en mantenimiento. Intente mas tarde");
  return;
}
//variables


$(document).ready(function(){
          $('.combobox').combobox()
        });


</script>

