<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Funcionários</legend>
    
        <div class="btn-toolbar">
            <a href="admin.php?modulo=Funcionarios&acao=inserir" class="btn"><i class="icon-plus"></i> <strong>Novo Funcionário</strong></a>
        </div>    
    
        <div class="well">
           
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Perfil</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $dados as $funcionario ): ?>
                        <tr>
                            <td><?php echo $funcionario->getId() ?></td>
                            <td><?php echo $funcionario->getNome() ?></td>
                            <td><?php echo $funcionario->getPrf_Id() ?></td>
                            <td><?php echo $funcionario->getEmail() ?></td>
                            <td><?php echo $funcionario->getSenha() ?></td>
                            <td>
                                <a href="admin.php?modulo=Funcionarios&acao=editar&id=<?php echo $funcionario->getId() ?>"><i class="icon-edit"></i> <strong>Editar</strong></a>
                                -
                                <a href="admin.php?modulo=Funcionarios&acao=excluir&id=<?php echo $funcionario->getId() ?>"><i class="icon-trash"></i> <strong>Excluir</strong></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    </fieldset>
</form>
