<?php

namespace Model;


abstract class AbstractManager
{
    protected $pdo;
    protected $table;
    protected $className;

    public function __construct($table, $pdo){
        $this->pdo = $pdo;
        $this->table = $table;
        $this->className = __NAMESPACE__ . '\\' . ucfirst($table);
    }

    public function selectAll(){
        return $this->pdo->query('SELECT * FROM ' . $this->table, \PDO::FETCH_CLASS, $this->className)->fetchAll();
    }

    public function selectOneById($id){
        $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=:id"); //On passe une requête préparée
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className); //setFetchMode() nécessaire pour indiquer la classe liée au FETCH_CLASS
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(); //On utilise fetch() au lieu de fetchAll()
    }
}