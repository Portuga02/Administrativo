<div class="d-flex">
                        <div class="mr-auto p-2">
                            <h2 class="display-4 titulo">Usuário</h2>
                        </div>
                        <div class="p-2">
                            <span class="d-none d-md-block">
                                <?= $this->Html->link(__('Listar'),['controller'=> 'users', 'action' =>'index'],['class="btn btn-outline-info btn-sm"'])?>
                                <?= $this->Html->link(__('Editar'),['controller' => 'users', 'action' =>'edit', $user->id],['class="btn btn-outline-warning btn-sm"']) ?>
                                <?= $this->Html->link(__('Deletar'),['controller'=>'users', 'action' =>'delete',$user->id],['confirm' => __('Você realmente deseja deletar  #{0} ?', $user->id),['class="btn btn-outline-danger btn-sm"']]) ?>
                               
                            </span>
                            <div class="dropdown d-block d-md-none">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ações
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                                    
                                    <a class="dropdown-item" href="listar.html">Listar</a>
                                    <a class="dropdown-item" href="editar.html">Editar</a>
                                    <a class="dropdown-item" href="apagar.html" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                                </div>
                            </div>
                        </div>
                    </div><hr>


                    <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

                    <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
