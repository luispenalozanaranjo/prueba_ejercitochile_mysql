<h1 class="page-header">
    <?php echo $usuario->IDUSUARIO != null ? $usuario->NOMBREUSUARIO : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=usuario">usuario</a></li>
  <li class="active"><?php echo $usuario->IDUSUARIO != null ? $usuario->NOMBREUSUARIO : 'Nuevo Registro'; ?></li>
</ol>

<?php if($usuario->IDUSUARIO != null){ echo "<ol class='breadcrumb importante'>NOTA IMPORTANTE = SI VAS A EDITAR ESTE REGISTRO Y ESTA INACTIVO, AL GUARDAR LOS CAMBIOS CAMBIARA DE ESTADO A ACTIVO</ol>";} ?>

<form id="frm-alumno" action="?c=usuario&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="IDUSUARIO" value="<?php echo $usuario->IDUSUARIO; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="NOMBREUSUARIO" value="<?php echo $usuario->NOMBREUSUARIO; ?>" class="form-control" placeholder="Ingrese su nombre" onkeypress="return soloLetras(event)">
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="APELLIDOUSUARIO" value="<?php echo $usuario->APELLIDOUSUARIO; ?>" class="form-control" placeholder="Ingrese su apellido" onkeypress="return soloLetras(event)">
    </div>
	
	<div class="form-group">
        <label>Rut</label>
        <input type="text" name="RUTUSUARIO" value="<?php echo $usuario->RUTUSUARIO; ?>" class="form-control" placeholder="Ingrese su Rut" maxlength="10">
    </div>
	
	<div class="form-group">
        <label>E-Mail</label>
        <input type="text" name="MAILUSUARIO" id="MAILUSUARIO" value="<?php echo $usuario->MAILUSUARIO; ?>" class="form-control" placeholder="Ingrese su Correo Electronico" onkeypress="return mail(event)">
    </div>
	
	<div class="form-group">
        <label>Dirección</label>
        <input type="text" name="DIRECCIONUSUARIO" value="<?php echo $usuario->DIRECCIONUSUARIO; ?>" class="form-control" placeholder="Ingrese su Direccion Personal" onkeypress="return validarDireccion(event)">
    </div>
    
    <div class="form-group">
        <label>Genero</label>
        <select name="GENEROUSUARIO" class="form-control" required>
				<option value="">Seleccione su Genero</option>
		                       <?php 
                        foreach( $genero as $g ){
							if($g->NOMBREGENERO == $usuario->GENEROUSUARIO)
							$sel = 'selected';
							else
							$sel = '';
                        ?>
                        <option value="<?php echo $g->NOMBREGENERO;?>" <?php echo $sel;?>><?php echo $g->NOMBREGENERO;?></option>
                        <?php 
                        }
                        ?>
		</select>
    </div>
        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
