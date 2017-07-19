<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Clientes</legend>
    
        <div class="btn-toolbar">
            <a href="admin.php?modulo=Clientes&acao=inserir" class="btn"><i class="icon-plus"></i> <strong>Novo Cliente</strong></a>
        </div>    
    
        <div class="well">
            
            <table class="table">
                <thead>
                    <tr>
						<th>#</th>
                        <th>Nome / Razão Social</th>
                        <th>CPF / CNPJ</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $dados as $cliente ): ?>
                        <tr>
                            <td><?php echo $cliente->getId() ?></td>
							<td><?php echo $cliente->getNome_Razao() ?></td>
                            <td><?php echo $cliente->getCpf_Cnpj() ?></td>
                            <td><?php echo $cliente->getEmail() ?></td>
                            <td><?php echo $cliente->getTelefone() ?></td>
                            <td>
                                <a href="admin.php?modulo=Clientes&acao=editar&id=<?php echo $cliente->getId() ?>"><i class="icon-edit"></i> <strong>Editar</strong></a>
                                -
                                <a href="admin.php?modulo=Clientes&acao=excluir&id=<?php echo $cliente->getId() ?>"><i class="icon-trash"></i> <strong>Excluir</strong></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        
    </fieldset>
</form>
