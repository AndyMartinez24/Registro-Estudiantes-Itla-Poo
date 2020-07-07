<div class="container">
    <h2>Agregar un nuevo estudiante</h2>
    <form action="index.php?menu=add" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nombre</label>
            <input name="Nombre" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input name="Apellido" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Carrera</label>
            <select name="Carrera" class="form-control">
                <option value="Redes">Redes</option>
                <option value="Software">Software</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Seguridad">Seguridad informática</option>
            </select>
        </div>
        <div class="form-group">
            <label>Materias Favoritas</label>
            <p>"Para registrar varias materias debes serpararlas con coma(,)"</p>
            <textarea class="form-control" name="Materias" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Foto de perfil</label>
            <input name="foto" size="30" type="file" class="form-control">
        </div>
        <div class="form-group form-check">
            <input name="Status" type="checkbox" class="form-check-input" checked hidden>
        </div>
        <button type="submit" class="btn btn-outline-primary">Registrar</button>|
        <a href="index.php" class="btn btn-outline-success">Regresar a inicio</a>
    </form>
</div>