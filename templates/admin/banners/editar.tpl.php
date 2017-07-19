<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->
        <legend>Editar Banner</legend>
    
        <div class="control-group">
            <label class="control-label">Descricao:</label>
            <div class="controls">
                <input name="descricao" value="<?php echo $dados->getDescricao() ?>" class="input-xlarge" type="text">
            </div>
        </div>
            
        <div class="control-group">
            <label class="control-label">Imagem:</label>
            <div class="controls">
		          <input class="span4" type="text" name="imagem" value="<?php echo $dados->getImagem() ?>"/>
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
