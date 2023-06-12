<?php
// Fichier: models/AbstractModel.php

abstract class AbstractModel {

    protected $pdo;
    protected $table;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function findAll() {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute([':id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $query->execute([':id' => $id]);
    }

    // $data est un tableau associatif de valeurs à mettre à jour, où les clés sont les noms des colonnes
    public function update($id, $data) {
        $fields = '';
        foreach($data as $key => $value) {
            $fields .= $key . ' = :' . $key . ', ';
        }
        $fields = rtrim($fields, ', ');

        $query = $this->pdo->prepare("UPDATE {$this->table} SET {$fields} WHERE id = :id");

        // Ajoute l'ID à la liste des données
        $data['id'] = $id;
        return $query->execute($data);
    }

    public function save($data) {
        $fields = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $query = $this->pdo->prepare("INSERT INTO {$this->table} ({$fields}) VALUES ({$values})");
        return $query->execute($data);
    }
}
