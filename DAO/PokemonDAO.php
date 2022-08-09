<?php

class PokemonDAO
{
    private $conexao;

    function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    function insert(PokemonModel $model)
    {
        $sql = "INSERT INTO pokemon (nome, altura, peso, habilidades) VALUES (?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->altura);
        $stmt->bindValue(3, $model->peso);
        $stmt->bindValue(4, $model->habilidades);
        $stmt->execute();
    }

    public function update(PokemonModel $model)
    {
        $sql = "UPDATE pokemon SET nome=?, altura=?, peso=?, habilidades=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->altura);
        $stmt->bindValue(3, $model->peso);
        $stmt->bindValue(4, $model->habilidades);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM pokemon";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/PokemonModel.php';

        $sql = "SELECT * FROM pokemon WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PokemonModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE * FROM pokemon WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}