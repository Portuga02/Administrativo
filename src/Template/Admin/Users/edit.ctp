<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Usuário</h2>
    </div>
    <?= $this->Flash->render() ?>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Listar'), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
            <?= $this->Html->link(__('Visualizar'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>
            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar o usuáriom #{0}?', $user->id)]); ?>
        </span>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($user) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome</label>
        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Digite seu nome completo', 'label' =>
        false]);
        ?>

    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> E-mail</label>
        <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Digite seu email ', 'label' => false]); ?>
    </div>
</div>
<?= $this->Form->create($user) ?>
<div class="form-row">
    <div class="form-group col-md-12">
        <label><span class="text-danger">*</span> Usuário</label>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Nome do Usuário', 'label' =>
        false]);
        ?>

    </div>

</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>

<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']) ?>

<?= $this->Form->end(); ?>