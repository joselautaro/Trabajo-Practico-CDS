<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción de datos</title>
</head>
<body>
<!-- Se declaran las variables -->
<?php
$dia = $_POST['fecha'];
$nombre = $_POST['nombre'];
$porcentaje = $_POST['impuesto'];
$numero_de_codigo = $_POST['codigo1'];
$numero_de_codigo = $_POST['codigo2'];
$nombre_de_descripcion_uno = $_POST['descripcion1'];
$nombre_de_descripcion_dos = $_POST['descripcion2'];
$cantidad_uno = $_POST['cantidad1'];
$cantidad_dos = $_POST['cantidad2'];
$precio_uno = $_POST['precio1'];
$precio_dos = $_POST['precio2'];
// Se generan los algoritmos
$primer_cantidad_total = $cantidad_uno + $cantidad_dos;
$segunda_cantidad_total = $cantidad_uno+ $cantidad_dos;
$precio_neto = $primer_cantidad_total + $segunda_cantidad_total;
$valor_de_impuestos = $porcentaje * $precio_neto;
$precio_total = $precio_neto + $valor_de_impuestos;
?>

<!-- Se genera la tabla a desarrollar -->
<fieldset>
    <legend>Recepción de formulario</legend>
    <table>
        <tr>
        <td>Fecha: </td>
        <td><?php echo $_POST['fecha']; ?></td>
        </tr>
        <tr>
        <td>Nombre: </td>
        <td><?php echo $_POST['nombre']; ?></td>
        </tr>
        <tr>
            <td>Impuesto:</td>
            <td><?php echo $_POST['impuesto']?></td>
        </tr>
        <td>Detalle: </td>
        <tr>
            <td>Código</td>
            <td>Descripción</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>Total</td>
        </tr>
        <tr>
            <td><?php echo $_POST['codigo1'];?></td>
            <td><?php echo $_POST['descripcion1'];?></td>
            <td><?php echo $_POST['cantidad1'];?></td>
            <td><?php echo $_POST['precio1'];?></td>
            <td><?php echo $primer_cantidad_total ?></td>
        </tr>
        <tr>
            <td><?php echo $_POST['codigo2'];?></td>
            <td><?php echo $_POST['descripcion2'];?></td>
            <td><?php echo $_POST['cantidad2'];?></td>
            <td><?php echo $_POST['precio2'];?></td>
            <td><?php echo $segunda_cantidad_total ?></td>
        </tr>
        <tr>
            <td><?php echo $precio_total ?></td>
        </tr>
    </table>
</fieldset>
    
</body>
</html>
