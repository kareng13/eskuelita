<?php
require_once("../lib/functions.php");
$alumnos = get_all_alumnos($connect)
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela | Alumnos </title>
</head>
<body>
<h1> Alumnos <small> <a href ="formulario.php"> Agregar alumno </a></small></h1>
    <table>
        <thead>
            <tr>
                <th> id </th>
                <th> nombre </th>
                <th> apellido </th>
                <th> telefono </th>
                <th> correo </th>
                <th> licenciatura</th>
                <th> cuatrimestre </th>
                <th> status </th>
</thead>
</tr>
<tbody>
    <?php
    while ($fila = mysqli_fetch_array($alumnos)){
        ?>
        <tr>
            <td><?php echo $fila ["id"]; ?> </td>
            <td><?php echo $fila ["nombre"]; ?> </td>
            <td><?php echo $fila ["apellido"]; ?> </td>
            <td><?php echo $fila ["telefono"]; ?> </td>
            <td><?php echo $fila ["correo"]; ?> </td>
            <td><?php echo $fila ["licenciatura"]; ?> </td>
            <td><?php echo $fila ["cuatrimestre"]; ?> </td>
            <td><?php echo $fila ["status"]; ?> </td>
            <td><a href = "detail.php?id=<?php echo $fila ['id']; ?>"> Detalle </a></td>
            <td><a href = "formulario_update.php?id=<?php echo $fila ['id']; ?>"> Editar </a></td>
            <td><a href = "eliminar_query.php?id=<?php echo $fila ['id']; ?>"> Eliminar </a></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</body>
</html>
