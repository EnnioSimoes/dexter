<form action="" method="POST" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Editar Conteúdo</legend>
    
        <div class="control-group">
            <label class="control-label">Título:</label>
            <div class="controls">
                <input name="titulo" value="<?php echo $dados->getTitulo() ?>" class="input-xlarge" type="text">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">Texto:</label>
            <div class="controls">
                <textarea rows="10" name="texto" style="width: 550px"><?php echo $dados->getTexto() ?></textarea>
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
