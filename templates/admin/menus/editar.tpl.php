<form action=""  method="POST" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Editar Menu</legend>
                
        <div class="control-group">
            <label class="control-label">Descrição:</label>
            <div class="controls">
                <input name="descricao" value="<?php echo $dados->getDescricao() ?>" class="input-xlarge" type="text">
            </div>
        </div>
                
        <div class="control-group">
            <label class="control-label">Perfil:</label>
            <div class="controls">
                <select class="span2" name="prf_id">
        		    <option value="<?php echo $dados->getPrf_Id() ?>">
        		    		<?php echo $dados->getPrf_Id() ?>
        		    </option>
     				<option value="admin">
        		    		admin
        		    </option>
        	    </select>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">Link:</label>
            <div class="controls">
                <input name="link" value="<?php echo $dados->getLink() ?>" class="input-xlarge" type="text">
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
