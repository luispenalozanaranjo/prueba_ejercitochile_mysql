<h1 class="page-header">Listado de Usuarios PHP - PDO + MVC</h1>
<p>Informacion Usuarios Actuales del Ejercito</p>


    <a class="btn btn-primary pull-right" href="?c=usuario&a=Crud">Agregar</a>
<br><br><br>
<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Nombres</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Rut</th>
			<th style="background-color: #5DACCD; color:#fff">Correo Electronico</th>
			<th style="background-color: #5DACCD; color:#fff">Dirección Personal</th>
            <th style="background-color: #5DACCD; color:#fff">Genero</th>
            <th style="background-color: #5DACCD; color:#fff">Estado</th>       
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->NOMBREUSUARIO.' '.$r->APELLIDOUSUARIO; ?></td>
            <td><?php echo $r->RUTUSUARIO; ?></td>
			<td><?php echo $r->MAILUSUARIO; ?></td>
            <td><?php echo $r->DIRECCIONUSUARIO; ?></td>
            <td><?php echo $r->GENEROUSUARIO; ?></td>
            <td><?php echo $r->ESTADOUSUARIO; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=usuario&a=Crud&IDUSUARIO=<?php echo $r->IDUSUARIO; ?>">Editar</a>
			</td>
            <td>
			<?php if($r->ESTADOUSUARIO=='Activo'){ ?>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Desea Desactivar este Registro?');" href="?c=usuario&a=Eliminar&IDUSUARIO=<?php echo $r->IDUSUARIO; ?>">Desactivar</a>
            <?php } else {?>
			   <a  class="btn btn-danger" onclick="javascript:return confirm('¿Desea Eliminar este Registro?, Si realiza esta accion, quedara guardado en la base de datos y cuando desea recuperarlo, tendra que consultar con el encargado informatico');" href="?c=usuario&a=Ocultar&IDUSUARIO=<?php echo $r->IDUSUARIO; ?>">Eliminar</a>
			<?php } ?>
			</td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
