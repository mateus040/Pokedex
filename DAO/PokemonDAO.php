<?php


class PokemonDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    function insert(PokemonModel $model) 
    { 
        $sql = "INSERT INTO pokemon
                (nome, descricao, imagem) 
                VALUES (?, ?, ?)";
        

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->imagem);
        
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM pokemon ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(PokemonModel $model)
    {
        $sql = "UPDATE pokemon SET nome=?, descricao=?, imagem=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->imagem);
        $stmt->bindValue(4, $model->id);


        $stmt->execute();
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM pokemon WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PokemonModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM pokemon WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        
        $stmt->execute();
    }
}