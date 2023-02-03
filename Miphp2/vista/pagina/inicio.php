
<?php

if(!isset($_SESSION["validarIngreso"])){

echo '<script> window.location = "index.php?pagina=ingreso";<script>';


return;

}else{
/* si hay que nos lleve al inicio */

if($_SESSION["validarIngreso"] !="ok") {

echo '<script> window.location = "index.php?pagina=inicio";<script>';

return;
  }
}

$usurio = ControladorRegistro::ctrSelecionarRegistro(null,null);
// echo '<pre>'; print_r($usurio); echo '</pre>'

?>
<div class="text-center">
  <img src="https://altruistas.org/wp-content/uploads/2020/03/Programacion-en-PHP-altruistas.jpg" width="300px">
</div>

<div class="container-fluid">
	<div class="container py-5">

		<table class="table table-striped">
		<thead>
		 <tr>
        <th>#</th>
        <th>Nombre Pc</th>
        <th>Modelo</th>
        <th>Precio</th>
        <th>Color</th>
        <th>Acciones</th>
      </tr>
    </thead>

    <tbody>

      <?php foreach ($usurio as $key => $value): ?>
        <tr>
        <td><?php echo ($key+1); ?></td>
        <td><?php echo $value["nombre_pc"]; ?></td>
         <td><?php echo $value["modelo"]; ?></td>
         <td><?php echo $value["precio"]; ?></td>
         <td><?php echo $value["color"]; ?></td>
        <td>
     <div class="d-flex py-2">

      <div class="mt-6">

         <a href="index.php?pagina=actualizar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>
         </a>

       </div>

        
       <form method="post">

     <!---Eliminar Registro-->

     <input type="hidden" value="<?php echo $value["id"]; ?>" name="EliminarRegistro">

      <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

      </td>

      </tr>

      <?php 


      //la petición al controlador 

      $eliminar = new ControladorRegistro();
      $eliminar -> ctrEliminar();

      if ($eliminar === "ok") {

        echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';  

			echo '<script>

               setTimeout(function(){

               	window.location = "index.php?pagina=inicio";

               },3000);

		   </script>';

      }
     
     ?>

  </div>

</form>

   </td>
   </tr>
      <?php endforeach ?>
      
    </tbody>
</table>