<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Remate</title>
</head>
<body>
    <h1>¿Seguro que deseas eliminar este remate?</h1>
    <p>ID Remate: <?= $remate['id_remate'] ?></p>
    <p>Nombre del Remate: <?= $remate['nombre_remate'] ?></p>
    <p>Fecha: <?= $remate['fecha'] ?></p>
    <p>Hora: <?= $remate['hora'] ?></p>
    <form action="index.php?action=delete" method="post">
        <input type="hidden" name="id_remate" value="<?= $remate['id_remate'] ?>">
        <input type="submit" value="Eliminar">
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>
