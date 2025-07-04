<?php
    class DB{
        private $url='pgsql:host=127.0.0.1;port=5433;dbname=ventasweb';
        private $user='postgres';
        private $password='123';
        public function conectar(){
            $cn=new PDO($this->url,$this->user,$this->password);
            return $cn;
        }
    }
?>