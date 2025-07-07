<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Módulo de Productos</h1>
        <hr>
        <a href="guardarproducto.php">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Monto</th>
                    <th>IdCategoria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once '../logica/LProducto.php';
                    $log=new LProducto();
                    $productos=$log->cargar();
                    foreach($productos as $prod){
                ?>
                <tr>
                    <td><?=$prod->getIdProducto()?></td>
                    <td><?=$prod->getNombre()?></td>
                    <td><?=$prod->getStock()?></td>
                    <td><?=$prod->getMonto()?></td>
                    <td><?=$prod->getIdCategoria()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>