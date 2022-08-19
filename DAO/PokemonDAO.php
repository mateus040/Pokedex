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
                (nome, descricao, imagem, id_categoria) 
                VALUES (?, ?, ?, ?)";
        

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->imagem);
        $stmt->bindValue(4, $model->id_categoria);

        
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT p.id, p.nome, p.descricao, c.descricao AS categoria, p.imagem
                FROM pokemon p
                JOIN categoria c ON (c.id = p.id_categoria)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(PokemonModel $model)
    {
        $sql = "UPDATE pokemon SET nome=?, descricao=?, imagem=?, id_categoria=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->imagem);
        $stmt->bindValue(4, $model->id_categoria);
        $stmt->bindValue(5, $model->id);


        $stmt->execute();
    }

    public function selectById(int $id)
    {
        $sql = "SELECT p.id, p.nome, p.descricao, c.descricao AS categoria, p.imagem
                FROM pokemon p
                JOIN categoria c ON (c.id = p.id_categoria)
                WHERE p.id=?";

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