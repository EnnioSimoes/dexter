<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Conteúdos</legend>
    
        <div class="btn-toolbar">
            <a href="admin.php?modulo=Conteudos&acao=inserir" class="btn"><i class="icon-plus"></i> <strong>Novo Conteúdo</strong></a>
        </div>    
    
        <div class="well">
            
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $dados as $conteudo): ?>
                        <tr>
                            <td><?php echo $conteudo->getId() ?></td>
                            <td><?php echo $conteudo->getTitulo() ?></td>
                            <td>
                                <a href="admin.php?modulo=Conteudos&acao=editar&id=<?php echo $conteudo->getId() ?>"><i class="icon-edit"></i> <strong>Editar</strong></a>
                                -
                                <a href="admin.php?modulo=Conteudos&acao=excluir&id=<?php echo $conteudo->getId() ?>"><i class="icon-trash"></i> <strong>Excluir</strong></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        
    </fieldset>
</form>
