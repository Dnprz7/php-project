<?php

class Producto
{
    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    function getId()
    {
        return $this->id;
    }

    function getUsuario_id()
    {
        return $this->usuario_id;
    }

    function getProvincia()
    {
        return $this->provincia;
    }

    function getLocalidad()
    {
        return $this->localidad;
    }

    function getDireccion()
    {
        return $this->direccion;
    }

    function getStock()
    {
        return $this->stock;
    }

    function getOferta()
    {
        return $this->oferta;
    }

    function getFecha()
    {
        return $this->fecha;
    }

    function getImagen()
    {
        return $this->imagen;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

    function setProvincia($provincia)
    {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    function setLocalidad($localidad)
    {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    function setdireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);
    }

    function setOferta($oferta)
    {
        $this->oferta = $this->db->real_escape_string($oferta);
    }

    function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getAll()
    {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
        return $productos;
    }

    public function getAllCategory()
    {
        $sql = "SELECT p.*, c.provincia AS 'catprovincia' FROM productos p "
            . "INNER JOIN categorias c ON c.id = p.usuario_id "
            . "WHERE p.usuario_id = {$this->getUsuario_id()} "
            . "ORDER BY id DESC";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getRandom($limit)
    {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");
        return $productos;
    }

    public function getOne()
    {
        $producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()}");
        return $producto->fetch_object();
    }

    public function save()
    {
        $sql = "INSERT INTO productos VALUES(NULL, {$this->getUsuario_id()}, '{$this->getProvincia()}', '{$this->getLocalidad()}', {$this->getDireccion()}, {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function edit()
    {
        $sql = "UPDATE productos SET provincia='{$this->getProvincia()}', localidad='{$this->getLocalidad()}', direccion={$this->getDireccion()}, stock={$this->getStock()}, usuario_id={$this->getUsuario_id()}  ";

        if ($this->getImagen() != null) {
            $sql .= ", imagen='{$this->getImagen()}'";
        }

        $sql .= " WHERE id={$this->id};";


        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function delete()
    {
        $sql = "DELETE FROM productos WHERE id={$this->id}";
        $delete = $this->db->query($sql);

        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }

}