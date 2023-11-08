<?php var_dump($remates);
    die();
?>

<h1>Lista de Remates</h1>
<table style="border: 1px solid black;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre del Remate</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Lotes a subastar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($remates as $remate) : ?>
            <tr>
                <td><?php echo $remate['id_remate']; ?></td>
                <td><?php echo $remate['nombre_remate']; ?></td>
                <td><?php echo $remate['fecha']; ?></td>
                <td><?php echo $remate['horario']; ?></td>
                <td><?php echo " ".$remate['nombre_lote'] ; ?></td>
                <td>
              <a href="vista/detalle_remate.php?id_remate=$newRemateId">Ver detalles del remate</a>
                    <a href="princi.php?action=delete&id_remate=<?php echo $remate['id_remate']; ?>">Borrar</a>
                </td>
            
            
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
