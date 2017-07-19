<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Banners</legend>
    
        <div class="btn-toolbar">
            <a href="admin.php?modulo=Banners&acao=inserir" class="btn"><i class="icon-plus"></i> <strong>Novo Banner</strong></a>
        </div>    
    
        <div class="well">
            
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descricao</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $dados as $banner ): ?>
                        <tr>
                            <td><?php echo $banner->getId() ?></td>
                            <td><?php echo $banner->getDescricao() ?></td>
                            <td>
                                <a href="admin.php?modulo=Banners&acao=editar&id=<?php echo $banner->getId() ?>"><i class="icon-edit"></i> <strong>Editar</strong></a>
                                -
                                <a href="admin.php?modulo=Banners&acao=excluir&id=<?php echo $banner->getId() ?>"><i class="icon-trash"></i> <strong>Excluir</strong></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        
    </fieldset>
</form>
