<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Usuário</h2>
    </div>
    <?= $this->Flash->render() ?>
    <div class="p-2">
        <?= $this->Html->link(__('Listar'), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
    </div>
</div>
<hr>
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
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Usuário</label>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Nome do Usuário', 'label' =>
            false]);
        ?>

    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Senha</label>
<?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Digite sua senha ', 'label' => false]); ?>

    </div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>

<?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-success']) ?>

<?= $this->Form->end(); ?>