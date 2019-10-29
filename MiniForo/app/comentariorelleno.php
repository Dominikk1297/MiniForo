<?php 
$tema=$_REQUEST['tema'];
$comentario1=$_REQUEST['comentario1'];
?>
<form name="comentariorelleno" method="get">
Tema:<br>
<textarea name="tema"><?php echo $tema;?></textarea><br>
Comentario:<br>
<textarea name="comentario1"><?php echo $comentario1;?></textarea><br>
<input type="submit" name="orden" value="Detalles">
<input type="submit" name="orden" value="Nueva opinión">
<input type="submit" name="orden" value="Terminar">
</form>



