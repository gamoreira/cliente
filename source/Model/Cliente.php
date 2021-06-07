<?php

namespace Source\Model;

use Source\Core\Model;

Class Cliente extends Model {

    private $id;
    private $nome;
    private $nascimento;
    private $sexo;
    private $cep;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $estado;
    private $cidade;

    public function __construct() {
        parent::__construct();
    }

    public function list($id = "") {
        $sql = "SELECT id, Nome, DATE_FORMAT(Nascimento,'%d/%m/%Y') AS Nascimento, Nascimento AS Data, 
                IF(Sexo = 'M', 'Masculino', 'Feminino') AS Sexo, CEP, Endereco, Numero, Complemento, Bairro, UF, Cidade FROM Clientes ";
        $sql .= !empty($id) ? "WHERE id = '$id' " : "" ;
        $sql .= " ORDER BY id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function save($dados){
        if(empty($dados['id'])){
            $sql = "INSERT INTO Clientes (Nome, Nascimento, Sexo, CEP, Endereco, Numero, Complemento, Bairro, UF, Cidade) VALUES 
            ('{$dados['nome']}', '{$dados['nascimento']}', '{$dados['sexo']}', '{$dados['cep']}', '{$dados['endereco']}', '{$dados['numero']}',
            '{$dados['complemento']}', '{$dados['bairro']}', '{$dados['uf']}', '{$dados['cidade']}')";
        }else{
            
            $sql = "UPDATE Clientes SET 
                        Nome = '{$dados['nome']}',
                        Nascimento = '{$dados['nascimento']}',
                        Sexo = '{$dados['sexo']}',
                        CEP = '{$dados['cep']}',
                        Endereco = '{$dados['endereco']}',
                        Numero = '{$dados['numero']}',
                        Complemento = '{$dados['complemento']}',
                        Bairro = '{$dados['bairro']}',
                        UF = '{$dados['uf']}',
                        Cidade = '{$dados['cidade']}'
                    WHERE
                        id = '{$dados['id']}' LIMIT 1";
        }
        $query = $this->db->prepare($sql);
        return $query->execute() ? true : false;
    }

    public function delete($id){
        $sql = "DELETE FROM Clientes WHERE id = '$id' LIMIT 1";
        $query = $this->db->prepare($sql);
        return $query->execute() ? true : false;
    }
}