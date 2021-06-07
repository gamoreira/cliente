<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Cadastro de Clientes</h4>
        </div>
        
        <form id="form" class="form" role="form" action="<?php echo BASE_URL ?>/register" method="post">
            <div class="card-body">
                <div class="row"> 

                    <div class="col-1">
                        <label for="id" class="form-label">Código</label>
                        <input type="text" class="form-control" id="id" name="id" value="<?= !empty($data[0]['id']) ? $data[0]['id'] : ""; ?>" readonly>
                    </div>

                    <div class="col-5">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?= !empty($data[0]['Nome']) ? $data[0]['Nome'] : ""; ?>">
                    </div>

                    <div class="col-4">
                        <label for="nascimento" class="form-label">Nascimento</label>
                        <input type="date" class="form-control" name="nascimento" id="nascimento" value="<?= !empty($data[0]['Data']) ? $data[0]['Data'] : ""; ?>">
                    </div>

                    <div class="col-2">
                        <label for="nascimento" class="form-label">Sexo</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="M" id="sexo" <?= !empty($data[0]['Sexo']) && $data[0]['Sexo'] == "Masculino" ? "checked" : "";  ?>> 
                            <label class="form-check-label" for="sexo">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="F" id="sexo2" <?= !empty($data[0]['Sexo']) && $data[0]['Sexo'] == "Feminino" ? "checked" : "";  ?>>
                            <label class="form-check-label" for="sexo2">Feminino</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" value="<?= !empty($data[0]['CEP']) ? $data[0]['CEP'] : ""; ?>">
                    </div>

                    <div class="col-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" value="<?= !empty($data[0]['Endereco']) ? $data[0]['Endereco'] : ""; ?>">
                    </div>

                    <div class="col-1">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" name="numero" id="numero" value="<?= !empty($data[0]['Numero']) ? $data[0]['Numero'] : ""; ?>">
                    </div>

                    <div class="col-3">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" name="complemento" id="complemento" value="<?= !empty($data[0]['Complemento']) ? $data[0]['Complemento'] : ""; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" value="<?= !empty($data[0]['Bairro']) ? $data[0]['Bairro'] : ""; ?>">
                    </div>

                    <div class="col-2">
                        <label for="uf">Estado</label>
                        <input type="text" class="form-control" style="text-transform:uppercase" maxlength="2" name="uf" id="uf" value="<?= !empty($data[0]['UF']) ? $data[0]['UF'] : ""; ?>">
                    </div>

                    <div class="col-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" value="<?= !empty($data[0]['Cidade']) ? $data[0]['Cidade'] : ""; ?>">
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-sm btn-primary"><i class="fa fa-chevron-circle-down"></i> Salvar</button>
                <a href="<?php echo BASE_URL ?>"  class="btn btn-sm btn-outline-dark"> Voltar</a>
            </div>
        </form>
    </div>
</div>