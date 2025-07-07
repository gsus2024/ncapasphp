<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <?php
            require_once '../logica/LFamilia.php';
            require_once '../logica/LCategoria.php';
        ?>
        <h1>Inserción de Productos</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeHolder="Nombre">
            <input type="text" name="txtSto" placeHolder="Stock">
            <input type="text" name="txtMon" placeHolder="Monto">

            <select name="cbxFam" id="cbxFam">
                <option>Seleccione Familia</option>
                <?php
                    $logFamilia=new LFamilia();
                    $familias=$logFamilia->cargar();
                    foreach($familias as $fam){
                ?>
                <option value="<?=$fam->getIdFamilia()?>"><?=$fam->getNombre()?></option>
                <?php
                    }
                ?>
            </select>

            <select name="cbxCat" id="cbxCat">
            </select>
        </form>
    </div>
</body>
</html>
<script>
    $('#cbxFam').change(function(){
        idfam=$('#cbxFam').val();
        param={'idfam':idfam};
        $.ajax({
            url:'respuestacategorias1.php',
            data:param,
            type:'get',
            success:function(res){
                $('#cbxCat').html(res);
            }
        });
    });
</script>