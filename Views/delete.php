<h2>Estas seguro de eliminar a matricula <?php echo $_GET['matricula'] ?> ?</h2>
<form action="index.php?menu=delete" method="POST">
    <input type="text" value='<?php echo $_GET['matricula'] ?>' name="id" hidden>
    <a href="index.php" class="btn btn-outline-success">Regresar a inicio</a>|
    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
</form>