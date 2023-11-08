<form method="POST" action="princi.php?action=update">
    <label for="nombre_remate">Nombre del Remate</label>
    <input type="text" name="nombre_remate" required>
    
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" required>
    <label for="hora">Hora</label>
    <input type="time" name="horario" required>
    <label for="descripcion">Descripcion del remate</label>
    <input type="text" placeholder="ingrese la descripcion" name="descripcion" >
    <label for="id_lote">Lotes Disponibles</label>
    <select name="id_lote" required>
        <option value="">Seleccione un lote</option>
        <?php foreach ($lotes as $lote) : ?>
            <option value="<?= $lote['id_lote']; ?>"><?= $lote['nombre_lote']; ?></option>
        <?php endforeach; ?>
    </select>
    
    <button type="submit">Actualizar</button>
</form>
