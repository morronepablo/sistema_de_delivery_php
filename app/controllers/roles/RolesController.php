<?php

class RolesController
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname=".BD.";host=".SERVIDOR, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    }

    public function listado_de_roles()
    {

    }

    public function datos_rol($id)
    {
        $sql = "SELECT * FROM roles WHERE id_rol = '$id' ";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $rol = $query->fetch(PDO::FETCH_ASSOC);
        return $rol;
    }
}