<?php
    require_once '../datos/DB.php';
    require_once '../interfaces/IProducto.php';
    class LProducto implements IProducto{
        public function guardar(Producto $producto){
            $db=new DB();
            $cn=$db->conectar();
            $sql="insert into producto (nombre, stock, monto, idcategoria) values (:nom, :sto, :mon, :idcat)";
            $ps=$cn->prepare($sql);
            $ps->bindParam(":nom", $producto->getNombre());
            $ps->bindParam(":sto", $producto->getStock());
            $ps->bindParam(":mon", $producto->getMonto());
            $ps->bindParam(":idcat", $producto->getIdCategoria());
            $ps->execute();
        }
        public function cargar(){
            $db=new DB();
            $cn=$db->conectar();
            $sql="select * from producto";
            $ps=$cn->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $productos=array();
            foreach($filas as $f){
                $prod=new Producto();
                $prod->setIdProducto($f[0]);
                $prod->setNombre($f[1]);
                $prod->setStock($f[2]);
                $prod->setMonto($f[3]);
                $prod->setIdCategoria($f[4]);
                array_push($productos, $prod);
            }
            return $productos;
        }
    }
?>