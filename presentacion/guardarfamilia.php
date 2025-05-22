<?php
    require '../logica/LFamilia.php';
    $fam=new Familia();
    $fam->setNombre("aaa");
    $fam->setDescripcion("bbb");
    $log=new LFamilia();
    $log->guardar($fam);
    echo 'DATOS GUARDADOS';
?>