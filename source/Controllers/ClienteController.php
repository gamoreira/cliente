<?php

namespace Source\Controllers;

use Source\Model\Cliente;
use Source\Core\Controller;

class ClienteController extends Controller {

    private $clientes;

    public function __construct() {
        $this->clientes = new Cliente();
    }

    public function home() {
        $data = $this->clientes->list();
        $this->loadTemplate('main', $data);
    }

    public function list() {
        $data = $this->clientes->list();
        return json_encode($data);
    }

    public function register(){
        $this->loadTemplate('cliente', array());
    }

    public function update($request, $response, $args){
        $data = $this->clientes->list($args['id']);
        $this->loadTemplate('cliente', $data);
    }

    public function save(){

        $result = array(
            "status" => false,
            "error" => "",
            "result" => ""
        );

        if(empty($_POST)){
            $result['error'] = "Erro ao cadastrar o cliente!";
            return json_encode($result);
        }

        $dados = array();
        $dados['id'] = isset($_POST['id']) ? addslashes($_POST['id']) : "";
        $dados['nome'] = isset($_POST['nome']) ? addslashes($_POST['nome']) : "";
        $dados['nascimento'] = isset($_POST['nascimento']) ? $_POST['nascimento'] : "";
        $dados['sexo'] = isset($_POST['sexo']) ? addslashes($_POST['sexo']) : "";
        $dados['cep'] = isset($_POST['cep']) ? addslashes($_POST['cep']) : "";
        $dados['endereco'] = isset($_POST['endereco']) ? addslashes($_POST['endereco']) : "";
        $dados['numero'] = isset($_POST['numero']) ? addslashes($_POST['numero']) : "";
        $dados['complemento'] = isset($_POST['complemento']) ? addslashes($_POST['complemento']) : "";
        $dados['bairro'] = isset($_POST['bairro']) ? addslashes($_POST['bairro']) : "";
        $dados['uf'] = isset($_POST['uf']) ? addslashes($_POST['uf']) : "";
        $dados['cidade'] = isset($_POST['cidade']) ? addslashes($_POST['cidade']) : "";

        if(empty($dados['nome'])){
            $result['error'] = "Campo obrigatório: Nome";
            return json_encode($result);
        }

        if(empty($dados['nascimento'])){
            $result['error'] = "Campo obrigatório: Nascimento";
            return json_encode($result);
        }

        if(empty($dados['sexo'])){
            $result['error'] = "Campo obrigatório: Sexo";
            return json_encode($result);
        }

        if(!$this->clientes->save($dados)){
            $result['error'] = empty($dados['id']) ? "Erro ao cadastrar o cliente!" : "Erro ao editar o cliente!";
            return json_encode($result);
        }
        
        $result['status'] = true;
        $result['result'] = "Cliente registrado com sucesso!";
        return json_encode($result);
    }   

    public function delete($request, $response, $args){

        $result = array(
            "status" => false,
            "error" => "",
            "result" => ""
        );

        if(empty($args['id'])) {
            $result['error'] = "Cliente não encontrado!";
            return json_encode($result);
        }

        if(!$this->clientes->delete($args['id'])){
            $result['error'] = "Erro ao remover o cliente!";
            return json_encode($result);
        }
        
        $result['status'] = true;
        $result['result'] = "Cliente removido com sucesso! ";
        return json_encode($result);
    }
}