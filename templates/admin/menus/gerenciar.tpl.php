<?php 
use Model\Perfis;
?>
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Menus</legend>
    
        <div class="btn-toolbar">
            <a href="admin.php?modulo=Menus&acao=inserir" class="btn"><i class="icon-plus"></i> <strong>Novo Menu</strong></a>
        </div>    
    
        <div class="well">
         
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descricao</th>
                        <th>Link</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $dados as $menus ): ?>
                        <tr>
                            <td><?php echo $menus->getId() ?></td>
                            <td><?php echo $menus->getDescricao() ?></td>
                            <td><?php echo $menus->getLink() ?></td>
                            <td><?php echo $menus->getPrf_Id() ?></td>
                            <td>
                                <a href="admin.php?modulo=Menus&acao=editar&id=<?php echo $menus->getId() ?>"><i class="icon-edit"></i> <strong>Editar</strong></a>
                                -
                                <a href="admin.php?modulo=Menus&acao=excluir&id=<?php echo $menus->getId() ?>"><i class="icon-trash"></i> <strong>Excluir</strong></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
 
        </div>
        
    </fieldset>
</form>
