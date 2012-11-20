  <blockquote>
    
    <p><strong><?php echo $titulo;?></strong></p>
  </blockquote>
<div align="center">
  <?php
	$atributos = array('id' => 'clientes_c_form_cambia');
    echo form_open('catalogo/cambia_cliente_datos', $atributos);
    $data_nom = array(
              'name'        => 'nom',
              'id'          => 'nom',
              'value'       => $nom,
              'maxlength'   => '70',
              'size'        => '50',
              'autofocus'   => 'autofocus'
            );
            $data_dir = array(
              'name'        => 'dir',
              'id'          => 'dir',
              'value'       => $dir,
              'maxlength'   => '100',
              'size'        => '50'
            );
             $data_num = array(
              'name'        => 'num',
              'id'          => 'num',
              'value'       => $num,
              'maxlength'   => '50',
              'size'        => '50',
              
            );
             $data_int = array(
              'name'        => 'int',
              'id'          => 'int',
              'value'       => $int,
              'maxlength'   => '50',
              'size'        => '50',
              
            );
            $data_col = array(
              'name'        => 'col',
              'id'          => 'col',
              'value'       => $col,
              'maxlength'   => '50',
              'size'        => '50'
            );
            $data_pob = array(
              'name'        => 'pob',
              'id'          => 'pob',
              'value'       => $pob,
              'maxlength'   => '50',
              'size'        => '50'
            );
            $data_cp = array(
              'name'        => 'cp',
              'id'          => 'cp',
              'value'       => $cp,
              'maxlength'   => '6',
              'size'        => '6'
            );
            $data_tcas = array(
              'name'        => 'tcas',
              'id'          => 'tcas',
              'value'       => $tcas,
              'maxlength'   => '18',
              'size'        => '18'
            );
            $data_ttra = array(
              'name'        => 'ttra',
              'id'          => 'ttra',
              'value'       => $ttra,
              'maxlength'   => '18',
              'size'        => '18'
            );
            $data_tcel = array(
              'name'        => 'tcel',
              'id'          => 'tcel',
              'value'       => $tcel,
              'maxlength'   => '18',
              'size'        => '18'
            );
  ?>
  
  <table>
   <tr>
 <tr>
	<td>Nombre del cliente: </td>
	<td><?php echo form_input($data_nom, "", 'required');?><span id="mensaje"></span></td>
	<td>Direccion: </td>
	<td><?php echo form_input($data_dir, "", 'required');?><span id="mensaje"></span></td>
</tr>
 <tr>
	<td>Numero exterior </td>
	<td><?php echo form_input($data_num);?><span id="mensaje"></span></td>
	<td>Numero interior: </td>
	<td><?php echo form_input($data_int);?><span id="mensaje"></span></td>
</tr>
 <tr>
	<td>Colonia </td>
	<td><?php echo form_input($data_col);?><span id="mensaje"></span></td>
	<td>Poblacion: </td>
	<td><?php echo form_input($data_pob);?><span id="mensaje"></span></td>
</tr>
 <tr>
    
	<td colspan="4">C.P:  <?php echo form_input($data_cp);?><span id="mensaje"></span></td>
</tr>
 <tr>
 <td align="center" colspan="4"><strong><?php echo	"TELEFONOS"?></strong></td>
 </tr>
 <tr>
    <td>Casa </td>
	<td><?php echo form_input($data_tcas, "");?><span id="mensaje"></span></td>
	<td>Trabajo:<?php echo form_input($data_ttra);?><span id="mensaje"></span></td>
    <td> Celular<?php echo form_input($data_tcel);?><span id="mensaje"></span></td>
</tr>
<tr>
	<td>Tipo:</td>
    <td> <?php echo form_dropdown('tipo',array('1'=>'Activo','0'=>'Inactivo'),$tipo)?></td>
</tr>

	<td colspan="6"><?php echo form_submit('envio', 'CAMBIAR CLIENTE');?></td>
 </tr>
</table>
<input type="hidden" value="<?php echo $id?>" name="id" id="id" />
  <?php
	echo form_close();
  ?>
<table align="center">
<tr>
	<td><?php echo $tabla;?></td>
</tr>
</table>

</div>    
  <script language="javascript" type="text/javascript">
    $(window).load(function () {
        $("#nom").focus();
    });
    
    $(document).ready(function(){
    
 
 $(':input').keyup(
        function()
        {
            $(this).val($(this).attr("value").toUpperCase());
        }
    );   


    $('#clientes_c_form_cambia').submit(function() {
        
        var nom = $('#nom').attr("value");
        var dir = $('#dir').attr("value");
    	  if(nom.length > 0 && dir.length > 0){
    	    if(confirm("Seguro que los datos son correctos?")){
    	    return true;
    	    }else{
    	    return false;
    	    }
    	    
    	  }else{

    	    alert('Verifica la informacion por favor');
    	    $('#nom').focus();
    	    return false    

    	        }
    	  });
          
          
        
     
});
  </script>