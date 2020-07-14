<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Usuários Cadastrados</h2>
    </div>
    <a href="#">
        <div class="p-2">

            <?= $this->Html->link(__('Cadastrar'), ['controller' => 'users', 'action' => 'add'], [
                'class ' => 'btn btn-outline-success btn-sm'
            ]);
            ?>
            <!-- o html-> link server para fazer um link para uma pagina -->

        </div>
    </a>
</div>
<?= $this->Flash->render() ?>
<!--- utilziado para mostrar o nome do usuário cadastrado no sistema-->
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th class="d-none d-lg-table-cell">ID</th>
                <th class="d-none d-lg-table-cell">Nome</th>
                <th class="d-none d-sm-table-cell">E-mail</th>
                <th class="d-none d-lg-table-cell">Data do Cadastro</th>
                <th class="d-none d-lg-table-cell">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['confirm' => __('Você tem certeza que deseja deletar  # {0}?', $user->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?=
    $this->element('pagination');
?>