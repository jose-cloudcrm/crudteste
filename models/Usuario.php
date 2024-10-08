<?php
class Usuario {
    private $id;
    private $name;
    private $email;

    public function getId() {
        return $this->id;
    }
    public function setId($i){
        $this->id = trim($i);
    }

    public function getNome() {
        return $this->name;
    }
    public function setNome($n){
        $this->name = ucwords(trim($n));
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($e) {
        $this->email = strtolower(trim($e));
    }
}

interface UsuarioDAO {
    public function add(Usuario $u);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
}