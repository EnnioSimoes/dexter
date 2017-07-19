<form action="" method="POST" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Editar Cliente</legend>
    
        <div class="control-group">
            <label class="control-label">Nome / Razão Social:</label>
            <div class="controls">
                <input name="nome_razao" value="<?php echo $dados->getNome_Razao() ?>" class="input-xlarge" type="text">
            </div>
        </div>
            
        <div class="control-group">
            <label class="control-label">CPF / CNPJ:</label>
            <div class="controls">
                <input name="cpf_cnpj" value="<?php echo $dados->getCpf_Cnpj() ?>" class="input-xlarge" type="text">
            </div>
        </div>
            
        <div class="control-group">
            <label class="control-label">E-mail:</label>
            <div class="controls">
                <input name="email" value="<?php echo $dados->getEmail() ?>" class="input-xlarge" type="text">
            </div>
        </div>
            
        <div class="control-group">
            <label class="control-label">Telefone:</label>
            <div class="controls">
                <input name="telefone" value="<?php echo $dados->getTelefone() ?>" class="input-xlarge" type="text">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label"></label>
            <div class="controls">
                <button class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </fieldset>
</form>
